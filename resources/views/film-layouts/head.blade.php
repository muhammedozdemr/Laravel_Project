<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="tr">
<head>
	@foreach($settings as $setting)
<title>{{$setting->site_basligi}}</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html" charset=UTF-8 />
<meta name="keywords" content="{{$setting->anahtar_kelimeler}}" />
<meta name="description" content="{{$setting->site_aciklama}}">
<meta name="author" content="{{$setting->site_yazar}}">
@endforeach
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/contactstyle.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('css/faqstyle.css')}}" type="text/css" media="all" />
<link href="{{asset('css/single.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/medile.css')}}" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="{{asset('css/jquery.slidey.min.css')}}" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- //font-awesome icons -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				@foreach($settings as $setting)
				@if($setting->image==null)
				<h2>FilmSa Film</h2>
                @else
				<a href="/"><img width="150px;" style="margin-top: -40px; margin-bottom: -30px; margin-right: 20px;" src="../uploads/films/{{$setting->image}}"></a>
				@endif
				@endforeach
			</div>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Ara" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Giriş & Kayıt Ol</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Giriş & Kayıt Ol 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Tıkla</div>
							  </div>
							  <div class="form">
								<h3>Hesabınıza giriş yapın</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Mail Adresiniz" required="">
								  <input type="password" name="Password" placeholder="Parolanız" required="">
								  <input type="submit" value="Giriş">
								</form>
							  </div>
							  <div class="form">
								<h3>Hesap oluştur</h3>
								<form action="#" method="post">
								  <input type="text" name="name" placeholder="Ad ve Soyad Giriniz" required="">
								  <input type="text" name="mail" placeholder="Mail Adresiniz" required="">
								  <input type="password" name="Password" placeholder="Parolanız" required="">
								  <input type="password" name="Password_confirm" placeholder="Parola Tekrar" required="">
								  <input type="submit" value="Kayıt">
								</form>
							  </div>
							  <div class="cta"><a href="#">Parolanızı mı unuttunuz?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
