<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\Category;

class KategoriController extends Controller
{
    public function adminCategory()
    {
    	$categories = Category::where('deleted_at','=',null)->get();//Veritabanından kullanıcıları çeker
    	return view('layouts.admin-category',compact('categories'));
    }

    public function delete($id)
    {
        DB::table('categories')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now() //ile silindiği tarihi kaydeder.
        ]);

        return back();
    }

    public function updateView($id)
    {
        $category=Category::where('id',$id)->get();
        $category=$category->first();
        return view('layouts.category-update',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category=Category::where('id',$id)->update([
            'name'       =>$request->get('name'),
            'ranking'    =>$request->get('ranking'),
            'updated_at' =>Carbon::now()
        ]);
        return back();
    }

    public function createView()
    {
        return view('layouts.category-create');
    }
    public function create(Request $request)
    {
    
        DB::table('categories')->insert([
            'name'     => $request->get('name'),
            'ranking'  => $request->get('ranking'),
            'created_at' => Carbon::now()
            
        ]);
        return back();
    }
}
