<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\UploadPaths;
use Carbon\Carbon;
use App\Film;
use App\Category;
use App\User;
use App\Setting;

class YonetimController extends Controller
{

	public function updateView($id)
    {
        $user=User::where('id',$id)->get();
        $user=$user->first();
        return view('Settings.profil-update',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user=User::where('id',$id)->update([
            'name'       =>$request->get('name'),
            'email'    =>$request->get('email'),
            'updated_at' =>Carbon::now()
        ]);
        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarıyla Güncellendi')
            ->with('mesaj_tur','success');
    }

//Genel Ayarlar İşlemleri

    public function gupdateView($id)
    {   
        $ayar=DB::table('settings')->get();
        $ayar=$ayar->first();
        return view('Settings.genel-update',compact('ayar'));
    }

    public function gupdate(Request $request,$id)
    {
        $site_adi = $request->get('site_adi');
        $site_basligi = $request->get('site_basligi');
        $site_aciklama = $request->get('site_aciklama');
        $anahtar_kelimeler = $request->get('anahtar_kelimeler');
        $site_yazar = $request->get('site_yazar');
        $footer_yazi = $request->get('footer_yazi');
        $fileImageUrlll = $request->file('image');

        if(isset($fileImageUrlll))
        {
            $ayarImageNameee = uniqid('ayar_'). '.' . $fileImageUrlll->getClientOriginalExtension();
            $fileImageUrlll->move(UploadPaths::getUploadPath('ayar_images'),$ayarImageNameee);

        }

        $ayar=Setting::where('id',$id)->update([
            'site_adi'          => $site_adi,
            'site_basligi'      => $site_basligi,
            'site_aciklama'     => $site_aciklama,
            'anahtar_kelimeler' => $anahtar_kelimeler,
            'site_yazar'        => $site_yazar,
            'footer_yazi'       => $footer_yazi,
            'image'             => $ayarImageNameee,
            'updated_at'        =>Carbon::now()
        ]);
        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarıyla Güncellendi')
            ->with('mesaj_tur','success');
    }
}
