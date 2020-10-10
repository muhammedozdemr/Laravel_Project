<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Filmler</h4>
		<div class="container">
		<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">

							@foreach($films as $film)
					
							
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/icerik/{{$film->id}}" class="hvr-shutter-out-horizontal"><img src="uploads/films/{{$film->image}}" style="height: 250px;" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">{{$film->name}}</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><span class="badge badge-info p-3"><b style="color: black">{{$film->date}}</b></span></p>
										<div class="block-stars">
											<span class="badge badge-warning p-3">IMDB <b style="color: black">{{substr($film->imdb,0,3)}}</b></span>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								@if($film->date==2020)
								<div class="ribben">
									<p>NEW</p>
								</div>
								@endif
							</div>
						
	
							@endforeach
							<div class="clearfix"> </div>
							{{$films->links()}}
						</div>
					</div>
				</div>

			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>