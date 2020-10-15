<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
       protected $fillable = [
    	'name',
    	'email',
    	'message',
    	'film_adi'


    ];

     public function film()
        {   
            return $this->hasMany('App\Film','id','category_name','name','image','date','imdb','view');
        }
}
