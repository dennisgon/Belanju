@php
  $pathContact =resource_path('json/contact.json');
  $contentContact = json_decode(file_get_contents($pathContact), true);
  $pathLogo =resource_path('json/logotemplate.json');
  $contentLogo = json_decode(file_get_contents($pathLogo), true);

@endphp
<!DOCTYPE html>
<html>
<head>
	<title>Belanju||@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font awesome -->
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{URL::asset('css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{URL::asset('css/theme-color/'.$contentLogo['theme'])}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

{{-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="{{URL::asset('css/owl.theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/hover.css')}}">

	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/global_style.css')}}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.css">
	<meta name="csrf-token" content="{{ csrf_token() }}"> --}}

</head>
<body>
  <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                {{--<div class="aa-language">--}}
                  {{--<div class="dropdown">--}}
                    {{--<a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                      {{--<img src="img/flag/english.jpg" alt="english flag">ENGLISH--}}
                      {{--<span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                      {{--<li><a href="#"><img src="img/flag/french.jpg" alt="">FRENCH</a></li>--}}
                      {{--<li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>--}}
                    {{--</ul>--}}
                  {{--</div>--}}
                {{--</div>--}}
                <!-- / language -->

                <!-- start currency -->
                {{--<div class="aa-currency">--}}
                  {{--<div class="dropdown">--}}
                    {{--<a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
                      {{--<i class="fa fa-usd"></i>USD--}}
                      {{--<span class="caret"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">--}}
                      {{--<li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>--}}
                      {{--<li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>--}}
                    {{--</ul>--}}
                  {{--</div>--}}
                {{--</div>--}}
                <!-- / currency -->
                  {{--Store--}}
                  {{--<div class="aa-language">--}}
                      {{--<a>Store</a>--}}
                  {{--</div>--}}
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>{{ $contentContact['noTelepon'] }}</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                    <li><a href="account.html">Toko</a></li>
                  @if (Auth::check())
                  <li><a href="{{ route('profile',  Auth::user()->username) }}">{{ Auth::user()->username }}</a></li>
                  @else
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

      <!-- start header bottom  -->
      <div class="aa-header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-bottom-area">
                <!-- logo  -->
                <div class="aa-logo">
                  <!-- Text based logo -->
                  <img src="{{ asset($contentLogo['logo']) }}" width="340px" height="100px"> 
                  <!-- img based logo -->
                  <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                </div>
                <!-- / logo  -->
                 <!-- cart box -->
                <div class="aa-cartbox">
                  <a class="aa-cart-link" href="#">
                    <span class="fa fa-shopping-basket"></span>
                    <span class="aa-cart-title">SHOPPING CART</span>
                    <span class="aa-cart-notify">2</span>
                  </a>
                  <div class="aa-cartbox-summary">
                    <ul>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">Product Name</a></h4>
                          <p>1 x $250</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>
                      <li>
                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                        <div class="aa-cartbox-info">
                          <h4><a href="#">Product Name</a></h4>
                          <p>1 x $250</p>
                        </div>
                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                      </li>                    
                      <li>
                        <span class="aa-cartbox-total-title">
                          Total
                        </span>
                        <span class="aa-cartbox-total-price">
                          $500
                        </span>
                      </li>
                    </ul>
                    <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                  </div>
                </div>
                <!-- / cart box -->
                <!-- search box -->
                <div class="aa-search-box">
                  <form action="">
                    <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                    <button type="submit"><span class="fa fa-search"></span></button>
                  </form>
                </div>
                <!-- / search box -->             
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header bottom  -->
    </header>
    <!-- / header section -->
    <!-- menu -->
    <section id="menu">
      <div class="container">
        <div class="menu-area">
          <!-- Navbar -->
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>          
            </div>
            <div class="navbar-collapse collapse">
              <!-- Left nav -->
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Men <span class="caret"></span></a>
                  <ul class="dropdown-menu">                
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Standard</a></li>                                                
                    <li><a href="#">T-Shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">And more.. <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Sleep Wear</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Loafers</a></li>                                      
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Women <span class="caret"></span></a>
                  <ul class="dropdown-menu">  
                    <li><a href="#">Kurta & Kurti</a></li>                                                                
                    <li><a href="#">Trousers</a></li>              
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Formal</a></li>                
                    <li><a href="#">Sarees</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">And more.. <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Sleep Wear</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Loafers</a></li>
                        <li><a href="#">And more.. <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Rings</a></li>
                            <li><a href="#">Earrings</a></li>
                            <li><a href="#">Jewellery Sets</a></li>
                            <li><a href="#">Lockets</a></li>
                            <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>                       
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Polo T-Shirts</a></li>
                            <li><a href="#">SKirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Make Up</a></li>
                            <li><a href="#">Hair Care</a></li>
                            <li><a href="#">Perfumes</a></li>
                            <li><a href="#">Skin Care</a></li>
                            <li><a href="#">Hand Bags</a></li>
                            <li><a href="#">Single Bags</a></li>
                            <li><a href="#">Travel Bags</a></li>
                            <li><a href="#">Wallets & Belts</a></li>                        
                            <li><a href="#">Sunglases</a></li>
                            <li><a href="#">Nail</a></li>                       
                          </ul>
                        </li>                   
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Kids <span class="caret"></span></a>
                  <ul class="dropdown-menu">                
                    <li><a href="#">Casual</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Formal</a></li>
                    <li><a href="#">Standard</a></li>                                                
                    <li><a href="#">T-Shirts</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Trousers</a></li>
                    <li><a href="#">And more.. <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Sleep Wear</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Loafers</a></li>                                      
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Sports</a></li>
               <li><a href="#">Digital <span class="caret"></span></a>
                  <ul class="dropdown-menu">                
                    <li><a href="#">Camera</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Tablet</a></li>
                    <li><a href="#">Laptop</a></li>                                                
                    <li><a href="#">Accesories</a></li>                
                  </ul>
                </li>
                <li><a href="#">Furniture</a></li>            
                <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                  <ul class="dropdown-menu">                
                    <li><a href="blog-archive.html">Blog Style 1</a></li>
                    <li><a href="blog-archive-2.html">Blog Style 2</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>                
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">                
                    <li><a href="product.html">Shop Page</a></li>
                    <li><a href="product-detail.html">Shop Single</a></li>                
                    <li><a href="404.html">404 Page</a></li>                
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>       
      </div>
    </section>
    <!-- / menu -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
      <section id="aa-myaccount">
		@section('konten')
        
        @show
        </section>
        <!-- footer -->  
		<footer id="aa-footer">
		<!-- footer bottom -->
			<div class="aa-footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<div class="aa-footer-top-area">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<div class="aa-footer-widget">
									<h3>Main Menu</h3>
									<ul class="aa-footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">Our Services</a></li>
										<li><a href="#">Our Products</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="aa-footer-widget">
										<div class="aa-footer-widget">
										<h3>Knowledge Base</h3>
										<ul class="aa-footer-nav">
											<li><a href="#">Delivery</a></li>
											<li><a href="#">Returns</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Discount</a></li>
											<li><a href="#">Special Offer</a></li>
										</ul>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="aa-footer-widget">
										<div class="aa-footer-widget">
											<h3>Useful Links</h3>
											<ul class="aa-footer-nav">
												<li><a href="#">Site Map</a></li>
												<li><a href="#">Search</a></li>
												<li><a href="#">Advanced Search</a></li>
												<li><a href="#">Suppliers</a></li>
												<li><a href="#">FAQ</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6">
									<div class="aa-footer-widget">
										<div class="aa-footer-widget">
											<h3>Contact Us</h3>
											<address>
												<p> {{ $contentContact['Alamat'] }}</p>
												<p><span class="fa fa-phone"></span>{{ $contentContact['noTelepon'] }}</p>
												<p><span class="fa fa-envelope"></span>{{ $contentContact['email'] }}</p>
											</address>
											<div class="aa-footer-social">
												<a href="{{ $contentContact['facebook'] }}"><span class="fa fa-facebook"></span></a>
												<a href="{{ $contentContact['twitter'] }}"><span class="fa fa-twitter"></span></a>
												<a href="{{ $contentContact['googlePlus'] }}"><span class="fa fa-google-plus"></span></a>
												<a href="{{ $contentContact['youtube'] }}"><span class="fa fa-youtube"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- footer-bottom -->
			<div class="aa-footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="aa-footer-bottom-area">
								<p>Made with ♥ by <a href="http://www.dennisgon.com/">Dennisgon</a></p>
								<div class="aa-footer-payment">
									<span class="fa fa-cc-mastercard"></span>
									<span class="fa fa-cc-visa"></span>
									<span class="fa fa-paypal"></span>
									<span class="fa fa-cc-discover"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- / footer -->

	<!-- Modal -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	    	<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<img id="img_logo" src="image/DG2.png" width="250px" height="100px">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</button>
					</div>
	                
	                <!-- Begin # DIV Form -->
	                <div id="div-forms">
	                
	                    <!-- Begin # Login Form -->
	                    <form action="{{ url('login') }}" method="POST" id="login-form">
			                <div class="modal-body">
					    		<div id="div-login-msg">
	                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
	                                <span id="text-login-msg">Type your username and password.</span>
	                            </div>
					    		<input id="login_username" class="form-control" type="text" placeholder="Username" name="username" required>
					    		<input id="login_password" class="form-control" type="password" placeholder="Password" name="password" required>
					    		<input type="hidden" name="_token" value="{{ csrf_token() }}">

	                            <div class="checkbox">
	                                <label>
	                                    <input type="checkbox"> Remember me
	                                </label>
	                            </div>
	        		    	</div>
					        <div class="modal-footer">
	                            <div>
	                                <input type="submit" class="btn btn-primary btn-lg" value="Login">
	                                <h1><span>Or</span></h1>
	                                <a class="btn btn-block btn-social btn-twitter">
	                                  <span class="fa fa-twitter"></span>
	                                  Login with Twitter
	                                </a>
	                                <a class="btn btn-block btn-social btn-facebook">
	                                  <span class="fa fa-facebook"></span>
	                                  Login with Facebook
	                                </a>
	                            </div>
					    	    <div>
	                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
	                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
	                            </div>
					        </div>
	                    </form>
	                    <!-- End # Login Form -->
	                    
	                    <!-- Begin | Lost Password Form -->
	                    <form id="lost-form" style="display:none;">
	    	    		    <div class="modal-body">
			    				<div id="div-lost-msg">
	                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
	                                <span id="text-lost-msg">Type your e-mail.</span>
	                            </div>
			    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
	            			</div>
			    		    <div class="modal-footer">
	                            <div>
	                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
	                            </div>
	                            <div>
	                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
	                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
	                            </div>
			    		    </div>
	                    </form>
	                    <!-- End | Lost Password Form -->
	                    
	                    <!-- Begin | Register Form -->
	                    <form action="{{ url('register') }}" method="POST" id="register-form" style="display:none;">
	            		    <div class="modal-body">
			    				<div id="div-register-msg">
	                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
	                                <span id="text-register-msg">Register an account.</span>
	                            </div>
			    				<input id="register_name" class="form-control" type="text" placeholder="Name" name="name" required>
			    				<input id="register_username" class="form-control" type="text" placeholder="Username" name="username" required>
			    				<input id="register_bday" class="form-control" type="date" placeholder="Password" name="bday" required>
			    				<input type="radio" name="gender" value="male"> Male<br>
			    				<input type="radio" name="gender" value="female"> Female<br>

			    				<input id="register_password" class="form-control" type="password" placeholder="Password" name="password" required>
			    				<input id="register_phonenumber" class="form-control" type="text" placeholder="Phone Number" name="nohp" required>
	                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" name="email" required>
	                           

	                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

	            			</div>
			    		    <div class="modal-footer">
	                            <div>
	                                <input type="submit" class="btn btn-primary btn-lg" value="Register">
	                                <h1><span>Or</span></h1>
	                                <a class="btn btn-block btn-social btn-twitter">
	                                  <span class="fa fa-twitter"></span>
	                                  Register with Twitter
	                                </a>
	                                <a class="btn btn-block btn-social btn-facebook">
	                                  <span class="fa fa-facebook"></span>
	                                  Register with Facebook
	                                </a>
	                            </div>
	                            <div>
	                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
	                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
	                            </div>
			    		    </div>
	                    </form>
	                    <!-- End | Register Form -->
	                    
	                </div>
	                <!-- End # DIV Form -->
	                
				</div>
			</div>
		</div>

	<script src="{{URL::asset('js/bootstrap.js')}}"></script>  
	<!-- SmartMenus jQuery plugin -->
	<script type="text/javascript" src="{{URL::asset('js/jquery.smartmenus.js')}}"></script>
	<!-- SmartMenus jQuery Bootstrap Addon -->
	<script type="text/javascript" src="{{URL::asset('js/jquery.smartmenus.bootstrap.js')}}"></script>  
	<!-- Product view slider -->
	<script type="text/javascript" src="{{URL::asset('js/jquery.simpleGallery.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.simpleLens.js')}}"></script>
	<!-- slick slider -->
	<script type="text/javascript" src="{{URL::asset('js/slick.js')}}"></script>
	<!-- Price picker slider -->
	<script type="text/javascript" src="{{URL::asset('js/nouislider.js')}}"></script>

	<!-- Custom js -->
	<script src="{{URL::asset('js/custom.js')}}"></script> 



	<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
	<script src="{{URL::asset('js/wow.min.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	<script type="text/javascript">

		$(document).ready(function(){
			
			// Lift card and show stats on Mouseover
			$('.product-card').hover(function(){
					$(this).addClass('animate');
					$('div.carouselNext, div.carouselPrev').addClass('visible');			
				 }, function(){
					$(this).removeClass('animate');			
					$('div.carouselNext, div.carouselPrev').removeClass('visible');
			});	
			
			/* ----  Image Gallery Carousel   ---- */		
			var carousel = $('#carousel ul');
			var carouselSlideWidth = 335;
			var carouselWidth = 0;	
			var isAnimating = false;
			
			// building the width of the casousel
			$('#carousel li').each(function(){
				carouselWidth += carouselSlideWidth;
			});
			$(carousel).css('width', carouselWidth);
			$("#recent-product").hover(function(){
				
			});
			$("#inti-carousel").hover(function(){
				
			});
			// $('#gender-wanita').mouseover(function(){
			// 	$(".gender-woman-image-overlay").css('display','block');
			// });	
			// $('#gender-wanita').mouseleave()(function(){
			// 	$(".gender-woman-image-overlay").re('display','block');
			// 	$(".gender-woman-image-overlay").css('display','none');
			// });	
			$(window).scroll(function() {
			if ($(this).scrollTop() > 1){  
			   	$('#header-down').addClass("fixed-menu");
			  }
			  else{
			    $('#header-down').removeClass("fixed-menu");
			  }
			});
			$("#owl-example").owlCarousel({
			 
			    // Most important owl features
			    items : 5,
			    itemsCustom : false,
			    itemsDesktop : [1199,4],
			    itemsDesktopSmall : [980,3],
			    itemsTablet: [768,2],
			    itemsTabletSmall: false,
			    itemsMobile : [479,1],
			    singleItem : true,
			    itemsScaleUp : false,
			 
			    //Basic Speeds
			    slideSpeed : 200,
			    paginationSpeed : 800,
			    rewindSpeed : 1000,
			 
			    //Autoplay
			    autoPlay : true,
			    stopOnHover : false,
			 
			    // Navigation
			    navigation : false,
			    navigationText : ["prev","next"],
			    rewindNav : true,
			    scrollPerPage : false,
			 
			    //Pagination
			    pagination : true,
			    paginationNumbers: false,
			 
			    // Responsive 
			    responsive: true,
			    responsiveRefreshRate : 200,
			    responsiveBaseWidth: window,
			 
			    // CSS Styles
			    baseClass : "owl-carousel",
			    theme : "owl-theme",
			 
			    //Lazy load
			    lazyLoad : true,
			    lazyFollow : true,
			    lazyEffect : "fade",
			 
			    //Auto height
			    autoHeight : false,
			 
			    //JSON 
			    jsonPath : false, 
			    jsonSuccess : false,
			 
			    //Mouse Events
			    dragBeforeAnimFinish : true,
			    mouseDrag : true,
			    touchDrag : true,
			 
			    //Transitions
			    transitionStyle : false,
			 
			    // Other
			    addClassActive : "false",
			 
			    //Callbacks
			    beforeUpdate : false,
			    afterUpdate : false,
			    beforeInit: false, 
			    afterInit: false, 
			    beforeMove: false, 
			    afterMove: false,
			    afterAction: false,
			    startDragging : false,
			    afterLazyLoad : false
			 
			});
			// $("#recent-product").hover(function() {
			// 	// body...

			// 	$(".recent-baju").addClass("animated fadeInUp");

			// 	$(".recent-baju").addClass("baju-show-visible");
			// });
		});
	</script>
	<script>
		$(function() {
		    
		    var $formLogin = $('#login-form');
		    var $formLost = $('#lost-form');
		    var $formRegister = $('#register-form');
		    var $divForms = $('#div-forms');
		    var $modalAnimateTime = 300;
		    var $msgAnimateTime = 150;
		    var $msgShowTime = 2000;

		    
		    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
		    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
		    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
		    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
		    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
		    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
		    
		    function modalAnimate ($oldForm, $newForm) {
		        var $oldH = $oldForm.height();
		        var $newH = $newForm.height();
		        $divForms.css("height",$oldH);
		        $oldForm.fadeToggle($modalAnimateTime, function(){
		            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
		                $newForm.fadeToggle($modalAnimateTime);
		            });
		        });
		    }
		    
		    function msgFade ($msgId, $msgText) {
		        $msgId.fadeOut($msgAnimateTime, function() {
		            $(this).text($msgText).fadeIn($msgAnimateTime);
		        });
		    }
		    
		    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
		        var $msgOld = $divTag.text();
		        msgFade($textTag, $msgText);
		        $divTag.addClass($divClass);
		        $iconTag.removeClass("glyphicon-chevron-right");
		        $iconTag.addClass($iconClass + " " + $divClass);
		        setTimeout(function() {
		            msgFade($textTag, $msgOld);
		            $divTag.removeClass($divClass);
		            $iconTag.addClass("glyphicon-chevron-right");
		            $iconTag.removeClass($iconClass + " " + $divClass);
		  		}, $msgShowTime);
		    }
		});
	</script>

</body>
</html>