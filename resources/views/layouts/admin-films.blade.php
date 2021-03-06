@extends('layouts.admin-master')
@section('films-table')

  <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="/admin-films">Filmler Listesi</a></h6>
                
                  <form action="/ara" method="get">
                    <input style="border-top:0;border-right:0;border-left:0;margin-bottom: -10px;width: 300px;border-bottom:1px solid #6777F0" type="text" name="ara" class="form-group" placeholder="Ara...">
                    
                  </form>
                 
                  <a href="/film-ekle" class="btn btn-info">Film Ekle</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Artist</th> 	 	 
                        <th>Year</th>
                        <th>IMDB</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($films as $film)
                      <tr>
                        <td>{{$film->name}}</td>
                        <td><img style="width:100px;height:150px;" src="uploads/films/{{$film->image}}"></td>
                        <td>{{$film->category_name}}</td>
                        <td>{{$film->artist}}</td>
                        <td>{{$film->date}}</td>
                        <td><span class="badge badge-warning p-2 mt-1">IMDB <b style="color: black">{{substr($film->imdb,0,3)}}</b></span></td>
                        <td class="text-right"><a href="/sil/{{$film->id}}" class="btn btn-danger">Sil</a></td>
                        <td class="text-right"><a href="/guncelle/{{$film->id}}" class="btn btn-success">Güncelle</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table><br>
                  {{$films->links()}}
                </div>
              </div>
            </div>
        </div>
            
@endsection