<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;
use App\User;
use App\Film;
use App\Category;
use App\Comment;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user=User::where('id','=','1')->get();
        $user=$user->first();
        
        return view('layouts.admin-master',compact('user'));
    }
    public function Veri()
    {
        $users=User::where('deleted_at','=',null)->get();
        $users->count();
        $films=Film::where('deleted_at','=',null)->get();
        $films->count();
        $categories=Category::where('deleted_at','=',null)->get();
        $categories->count();
        $comments=Comment::where('deleted_at','=',null)->get();
        $comments->count();
        return view('layouts.admin-veri',compact('films','categories','comments','users'));
    }

    

  
}


