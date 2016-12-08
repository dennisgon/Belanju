<!DOCTYPE html>
<html>
<head>
	<title>Belanju || Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	<div class="containers" >
		<section id="header-top">
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-1">
					Merchant
				</div>
				<div class="col-md-1">
					Bantuan
				</div>
				<div class="col-md-2">
					Status Pemesanan
				</div>
			</div>
		</section>
		<section id="header-down">
			<div class="row">
				<div class="col-md-2 col-xs-6 header-col">
					<a href="{{ route('home')}}"><img src="{{URL::asset('/DG2.png')}}" class="logo"></a>
				</div>
				<div class="col-md-8 header-col search-box">
					<div class="input-group search-form">
				      	<input type="text" class="form-control " placeholder="Search for...">
				      	<span class="input-group-btn">
				        	<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				      	</span>
					</div>
				</div>

				<div class="col-md-1 col-xs-3 header-col">
				  	<p><span class="fa fa-shopping-bag"></span></p>
				</div>
				@if (Auth::check())
				<div class="col-md-1 col-xs-3 header-col" style="padding-top: 28px;">
				<a href="{{ route('profile',  Auth::user()->id) }}">{{ Auth::user()->username }}</a>
				</div>
				@else
				<div class="col-md-1 col-xs-3 header-col">
				<a href="#" class="btn btn-default hvr-icon-up" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
				</div>
				@endif

			</div>
		</section>
		@section('konten')
        
        @show
		<section>
			<div class="row footer-up">
				<div class="col-md-4">
					<H3>About us</H3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-4">
					<H3>Our Partner</H3>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<H3>Follow us On</H3>
						</div>
						<div class="col-md-12">
							<div class="footer">
							  <div class="social"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="social"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="social"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12 footer-down">
					<h5>Coded With 	&#10084; By Dennis</h5>
				</div>
			</div>
		</section>
	</div>

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



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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