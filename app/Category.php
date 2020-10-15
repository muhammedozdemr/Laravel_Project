<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
    	'name',
    	'ranking'


    ];

     public function film()
        {   
            return $this->hasMany('App\Film','id','category_name','name','image','date','imdb','view');
        }
}

