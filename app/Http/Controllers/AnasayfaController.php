<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\Category;

class AnasayfaController extends Controller
{
    public function index()
    {
    	return view('film-layouts.index');
    }

    public function createView()
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
    }
  
}
