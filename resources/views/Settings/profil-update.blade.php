@extends('layouts.admin-master')
@section('profil')
  <div class="row">
            <div class="container-fluid col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="card-body">
                  <form action="{{route('Settings.profil-update',$user->id)}}" method="POST">
                    <div class="form-group">
                      @if($user->is_admin==1)
                      <span class="badge badge-primary p-2">ADMİN</span>
                      @endif
                    </div>
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