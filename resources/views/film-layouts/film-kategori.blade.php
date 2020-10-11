@include('film-layouts.head')
@include('film-layouts.navbar')
<div class="general-agileits-w3l">
		<div class="w3l-medile-movies-grids">

				<!-- /movie-browse-agile -->
				
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
							
								<div class="tittle-head">

									<h4 class="latest-text"> Filmleri </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="/">Anasayfa</a></li>
											  <li class="active"></li>
											</ol>
										</div>
									</div>
								</div>
								
								     <div class="container">
							<div class="browse-inner">
	
								@foreach($films as $film)
								
								    <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="/icerik/{{$film->name}}" class="hvr-shutter-out-horizontal"><img style="height: 250px;" src="../uploads/films/{{$film->image}}" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="/icerik/{{$film->name}}">{{$film->name}}</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>{{$film->date}}</p>
											 <div class="block-stars">
												<span class="badge badge-warning p-2 mt-1">IMDB 
							<b style="color: black">{{substr($film->imdb,0,3)}}</b>
						</span>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
									@if($film->date==2020)
							 	    <div class="ribben two">
										<p>NEW</p>
									</div>	
									@endif
									</div>
									
									@endforeach
							
							
				
				</div>
			</div>
			<center><div>
							
								{{$films->links()}}
							
						</div></center>
						<!--body wrapper end-->
					</div>	
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
	</div>
@include('film-layouts.footer')