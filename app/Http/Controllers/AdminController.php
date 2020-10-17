<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Film;
use App\User;

class AdminController extends Controller
{
	public function getFilms($kategori=null)
	{
		if($kategori == 'aksiyon')
		{
			return Film::with(['kategori'])->get();
		}
		else
		{
			return Film::all();
		}
		
	}

	
}
