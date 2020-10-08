<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_adi',
        'site_basligi',  
        'site_aciklama',
        'anahtar_kelimeler',
        'site_yazar',
        'footer_yazi',
        'image'
          
    ];
}
