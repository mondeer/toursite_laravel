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
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

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


						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>

	<header id="imond-header" class="imond-cover" role="banner" style="background-image:url(../images/rod1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">

              <div class="imond">
                <h1 class="text-center">Book A Tour</h1>
  							<form class="form-horizontal" action="/client/book" method="POST" enctype="multipart/form-data">

									<input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="form-group">
                    <label class="col-md-3">Name</label>
                    <div class="">
                      <input class="col-md-5" type="text" name="name" value="">
                    </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3">Tour Type</label>
                      <div class="col-md-3">
                        <select name="tourtype">
                          <option>Camping</option>
                          <option>Yatching</option>
                          <option>Hiking</option>
                          <option>Paragliding</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3">Tour Date</label>
                    <div class="col-md-3">
                      <input type="date" name="tourdate" value="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3">Phone Number</label>
                    <div class="col-md-3">
                      <input type="text" name="phone" value="" placeholder="Phone Number">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3">Email address</label>
                    <div class="col-md-3">
                      <input type="text" name="email" value="" placeholder="Email address">
                    </div>
                  </div>
  								<div class="">
                    <button class="btn-cta btn-success" type="submit">Submit</button>
                  </div>

  							</form>
              </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

</body>
  <!-- jQuery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <!-- jQuery Easing -->
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- Waypoints -->
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <!-- Stellar Parallax -->
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <!-- Carousel -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <!-- countTo -->
  <script src="{{asset('js/jquery.countTo.js')}}"></script>
  <!-- Magnific Popup -->
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/magnific-popup-options.js')}}"></script>
  <!-- Main -->
  <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>
