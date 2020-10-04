<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/movie.jpeg);">
					<span class="login100-form-title-1">
						Kayıt Ol
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="{{route('users.register')}}">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">{{ __('Name') }}</span>
						<input class="input100" type="text" name="name" value="{{ old('name') }}" placeholder="Ad Soyad Giriniz" required>
					</div>
					<div class="wrap-input100 validate-input m-b-26" >
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Mail Giriniz" required>
					</div>
					
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">{{ __('Password') }}</span>
						<input class="input100" type="password" name="password" placeholder="Parola Giriniz" required>
					</div>
					@csrf

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Register') }}
						</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="daterangepicker/moment.min.js"></script>
	<script src="daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>