<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\Category;
use App\Setting;

class AnasayfaController extends Controller
{
    public function index()
    {
        $settings=DB::table('settings')->get();
        $categories = DB::table('categories')->get();
        $films = Film::orderBy('created_at','desc')->paginate(24);
    	return view('film-layouts.index',compact('categories','films','settings'));
    }

    
    /*public function createView()
    {
        return view('users.register');
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
        return back();
    }*/
  
}
