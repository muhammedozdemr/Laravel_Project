	<div class="general">
		<h4 class="latest-text w3_latest_text">Öne Çıkan Filmler</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Yeni Filmler</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">En Çok İzlenilenler</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">En Çok Beğenilenler</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							
							
							@foreach($films as $film)
							
							@if($film->date==2020 && $film->imdb>=5.9)
							
							
							
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/icerik/{{$film->name}}" class="hvr-shutter-out-horizontal"><img src="uploads/films/{{$film->image}}" style="height: 250px;" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="/icerik/{{$film->name}}">{{$film->name}}</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>{{$film->date}}</p>
										<div class="block-stars">
											<span class="badge badge-warning p-2 mt-1">IMDB 
							<b style="color: black">{{substr($film->imdb,0,3)}}</b>
						</span>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
							
							@endif
							
							@endforeach
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/yenifilmler"><img src="{{asset('img/3.png')}}" style="height: 250px;" title="album-name" class="img-responsive" />
								</a>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						@foreach($films as $film)
						@if($film->views>=700)

						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="/icerik/{{$film->name}}" class="hvr-shutter-out-horizontal"><img src="uploads/films/{{$film->image}}" style="height: 250px;" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="/icerik/{{$film->name}}">{{$film->name}}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>{{$film->date}}</p>
									<div class="block-stars">
										<span class="badge badge-warning p-2 mt-1">IMDB 
							<b style="color: black">{{substr($film->imdb,0,3)}}</b>
						</span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						</div>
						@endif
						@endforeach
						<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/encokizlenenler"><img src="{{asset('img/3.png')}}" style="height: 250px;" title="album-name" class="img-responsive" />
								</a>
							</div>
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
						@foreach($films as $film)
						@if($film->imdb>=8.1)

						<div class="col-md-2 w3l-movie-gride-agile">
							<a href="/icerik/{{$film->name}}" class="hvr-shutter-out-horizontal"><img src="uploads/films/{{$film->image}}" style="height: 250px;" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="/icerik/{{$film->name}}">{{$film->name}}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>{{$film->date}}</p>
									<div class="block-stars">
										<span class="badge badge-warning p-2 mt-1">IMDB 
							<b style="color: black">{{substr($film->imdb,0,3)}}</b>
						</span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						</div>
						@endif
						@endforeach
						<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/begenilenler"><img src="{{asset('img/3.png')}}" style="height: 250px;" title="album-name" class="img-responsive" />
								</a>
							</div>
						<div class="clearfix"> </div>
					</div>
				
				</div>
			</div>
		</div>
	</div>