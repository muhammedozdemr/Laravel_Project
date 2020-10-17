<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li style="width: 220px;" class="active"><a href="/">Anasayfa</a></li>
							<li style="width: 220px;" class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<li>
										@foreach($categories as $category)
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<li><a href="/film-kategori/{{$category->name}}">{{$category->name}}</a></li>
										</ul>
									</div>
									@endforeach
									</li>
								</ul>
							</li>
							<li style="width: 220px;"><a href="/yenifilmler">Yeni Filmler</a></li>
							<li style="width: 220px;"><a href="/begenilenler">En Çok Beğenilenler</a></li>
							<li style="width: 220px;"><a href="/encokizlenenler">En Çok İzlenenler</a></li>
							
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>