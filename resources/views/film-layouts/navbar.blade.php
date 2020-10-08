<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Anasayfa</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<li>
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											@foreach($categories as $category)
											<li><a href="#">{{$category->name}}</a></li>
											@endforeach
										</ul>
									</div>
									</li>
								</ul>
							</li>
							<li><a href="series.html">Yeni Filmler</a></li>
							<li><a href="news.html">En Çok Beğenilenler</a></li>
							<li><a href="short-codes.html">En Çok İzlenenler</a></li>
							<li><a href="list.html">A - z </a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>