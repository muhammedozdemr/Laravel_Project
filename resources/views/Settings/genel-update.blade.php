@extends('layouts.admin-master')
@section('g-ayarlar')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<div class="row">
	
            <div class="container-fluid col-lg-10">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Genel Ayarlar</h6>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="card-body">
                  <form action="{{route('Settings.genel-update',$ayar->id)}}" method="POST" enctype="multipart/form-data">
                  	<div class="form-group">
                     	<label><b>Yüklü Resim</b></label><br>
                      @if($ayar->image==null)
                      <img width="100" height="150" src="../img/resimyok.jpeg"><br><br>
                      @else
                      <img width="100" height="150" src="../uploads/films/{{$ayar->image}}"><br><br>
                      @endif
                      <input type="file" name="image">
                      
                    </div>
                    <div class="form-group">
                    	<label><b>Site Adresi</b></label>
                      <input type="text" class="form-control" name="site_adi" value="{{$ayar->site_adi}}">
                    </div>
                     <div class="form-group">
                    	<label><b>Site Başlığı</b></label>
                      <input type="text" class="form-control" name="site_basligi" value="{{$ayar->site_basligi}}">
                    </div>
                     <div class="form-group">
                    	<label><b>Site Açıklama</b></label>
                      <input type="text" class="form-control" name="site_aciklama" value="{{$ayar->site_aciklama}}">
                    </div>
                     <div class="form-group">
                    	<label><b>Site Anahtar Kelimeler</b></label>
                      <input type="text" class="form-control" name="anahtar_kelimeler" value="{{$ayar->anahtar_kelimeler}}">
                    </div>
                     <div class="form-group">
                    	<label><b>Site Yazar</b></label>
                      <input type="text" class="form-control" name="site_yazar" value="{{$ayar->site_yazar}}">
                    </div>
                     <div class="form-group">
                    	<label><b>Footer Yazı</b></label>
                      <input type="text" class="form-control" name="footer_yazi" value="{{$ayar->footer_yazi}}">
                    </div>
                    
                    @csrf
                   
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
@endsection