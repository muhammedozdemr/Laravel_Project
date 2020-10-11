@extends('layouts.admin-master')
@section('users-comment')
  <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Yorumlar Listesi</h6>
                </div>
                @include('partials.errors')
                @include('partials.alert')
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Ad Soyad</th>
                        <th>Email</th>
                        <th>Film Adı</th>
                        <th>Yorum</th>
                        <th colspan="2">Yorum Tarihi</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($comments as $comment)
                      <tr>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->film_adi}}</td>
                        <td>{{$comment->message}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td class="text-right">
                          <a href="/csil/{{$comment->id}}" class="btn btn-danger">Sil</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table><br>
                  
             
                 {{$comments->links()}}
                  
                  
                </div>
              </div>
            </div>
        </div>
            
@endsection