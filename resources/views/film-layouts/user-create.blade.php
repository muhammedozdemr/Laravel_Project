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
								@include('partials.errors')
                				@include('partials.alert')
								<form action="{{route('film-layouts.user-create')}}" method="post">
									@csrf
								  <input type="email" name="email" placeholder="Mail Adresiniz" required="">
								  <input type="password" name="password" placeholder="Parolanız" required="">
								  <input type="submit" value="Giriş">
								</form>
							  </div>
							  <div class="form">
								<h3>Hesap oluştur</h3>
								@include('partials.errors')
                				@include('partials.alert')
								<form action="{{route('film-layouts.user-create')}}" method="post">
								  <input type="text" name="name" placeholder="Ad ve Soyad Giriniz" required="">
								  <input type="email" name="email" placeholder="Mail Adresiniz" required="">
								  <input type="password" name="Password" placeholder="Parolanız" required="">
								  @csrf
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