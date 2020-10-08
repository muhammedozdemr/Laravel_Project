<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\Category;
use App\User;

class UserController extends Controller
{
    public function userList()
    {
    	$users = User::where('deleted_at','=',null)->where('is_admin','=','0')->orderBy('created_at','desc')->paginate(6);//Veritabanından kullanıcıları çeker
    	return view('layouts.admin-user',compact('users'));
    }

    public function delete($id)
    {
        DB::table('users')->where('id','=',$id)->update([
            'deleted_at' => Carbon::now() //ile silindiği tarihi kaydeder.
        ]);

        return redirect()
            ->back()
            ->with('mesaj','Kayıt Başarıyla Silindi')
            ->with('mesaj_tur','success');
    }

    public function updateView($id)
    {
        $user=User::where('id',$id)->get();
        $user=$user->first();
        return view('layouts.users-update',compact('user'));
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
}
