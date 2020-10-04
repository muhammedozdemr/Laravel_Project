<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\UploadPaths;
use Carbon\Carbon;
use App\Film;
use App\User;
use App\Category;

class FilmController extends Controller
{
    
    public function adminFilms()
    {
        
    	$films = Film::where('deleted_at','=',null)->get();//Veritabanından kullanıcıları çeker
    	return view('layouts.admin-films',compact('films'));
    }

    public function delete($id)
    {
        DB::table('films')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now() //ile silindiği tarihi kaydeder.
        ]);

        return back();
    }

    public function updateView($id)
    {   
        $film=Film::where('id',$id)->get();
        $film=$film->first();
        $categories = DB::table('categories')->get();
        return view('layouts.film-update',compact('film','categories'));
    }

    public function update(Request $request,$id)
    {
        $film=Film::where('id',$id)->update([
            'name'           =>$request->get('name'),
            'category_name'  =>$request->get('category_name'),
            'detail'         =>$request->get('detail'),
            'imdb'           =>$request->get('imdb'),
            'director'       =>$request->get('director'),
            'artist'         =>$request->get('artist'),
            'time'           =>$request->get('time'),
            'tags'           =>$request->get('tags'),
            'image'          =>$request->get('image'),
            'video'          =>$request->get('video'),
            'updated_at'     =>Carbon::now()
        ]);
        return back();
    }

    public function createView()
    {
        $categories = DB::table('categories')->get();
        return view('layouts.film-create',compact('categories'));
    }
    public function create(Request $request)
    {

        $name = $request->get('name');
        $category_name = $request->get('category_name');
        $detail = $request->get('detail');
        $imdb = $request->get('imdb');
        $director = $request->get('director');
        $artist = $request->get('artist');
        $time = $request->get('time');
        $tags = $request->get('tags');
        $fileImageUrl = $request->file('image');
        $video = $request->get('video');

        if(isset($fileImageUrl))
        {
            $filmImageName = uniqid('film_'). '.' . $fileImageUrl->getClientOriginalExtension();
            $fileImageUrl->move(UploadPaths::getUploadPath('film_images'),$filmImageName);

        }

        Film::create([
            'name'          => $name,
            'category_name' => $category_name,
            'detail'        => $detail,
            'imdb'          => $imdb,
            'director'      => $director,
            'artist'        => $artist,
            'time'          => $time,
            'tags'          => $tags,
            'image'         => $filmImageName,
            'video'         => $video
        ]);

        return back();
            
       
    }


}
