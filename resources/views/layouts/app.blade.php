<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.jpg') }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>36zero | @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('main.css') }}">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('OwlCarousel/dist/assets/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('OwlCarousel/dist/assets/owl.theme.default.css') }}">
	<link rel="stylesheet" href="{{ asset('aos-master/aos-master/dist/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('animate/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/css/all.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	@section('header_css')
	@show
</head>
</head>
<body>

	@yield('content')

<script id="dsq-count-scr" src="//36zero-ng.disqus.com/count.js" async></script>
</body>
<script src="{{ asset('fonts/js/all.js') }}"></script>
<script src="{{ asset('jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('aos-master/aos-master/dist/aos.js') }}"></script>
<script src="{{ asset('https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>
<script src="{{ asset('bootstrap/js/boostrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ asset('OwlCarousel/dist/owl.carousel.js') }}"></script> 
<script>
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:50,
		autoplay:true,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});

</script>
<script>
	AOS.init({
		duration:2000,
	});
</script>
</html>