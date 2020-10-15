<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	
    protected $fillable = [
        'name',
        'category_name',  
        'detail',
        'imdb',
        'director',
        'artist',
        'time',
        'views',
        'date',
        'tags',
        'image',
        'video'    
    ];

    public function kategori()
        {   
            return $this->hasMany('App\Category','id','name','ranking');
        }

}
