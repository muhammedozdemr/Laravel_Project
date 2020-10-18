	<div id="slidey" style="display:none;">
		<ul>
			@foreach($sliders as $slider)
			
			<li><img src="img/{{$slider->image}}" alt=" "><p class='title'>{{$slider->name}}</p><p class='description'> {{substr($slider->detail,0,300)}} ...</p></li>
			
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