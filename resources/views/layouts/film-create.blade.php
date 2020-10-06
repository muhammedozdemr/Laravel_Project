@extends('layouts.admin-master')
@section('f-create')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<div class="row">
	
            <div class="container-fluid col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Film Ekle</h6>
                  <a href="/admin-films" class="btn btn-info">Geri Dön</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
               
           
                        <div class="card-body">
                  <form action="{{route('layouts.film-create')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    	<label><b>Film Adı</b></label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                    <label><b>Kategorı Adı</b></label>
                    <select class="select2-single form-control" name="category_name" id="select2Single">
                      <option selected>Seçiniz</option>
                      @foreach($categories as $category)
                      <option>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                     <div class="form-group">
                     	<label><b>Film Detay</b></label>
                      <textarea name="detail"></textarea>
                	<script>
                        CKEDITOR.replace( 'detail' );
                	</script>
                    </div>
                     <div class="form-group">
                     	<label><b>IMDB</b></label>
                      <input type="text" class="form-control" name="imdb" >
                    </div>
                     <div class="form-group">
                     	<label><b>Yönetmen</b></label>
                      <input type="text" class="form-control" name="director">
                    </div>
                     <div class="form-group">
                     	<label><b>Oyuncular</b></label>
                      <input type="text" class="form-control" name="artist" >
                    </div>
                     <div class="form-group">
                     	<label><b>Film Süresi</b></label>
                      <input type="text" class="form-control" name="time" >
                    </div>
                     <div class="form-group">
                    <label><b>Film Etiketi</b></label>
                    <select class="select2-single form-control" name="tags" id="select2Single">
                      <option selected>Seçiniz</option>
                      @foreach($categories as $category)
                      <option>{{$category->name}}</option>
                      @endforeach
                    </select>
                    </div>
                  @csrf
                     <div class="form-group">
                     	<label><b>Resim Yükle</b></label><br>
                      
                      <input type="file" name="image">           
                      
                    </div>
                     <div class="form-group">
                     	<label><b>Film Video</b></label>
                      <input type="text" class="form-control" name="video" >
                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary">Ekle</button>
                  </form>
                </div>
              </div>
            </div>
           
          </div>

<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>
@endsection