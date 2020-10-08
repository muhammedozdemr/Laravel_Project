@extends('layouts.admin-master')
@section('f-update')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<div class="row">
	
            <div class="container-fluid col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Film Güncelle</h6>
                  <a href="/admin-films" class="btn btn-info">Geri Dön</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="card-body">
                  <form action="{{route('layouts.film-update',$film->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    	<label><b>Film Adı</b></label>
                      <input type="text" class="form-control" name="name" value="{{$film->name}}">
                    </div>
                    <div class="form-group">
                    <label><b>Film Etiketi</b></label>
                    <select class="select2-single form-control" name="category_name" id="select2Single">
                      <option selected>{{$film->category_name}}</option>
                      @foreach($categories as $category)
                      <option>{{$category->name}}</option>
                      @endforeach
                    </select>
                    </div>
                     <div class="form-group">
                     	<label><b>Film Detay</b></label>
                      <textarea name="detail">{{$film->detail}}</textarea>
                	<script>
                        CKEDITOR.replace( 'detail' );
                	</script>
                    </div>
                     <div class="form-group">
                     	<label><b>IMDB</b></label>
                      <input type="text" class="form-control" name="imdb" value="{{$film->imdb}}">
                    </div>
                     <div class="form-group">
                     	<label><b>Yönetmen</b></label>
                      <input type="text" class="form-control" name="director" value="{{$film->director}}">
                    </div>
                     <div class="form-group">
                     	<label><b>Oyuncular</b></label>
                      <input type="text" class="form-control" name="artist" value="{{$film->artist}}">
                    </div>
                     <div class="form-group">
                     	<label><b>Film Süresi</b></label>
                      <input type="text" class="form-control" name="time" value="{{$film->time}}">
                    </div>
                     <div class="form-group">
                      <label><b>Film Yılı</b></label>
                      <input type="text" class="form-control" name="date" value="{{$film->date}}">
                    </div>
                     <div class="form-group">
                    <label><b>Film Etiketi</b></label>
                    <select class="select2-single form-control" name="tags" id="select2Single">
                      <option selected>{{$film->tags}}</option>
                      @foreach($categories as $category)
                      <option>{{$category->name}}</option>
                      @endforeach
                    </select>
                    </div>
                     <div class="form-group">
                     	<label><b>Yüklü Resim</b></label><br>
                      <img width="100" height="150" src="../uploads/films/{{$film->image}}"><br><br>
                      <input type="file" name="image">
                    </div>
                     <div class="form-group">
                     	<label><b>Video</b></label>
                      <input type="text" class="form-control" name="video" value="{{$film->video}}">
                    </div>
                    @csrf
                   
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                  </form>
                </div>
              </div>
            </div>
           
          </div>

<script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>

@endsection
