@extends('layouts.admin-master')
@section('users-list')
  <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kullanıcılar Listesi</h6>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Ad Soyad</th>
                        <th>Email</th>
                        <th colspan="2">Kayıt Tarihi</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td class="text-right"><a href="/usil/{{$user->id}}" class="btn btn-danger">Sil</a>
                        <a href="/uguncelle/{{$user->id}}" class="btn btn-success">Güncelle</a></td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table><br>
                  
             
                 {{$users->links()}}
                  
                  
                </div>
              </div>
            </div>
        </div>
            
@endsection