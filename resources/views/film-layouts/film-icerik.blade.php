@include('film-layouts.head')
@include('film-layouts.navbar')
<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="/">Anasayfa</a></li>
				  @foreach($films as $film)
				  <li class="active">{{$film->name}}</li>
				  @endforeach
				</ol>
			</div>
			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
                           	@foreach($films as $film)
				<div class="col-sm-6 single-left">
					<div class="song">
						<div class="song-info">
							<h3>{{$film->name}}</h3>	
						</div>
						<div class="video-grid-single-page-agileits">
							<div data-video="dLmKio67pVQ" id="video"> 
								<iframe width="555" height="315" src="https://www.youtube.com/embed/{{$film->video}}"></iframe> 
							</div>
						</div>
					</div>
			
				@endforeach
				
					<div class="clearfix"> </div>
					@include('film-layouts.comment-create')
				</div>
				@foreach($films as $film)
				<div class="col-md-6 single-right" >
					<li style="margin-top: -20px;list-style-type: none;">
						<span class="badge badge-warning p-2 mt-1">IMDB 
							<b style="color: black">{{substr($film->imdb,0,3)}}</b>
						</span>
					</li>
					<table style="margin-top: 35px;" class="table table-striped table-dark text-white">
					  <tbody>
					  	<tr>
					  		
					  		<td colspan="2">{{$film->detail}}</td>
					  	</tr>
					    <tr>
					      <th scope="row">Yönetmen:</th>
					      <td>{{$film->director}}</td>
					      
					    </tr>
					    <tr>
					      <th scope="row">Oyuncular:</th>
					      <td>{{$film->artist}}</td>
					      
					    </tr>
					    <tr>
					      <th scope="row">Film Süresi:</th>
					     <td>{{$film->time}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Yapım Yılı:</th>
					     <td>{{$film->date}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Film Türü:</th>
					     <td>{{$film->category_name}}</td>
					    </tr>
					  </tbody>
					</table>
					
				</div>
				@endforeach
				

				
				<div class="clearfix"> </div>
			</div>
				<!-- //movie-browse-agile -->
				<!--body wrapper start-->
	
		<!--body wrapper end-->
				
							 
				</div>
				<!-- //w3l-latest-movies-grids -->
			</div>	
		</div>
		
		@include('film-layouts.footer')