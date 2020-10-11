
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Yorumlar</a>
							<div class="agile-info-wthree-box">
								<form method="POST" action="{{route('film-layouts.comment-create')}}">
									@csrf
									<input type="text" name="name" placeholder="Adınız" required="">			           					   
									<input type="text" name="email" placeholder="Mail" required="">
									<textarea name="message" placeholder="Yorum" required=""></textarea>
									<input type="hidden" name="film_adi" value="{{$film->name}}">
									<input type="submit" value="Gönder">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">
								@foreach($comments as $comment)
								
							<div class="media">
								<h5>{{$comment->name}}</h5>
								
								<div class="media-body">
									<p>{{$comment->message}}</p>
									<span>Tarih: {{substr($comment->created_at,0,10)}} </a></span>
								</div>
							</div>
							
							@endforeach
					

						</div>
					</div>