	<div id="slidey" style="display:none;">
		<ul>
			@foreach($films as $film)
			@if($film->id>=4 && $film->id<=8 )
			<li><img src="uploads/films/{{$film->image}}" alt=" "><p class='title'>{{$film->name}}</p><p class='description'> {{substr($film->detail,0,300)}} ...</p></li>
			@endif
			@endforeach
		</ul>   	
    </div>
    <script src="{{asset('js/jquery.slidey.js')}}"></script>
    <script src="{{asset('js/jquery.dotdotdot.min.js')}}"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>