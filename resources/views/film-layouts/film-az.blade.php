@include('film-layouts.head')
@include('film-layouts.navbar')
<div class="faq">
		<h4 class="latest-text w3_faq_latest_text w3_latest_text">Film Listesi</h4>
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li><a href="/">Anasayfa</a></li>
					  <li class="active">A-Z List</li>
					</ol>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul  id="myTab" class="nav nav-tabs" role="tablist">
            @foreach($films as $film)
            <li role="presentation">
            <a href="/a-z/{{substr($film->name,0,1)}}" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">{{substr($film->name,0,1)}}</a>
            </li>     
            @endforeach
                          
            </ul>
					
					<table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr style="background-color: #FF8D1B">
                      	<th style="color: white;"># Sıra</th>
                        <th style="color: white;">Film Adı</th>
                        <th style="color: white;">Film Resmi</th>
                        <th style="color: white;">Kategori Adı</th>
                        <th style="color: white;">Yönetmen</th> 	 	 
                        <th style="color: white;">Yapım Yılı</th>
                        <th style="color: white;">IMDB</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($films as $film)
                      <tr>
                      	
                      	<td style="color:black">{{$film->id}}</td>
                        <td><a href="/icerik/{{$film->name}}" style="color:black">{{$film->name}}</a></td>
                        <td><a href="/icerik/{{$film->name}}"><img style="width:100px;height:150px;" src="../uploads/films/{{$film->image}}"></a></td>
                        <td><a href="/film-kategori/{{$film->category_name}}" style="color:black">{{$film->category_name}}</a></td>
                        <td style="color:black">{{$film->artist}}</td>
                        <td style="color:black">{{$film->date}}</td>
                        <td><span class="badge badge-warning p-2 mt-1">IMDB <b style="color: black">{{substr($film->imdb,0,3)}}</b></span></td>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table><br>
                 
								</div>
							</div>
				</div>
			</div>
	</div>
	@include('film-layouts.footer')