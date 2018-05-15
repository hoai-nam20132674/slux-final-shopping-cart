
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Slux +</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('css/superfish.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<link rel="stylesheet" href="{{asset('css/styleProcedure.css')}}">
	<link rel="stylesheet" href="{{asset('css/blog-list.css')}}">
	<link rel="stylesheet" href="{{asset('css/recommend-product.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('css/view-product-item.css')}}"> -->
	<link rel="stylesheet" href="{{asset('css/thumbnails.carousel.css')}}">
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- <script src="{{asset('js/carousel.js')}}"></script> -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{asset('js/serviceSlux.js')}}"></script>
	<script src="{{asset('js/sidebar.js')}}"></script>
	<!-- <script src="{{asset('js/feedbackSlux.js')}}"></script> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	@yield('css')
	<!-- css view-product-item -->
	<link rel="canonical" href="https://codepen.io/AttilaBre/pen/RKjaeB?depth=everything&order=popularity&page=15&q=product&show_forks=false" />
	<script src="https://use.fontawesome.com/f12e4a6b3c.js"></script>
	<!-- css view-product-item -->
	
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<div id="fh5co-header">
					@include('frontEndUser.layout.header')
				</div>

				<!-- end:fh5co-header -->
				<div id="fh5co-slide-header">
					@yield('slide-header')
				</div>
				
				
				<div class="page-content">
					@yield('content')
					@yield('services')
				
					@yield('counter')
				
					@yield('procedure')

					@yield('why-choose')
					
					@yield('blog')

					@yield('feedback')

					@yield('blog-content')
					@yield('blog-list')
					@yield('product-list')
					@yield('contact')
					@yield('view-product-item')
					@yield('slux-talk')
		
					@include('frontEndUser.page-content.information')
					
				</div>

				<div class="footer">
					@include('frontEndUser.layout.footer')
				</div>
			</div>
			<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->

		<!-- jQuery -->

		<!-- SwiperEffect Js-->
		@yield('js')
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script src="{{asset('js/particles.js')}}"></script>
		<script src="{{asset('js/particles-app.js')}}"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
		<script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
		
		<!-- SwiperEffect Js-->
		<script src="{{asset('js/thumbnails.carousel.js')}}"></script>
		<script>
			$('.thumbnails-carousel').thumbnailsCarousel();
		</script>
		
		<!-- jQuery Easing -->
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Waypoints -->
		<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<!-- Superfish -->
		<script src="{{asset('js/hoverIntent.js')}}"></script>
		<script src="{{asset('js/superfish.js')}}"></script>
		<!-- Flexslider -->
		<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
		<!-- Stellar -->
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<!-- Counters -->
		<script src="{{asset('js/jquery.countTo.js')}}"></script>

		<!-- Main JS (Do not remove) -->
		<script src="{{asset('js/main.js')}}"></script>
		<script src="{{asset('js/procedure.js')}}"></script>
	</body>
</html>

