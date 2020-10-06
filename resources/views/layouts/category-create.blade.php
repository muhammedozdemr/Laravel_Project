@extends('layouts.admin-master')
@section('c-create')
<div class="row">
            <div class="container-fluid col-lg-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kategori Ekle</h6>
                  <a href="/admin-category" class="btn btn-info">Geri Dön</a>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                
                <div class="card-body">

                  <form action="{{route('layouts.category-create')}}" method="POST">
                    <div class="form-group">
                    <label><b>Kategori Adı</b></label>
                      <input type="text" class="form-control" name="name" placeholder="Kategori Adı Giriniz" required>
                    </div>
                    <div class="form-group">
                    	<label><b>Kategorı Sıralaması</b></label>
                      <input type="text" class="form-control" name="ranking" placeholder="Kategori Sıralama Giriniz" required>
                    </div>
                    @csrf
                   
                    <button type="submit" class="btn btn-primary">Ekle</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection