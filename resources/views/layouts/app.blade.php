<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />



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

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url ('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url ('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url ('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url ('css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ url ('css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url ('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ url ('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="imond-loader"></div>

	<div id="page">
	<nav class="imond-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +254 726 852 398</p>
						<ul class="imond-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<div id="imond-logo"><a href="/">EMC TOURS<span>.</span></a></div>
					</div>
					<div class="col-xs-9 text-right menu-1">
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/client/book">Book Tour</a></li>
							<li><a href="/county/gallery">Gallery</a></li>
							<li class="has-dropdown">
								<a href="#">Tour EMC</a>
								<ul class="dropdown">
									<li><a href="#">Accomodations</a></li>
									<li><a href="#">Tour Sites</a></li>
									<li><a href="#">Yatching </a></li>
									<li><a href="#"></a></li>
								</ul>
							</li>
							<li><a href="#">Contact</a></li>

							<li class="btn-cta"><a href="/login"><span>Admin</span></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>

	<header id="imond-header" class="imond-cover" role="banner" style="background-image:url(images/rod.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6 pull-right">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

  <div class="row copyright">
    <div class="col-md-12 text-center">
      <p>
        <small class="block">&copy; 2017 EMC. All Rights Reserved.</small>
        <small class="block">Designed by <a href="http://.co/" target="_blank">Rodrick</a></small>
      </p>
      <p>
        <ul class="imond-social-icons">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-linkedin"></i></a></li>
          <li><a href="#"><i class="icon-dribbble"></i></a></li>
        </ul>
      </p>
    </div>
  </div>





<div class="gototop js-top">
<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{  url ('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{  url ('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{  url ('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{  url ('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{  url ('js/jquery.stellar.min.js')}}"></script>
<!-- Carousel -->
<script src="{{  url ('js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{  url ('js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{  url ('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{  url ('js/magnific-popup-options.js')}}"></script>
<!-- Main -->
<script src="{{  url ('js/main.js')}}"></script>

</body>
</html>
