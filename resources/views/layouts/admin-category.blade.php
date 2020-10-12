@extends('layouts.admin-master')
@section('category-table')
  <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kategoriler Listesi</h6>
                   
                  <a href="/kategori-ekle" class="btn btn-info">Kategori Ekle</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2">Ranking</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($categories as $category)
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->ranking}}</td>
                        <td class="text-right">
                          <a href="/delete/{{$category->id}}" class="btn btn-danger">Sil</a>
                          <a href="/edit/{{$category->id}}" class="btn btn-success">Güncelle</a>
                        </td>
                      </tr>
                     	@endforeach
                    </tbody>
                  </table><br>
                  {{$categories->links()}}
                </div>

                <div class="card-footer"></div>
              </div>
@endsection