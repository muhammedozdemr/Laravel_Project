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
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films = Film::orderBy('created_at','desc')->paginate(24);
    	return view('film-layouts.index',compact('categories','films','settings','comments'));
    }
     public function tumfilmler()
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films = Film::orderBy('created_at','desc')->paginate(18);
        return view('film-layouts.tum-filmler',compact('categories','films','settings','comments'));
    }
    

    public function icerik($name)
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->where('film_adi','=',$name)->orderBy('created_at','desc')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->where('name','=',$name)->get();

        return view('film-layouts.film-icerik',compact('films','settings','categories','comments'));
    }
    public function show($id)
    {
        $films=Film::find($id);
        $films->increments('views');
        return view('film-layouts.show',['films'=>$films]);
    }

     public function filmKategori($name)
    
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->where('category_name','=',$name)->orderBy('date','desc')->paginate(24);

        return view('film-layouts.film-kategori',compact('films','settings','categories','comments'));
    }
    public function filmYeni()
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->orderBy('date','desc')->paginate(30);

        return view('film-layouts.film-yeni',compact('films','settings','categories','comments'));
    }
    public function filmBegeni()
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->orderBy('date','desc')->paginate(30);

        return view('film-layouts.film-begeni',compact('films','settings','categories','comments'));
    }
    public function filmIzlenen()
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->orderBy('views','desc')->paginate(31);

        return view('film-layouts.film-izlenen',compact('films','settings','categories','comments'));
    }
    public function azList()
    {
      
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $films=DB::table('films')->orderBy('id','asc')->paginate(12);

        return view('film-layouts.film-az',compact('films','settings','categories','comments'));
    }

    public function commentView()
    {
        return view('film-layouts.comment-create');
    }
    public function comment(Request $request)
    {
    
        DB::table('comments')->insert([
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'message'    => $request->get('message'),
            'film_adi'    => $request->get('film_adi'),
            'created_at'     =>Carbon::now()
        ]);
        return redirect()
            ->back()
            ->with('mesaj','Yorum Yapıldı ')
            ->with('mesaj_tur','success');
    }

    public function search(Request $request)
    {
        $settings=DB::table('settings')->get();
        $comments=DB::table('comments')->get();
        $categories = DB::table('categories')->get();
        $search=$request->get('search');
        $films=DB::table('films')->where('name','like','%'.$search.'%')->paginate(12);
        return view('film-layouts.arama',['films'=>$films],compact('settings','comments','categories'));
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
  

