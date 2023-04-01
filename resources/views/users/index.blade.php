<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soccer BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="../frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="../frontend/css/normalize.css">
	<link rel="stylesheet" href="../frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="../frontend/css/transitions.css">
	<link rel="stylesheet" href="../frontend/css/prettyPhoto.css">
	<link rel="stylesheet" href="../frontend/css/swiper.min.css">
	<link rel="stylesheet" href="../frontend/css/jquery-ui.css">
	<link rel="stylesheet" href="../frontend/css/animate.css">
	<link rel="stylesheet" href="../frontend/css/owl.theme.css">
	<link rel="stylesheet" href="../frontend/css/owl.carousel.css">
	<link rel="stylesheet" href="../frontend/css/customScrollbar.css">
	<link rel="stylesheet" href="../frontend/css/icomoon.css">
	<link rel="stylesheet" href="../frontend/css/main.css">
	<link rel="stylesheet" href="../frontend/css/color.css">
	<link rel="stylesheet" href="../frontend/css/responsive.css">
	<script src="../frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-close" class="tg-close fa fa-close"></span>
			<div class="tg-colhalf">
				
					</li>
					<li class="menu-item-has-children">
						<a href="#">team</a>
						<ul class="tg-dropdown-menu">
							<li><a href="playergrid-v1.blade.php">playergrid-v1</a></li>
							<li><a href="playergrid-v2.blade.php">playergrid-v2</a></li>
							<li><a href="playerdetail.blade.php">playergrid detail</a></li>
						</ul>
					</li>
					<!-- <li><a href="buyticket.blade.php">Buy Tickets</a></li> -->
					<li class="menu-item-has-children">
						<a href="#">Match Results</a>
						<ul class="tg-dropdown-menu">
							<li><a href="matchresult.blade.php">match result</a></li>
							<li><a href="matchresultdetail.blade.php">match result detail</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="tg-colhalf">
				<ul>
					<!-- <li class="menu-item-has-children">
						<a href="#">fixtures</a>
						<ul class="tg-dropdown-menu">
							<li><a href="fixtures.blade.php">fixtures</a></li>
							<li><a href="fixturedetail.blade.php">fixture detail</a></li>
						</ul>
					</li> -->
					<!-- <li class="menu-item-has-children">
						<a href="#">pro soccer media</a>
						<ul class="tg-dropdown-menu">
							<li><a href="soccermedia-1.blade.php">pro soccer media1</a></li>
							<li><a href="soccermedia-2.blade.php">pro soccer media2</a></li>
						</ul>
					</li> -->
					<li><a href="contactus.blade.php">Contact</a></li>
					<li class="menu-item-has-children">
						<a href="#"><i class=" fa fa-navicon"></i></a>
						<ul>
							<!-- <li><a href="aboutus.blade.php">about us</a></li>
							<li><a href="shoplist.blade.php">shop list</a></li>
							<li><a href="shopgrid.blade.php">shop grid</a></li>
							<li><a href="productsingle.blade.php">shop detail</a></li>
							<li><a href="bloglist.blade.php">blog list</a></li>
							<li><a href="bloggrid.blade.php">blog grid</a></li>
							<li><a href="blogdetail.blade.php">blog detail</a></li>
							<li><a href="404.blade.php">404 error</a></li>
							<li><a href="comming-soon.blade.php">comming soon</a></li> -->
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<nav class="tg-addnav">
											<ul>
												<li><a href="javascript().blade.php" data-toggle="modal" data-target="#tg-login">login</a></li>
												<li><a href="javascript().blade.php" data-toggle="modal" data-target="#tg-register">Guest</a></li>
												
												<li>
													<a id="tg-btn-search" href="javascript:void(0)"><i class="fa fa-search"></i></a>
												</li>
											</ul>
										</nav>
									</div>
									<div class="tg-colhalf">
										<ul class="tg-socialicons">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="index-2.blade.php"><img src="../frontend/images/logo.png" alt="image description"></a>
								</strong>
							</div>
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
                                    <ul>
                                       <li>
										<!-- fetch db team names and its players name here -->
                                            <a href="#">team</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="#">Lions</a></li>
                                                <li><a href="#">Atlanta Falcons</a></li>
                                                <li><a href="#">Chicago Bears</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li>
                                            <a href="#">Players</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="#">Lionel Messi</a></li>
                                                <li><a href="#">Cristiano Ronaldo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="tg-sliderbox">
			<div class="tg-imglayer">
				<img src="../frontend/images/bg-pattran.png" alt="image desctription">
			</div>
			<div id="tg-home-slider" class="tg-home-slider tg-haslayout">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<img src="../frontend/images/slider/img-01.png" alt="image description">
							</figure>
							
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<img src="../frontend/images/slider/img-01.png" alt="image description">
							</figure>
							
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<img src="../frontend/images/slider/img-01.png" alt="image description">
							</figure>
							
						</div>
					</div>
				</div>
				<div class="tg-btn-next">
					<span>next</span>
					<span class="fa fa-angle-down"></span>
				</div>
				<div class="tg-btn-prev">
					<span>prev</span>
					<span class="fa fa-angle-down"></span>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<!-- <section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>About pro soccer</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-aboutussection">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<figure>
											<img src="../frontend/images/img-01.jpg" alt="image description">
										</figure>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="#"><span>read more</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Upcoming Match Start
			*************************************-->
			<!-- <section class=" tg-haslayout tg-bgstyleone">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-upcomingmatch-counter">
								<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="../frontend/images/img-02.png" alt="image description">
									</figure>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="tg-contentbox">
										<div class="tg-section-heading"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
										<div class="tg-description">
											<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										<div class="tg-counters">
											<div class="tg-counter tg-days"></div>
											<div class="tg-counter tg-hours"></div>
											<div class="tg-counter tg-minutes"></div>
											<div class="tg-counter tg-seconds"></div>
										</div>
										<div class="tg-btnbox">
											<a class="tg-btn" href="#"><span>read more</span></a>
											<a class="tg-btn" href="#"><span>book my ticket</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!--************************************
					Upcoming Match End
			*************************************-->
			<!--************************************
					Latest Result Start
			*************************************-->
					<!--************************************
					Latest Result End
			*************************************-->
			<!--************************************
					Statistics Start
			*************************************-->
			<section class="tg-main-section tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-goals">
									<span class="tg-icon icon-Icon1"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="2700" data-speed="8000" data-refresh-interval="50">2700</span></h2>
									<h3>Goals</h3>
								</div>
								<div class="tg-statistic tg-activeplayers">
									<span class="tg-icon icon-Icon2"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="1673" data-speed="8000" data-refresh-interval="50">1673</span></h2>
									<h3>Active Players</h3>
								</div>
								<div class="tg-statistic tg-activeteams">
									<span class="tg-icon icon-Icon3"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="236" data-speed="8000" data-refresh-interval="50">236</span></h2>
									<h3>Active Teams</h3>
								</div>
								<div class="tg-statistic tg-earnedawards">
									<span class="tg-icon icon-Icon4"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="197" data-speed="8000" data-refresh-interval="50">197</span></h2>
									<h3>Earned Awards</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
		
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-haslayout tg-footerinfobox">
					
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<span class="tg-copyright"><a target="_blank" href="https://www.sportsclub.net">Sports Club</a></span>
					<nav class="tg-footernav">
						
					</nav>
				</div>
			</div>
		</footer>
	</main>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div class="tg-searchbox">
		<a id="tg-close-search" class="tg-close-search" href="javascript:void(0)"><span class="fa fa-close"></span></a>
		<div class="tg-searcharea">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<form class="tg-form-search">
							<fieldset>
								<input type="search" class="form-control" placeholder="keyword">
								<i class="icon-icon_search2"></i>
							</fieldset>
						</form>
						<p>Start typing and press Enter to search</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<!--************************************
		LightBoxes Start
	*************************************-->
	<div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3> Player Login</h3>
					</div>
					<form  action="{{route('index')}}" class="tg-loginform" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="email">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="password">
							</div>
							<div class="form-group">
								<!-- <label>
									<input type="checkbox" value="rememberme" class="checkbox">
									<em>Remember Me</em>
								</label> -->
								<!-- <a href="#">
									<em>Forgot Password</em>
									<i class="fa fa-question-circle"></i>
								</a> -->
							</div>
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
							</div>
							<!-- <div class="tg-description">
								<p>Don't have an account? <a href="#">Signup</a></p>
							</div> -->
						</fieldset>
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3>Guest Signup</h3>
					</div>
					<form class="tg-loginform" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" name="userName" class="form-control" placeholder="username">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="email">
							</div>
							<!-- <div class="form-group">
								<div class="tg-note">
									<i class="fa fa-exclamation-circle"></i>
									<span>We will email you your password.</span>
								</div>
							</div> -->
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
							</div>
							<!-- <div class="tg-description">
								<p>Already have an account? <a href="#">Login</a></p>
							</div> -->
						</fieldset>
					</form>
				</div>
				<!-- <div class="tg-logintype">
					<div class="tg-border-heading">
						<h3>Signup with</h3>
					</div>
					<ul>
						<li class="tg-facebook"><a href="#">facebook</a></li>
						<li class="tg-twitter"><a href="#">twitter</a></li>
						<li class="tg-googleplus"><a href="#">google+</a></li>
						<li class="tg-linkedin"><a href="#">linkedin</a></li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
	<!--************************************
		LightBoxes End
	*************************************-->
	<script src="../frontend/js/vendor/jquery-library.js"></script>
	<script src="../frontend/js/vendor/bootstrap.min.js"></script>
	<script src="../frontend/js/customScrollbar.min.js"></script>
	<script src="../frontend/js/owl.carousel.js"></script>
	<script src="../frontend/js/isotope.pkgd.js"></script>
	<script src="../frontend/js/prettyPhoto.js"></script>
	<script src="../frontend/js/swiper.min.js"></script>
	<script src="../frontend/js/jquery-ui.js"></script>
	<script src="../frontend/js/countTo.js"></script>
	<script src="../frontend/js/appear.js"></script>
	<script src="../frontend/js/main.js"></script>
</body>


</html>