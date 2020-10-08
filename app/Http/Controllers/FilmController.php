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
        
    	$films = Film::where('deleted_at','=',null)->orderBy('date','desc')->paginate(5);//Veritabanından kullanıcıları çeker
    	return view('layouts.admin-films',compact('films'));
    }

    public function delete($id)
    {
        DB::table('films')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now() //ile silindiği tarihi kaydeder.
        ]);

        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarıyla Silindi')
            ->with('mesaj_tur','success');
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
        $name = $request->get('name');
        $category_name = $request->get('category_name');
        $detail = $request->get('detail');
        $imdb = $request->get('imdb');
        $director = $request->get('director');
        $artist = $request->get('artist');
        $time = $request->get('time');
        $date = $request->get('date');
        $tags = $request->get('tags');
        $fileImageUrll = $request->file('image');
        $video = $request->get('video');

        if(isset($fileImageUrll))
        {
            $filmImageNamee = uniqid('film_'). '.' . $fileImageUrll->getClientOriginalExtension();
            $fileImageUrll->move(UploadPaths::getUploadPath('film_images'),$filmImageNamee);

        }

        $film=Film::where('id',$id)->update([
            'name'          => $name,
            'category_name' => $category_name,
            'detail'        => $detail,
            'imdb'          => $imdb,
            'director'      => $director,
            'artist'        => $artist,
            'time'          => $time,
            'date'          => $date,
            'tags'          => $tags,
            'image'         => $filmImageNamee,
            'video'         => $video,
            'updated_at'     =>Carbon::now()
        ]);
        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarıyla Güncellendi')
            ->with('mesaj_tur','success');
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
        $date = $request->get('date');
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
            'date'          => $date,
            'tags'          => $tags,
            'image'         => $filmImageName,
            'video'         => $video
        ]);

        return redirect()
            ->back()
            ->with('mesaj','Başarıyla Kaydedildi')
            ->with('mesaj_tur','success');
            
       
    }


}
