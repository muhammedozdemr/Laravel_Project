@extends('layouts.admin-master')
@section('u-update')
  <div class="row">
            <div class="container-fluid col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kullanıcı Güncelle</h6>
                  <a href="/users-list" class="btn btn-info">Geri Dön</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="card-body">
                  <form action="{{route('layouts.users-update',$user->id)}}" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>
                    @csrf
                   
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection