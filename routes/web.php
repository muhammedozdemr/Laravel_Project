<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//Yönetici ve Sayfa Ayar İşlemleri

Route::post('/pguncelle/{id}','YonetimController@update')->where(array('id'=>'[0-9]+'))->name('Settings.profil-update');
Route::get('/pguncelle/{id}','YonetimController@updateView')->where(array('id'=>'[0-9]+'));

Route::post('/gguncelle/{id}','YonetimController@gupdate')->where(array('id'=>'[0-9]+'))->name('Settings.genel-update');
Route::get('/gguncelle/{id}','YonetimController@gupdateView')->where(array('id'=>'[0-9]+'));




//Veritabanımızdaki Film işlemleri İçin Kullanılmaktadır.
Route::get('/admin-films','FilmController@adminFilms');
Route::get('/sil/{id}','FilmController@delete')->where(array('id'=>'[0-9]+'));
Route::post('/guncelle/{id}','FilmController@update')->where(array('id'=>'[0-9]+'))->name('layouts.film-update');
Route::get('/guncelle/{id}','FilmController@updateView')->where(array('id'=>'[0-9]+'));
Route::get('/film-ekle','FilmController@createView')->name('layouts.film-add');
Route::post('/film-kaydet','FilmController@create')->name('layouts.film-create');
Route::get('/ara','FilmController@ara');

//Veritabanımızdaki Kategori İşlemleri İçin Kullanılmaktadır.
Route::get('/admin-category','KategoriController@adminCategory');
Route::get('/delete/{id}','KategoriController@delete')->where(array('id'=>'[0-9]+'));
Route::post('/edit/{id}','KategoriController@update')->where(array('id'=>'[0-9]+'))->name('layouts.category-update');
Route::get('/edit/{id}','KategoriController@updateView')->where(array('id'=>'[0-9]+'));
Route::get('/kategori-ekle','KategoriController@createView')->name('layouts.category-add');
Route::post('/kategori-kaydet','KategoriController@create')->name('layouts.category-create');


//Veritabanımızdaki Kullanıcı İşlemleri İçin Kullanılmaktadır.
Route::get('users-list','UserController@userList');
Route::get('/usil/{id}','UserController@delete')->where(array('id'=>'[0-9]+'));
Route::get('users-comment','UserController@userComment');
Route::get('/csil/{id}','UserController@cdelete')->where(array('id'=>'[0-9]+'));
Route::post('/uguncelle/{id}','UserController@update')->where(array('id'=>'[0-9]+'))->name('layouts.users-update');
Route::get('/uguncelle/{id}','UserController@updateView')->where(array('id'=>'[0-9]+'));

//Film platformundaki kullanıcılar için kullanılan işlemler

//
Auth::routes();
Route::get('/veriler', 'HomeController@Veri')->name('admin-veri');


//Film Sayfaları
Route::get('/','AnasayfaController@index')->name('film-anasayfa');
Route::get('/user-ekle','AnasayfaController@createView');
Route::post('/user-kayit','AnasayfaController@create')->name('film-layouts.user-create');
Route::get('/g','AnasayfaController@loginView');
Route::post('/giris','AnasayfaController@login')->name('film-layouts.user-create');
Route::get('/icerik/{name}','AnasayfaController@icerik');
Route::get('/film-kategori/{name}','AnasayfaController@filmKategori');
Route::get('/yenifilmler','AnasayfaController@filmYeni');
Route::get('/begenilenler','AnasayfaController@filmBegeni');
Route::get('/encokizlenenler','AnasayfaController@filmIzlenen');
Route::get('/a-z','AnasayfaController@azList');
Route::get('/comment-ekle/{name}','AnasayfaController@commentView');
Route::post('/comment-kayit','AnasayfaController@comment')->name('film-layouts.comment-create');
Route::get('/search','AnasayfaController@search');
Route::get('/tumfilmler','AnasayfaController@tumfilmler');



