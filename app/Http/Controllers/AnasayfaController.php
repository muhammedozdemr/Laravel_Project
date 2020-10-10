<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\Category;
use App\Setting;
use App\User;

class AnasayfaController extends Controller
{
    public function index()
    {
        $settings=DB::table('settings')->get();
        $categories = DB::table('categories')->get();
        $films = Film::orderBy('created_at','desc')->paginate(24);
    	return view('film-layouts.index',compact('categories','films','settings'));
    }

    public function icerik($id)
    {
        $settings=DB::table('settings')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->where('id','=',$id)->get();

        return view('film-layouts.film-icerik',compact('films','settings','categories'));
    }

    
    public function createView()
    {
        return view('film-layouts.user-create');
    }
    public function create(Request $request)
    {
    	$data=$request->all();
    	$password= $request->get('password');
    
        DB::table('users')->insert([
    		'name'     => $request->get('name'),
    		'email'    => $request->get('email'),
    		'password' => Hash::make($password), //kriptolanmış halde şifreleme
    		'created_at'     =>Carbon::now()
    	]);
        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarılı')
            ->with('mesaj_tur','success');
    }

    public function loginView()
    {
      return view('film-layouts.user-create');
    }

    public function login(Request $request)
    {
      //Auth::attempt([$email,$password],true);
      $users=User::all();
      $email=$request->get('email');
      $password=$request->get('password');
      //$hashedPassword=Hash::make($password); daha sonra anlatılacak
      $user=User::where('email',$email)->where('password',$password)->get();

        if(isset($user))
        {
          return view('film-layouts.index',compact('users'));
        }
        else 
        {
            return 'Böyle bir kullanıcı bulunamadı';
        }
    }
  
}
