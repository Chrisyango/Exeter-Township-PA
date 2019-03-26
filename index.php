<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Exeter Township, PA</title>
	<meta name="description" content="">
	<meta name="robots" content="index, follow">

	<link rel="stylesheet" href="_assets_/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="_assets_/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700">
	<link rel="stylesheet" href="_assets_/css/layout.css">

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="_assets_/images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="_assets_/images/touch-icon-iphone4.png">
	<link rel="apple-touch-icon" sizes="144x144" href="_assets_/images/touch-icon-ipad2.png">

	<!--[if !IE]><!-->
	<link rel="stylesheet" href="_assets_/plugins/add-to-homescreen/style/addtohomescreen.css">
	<script src="_assets_/plugins/add-to-homescreen/src/addtohomescreen.min.js"></script>
	<script>addToHomescreen();</script>
	<!--<![endif]-->

	<!-- Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body id="homepage">

<section id="slider">
	<ul class="bxslider">
		<li style="background: url('./_assets_/images/hero.jpg') center no-repeat;background-size: cover;"></li>
	</ul><!-- /.bxslider -->

	<div class="container">
		<a href="./" id="logo" style="background:url('./_assets_/images/logo.png') center no-repeat;background-size:cover;"></a>
	</div><!-- /.container -->

	<a href="#main" id="skip" tabindex="1"><img src="./_assets_/images/down-arrow.png" alt="Skip to Content"></a>
</section><!-- /#slider -->

<header>
	<div class="container">
		<a href="./" id="nav-logo">
			<img src="./_assets_/images/nav-logo.png" alt="Logo">
		</a><!-- /.logo -->

		<div id="toggles" class="hidden-lg hidden-md">
			<div tabindex="0" id="search-toggle-mobile" class="fa fa-search"></div>
			<div tabindex="0" id="nav-toggle" class="fa fa-bars"></div>	
		</div><!-- /#toggles -->

		<nav>
			<ul id="nav">
				<li><a href="./">about</a></li>
				<li>
					<a href="./">departments</a>
					<ul>
						<li><a href="./">this is a link</a></li>
						<li>
							<a href="./">this is a link</a>
							<ul>
								<li><a href="./">this is a link</a></li>
								<li><a href="./">this is a link</a></li>
								<li><a href="./">this is a link</a></li>
								<li><a href="./">this is a link</a></li>
							</ul>
						</li>
						<li><a href="./">this is a link</a></li>
						<li><a href="./">this is a link</a></li>
					</ul>
				</li>
				<li><a href="./">services</a></li>
				<li><a href="./">business</a></li>
				<li><a href="./">residents</a></li>
				<li><a href="./">how do i...</a></li>
			</ul> <!-- /#nav -->
		</nav>
	</div><!-- /.container -->

	<div id="right-nav">
		<div class="social-links hidden-sm hidden-xs">
			<a href="./" class="fa fa-facebook"></a>
			<a href="./" class="fa fa-at"></a>
		</div><!-- /.social-links -->

		<div id="settings-drawer" class="hidden-sm hidden-xs">
			<div tabindex="0" id="settings-toggle" class="fa fa-bars"></div><!-- /#search-toggle -->
			<ul id="settings">
				<li tabindex="0" id="font-increase">font increase +</li>
				<li tabindex="0" id="font-decrease">font decrease -</li>
				<li id="google-translate">
					<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
					<div id="google_translate_element"></div>
					<script type="text/javascript">
						function googleTranslateElementInit() {
							new google.translate.TranslateElement({  
								pageLanguage: 'en', 
								layout: google.translate.TranslateElement.InlineLayout.SIMPLE
							}, 'google_translate_element');
						}
					</script>
					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					<script>
						$(document).ready(function(){
							$('#google_translate_element').bind('DOMNodeInserted', function(event) {
								$('.goog-te-menu-value span:first').html('Translate <i class="fa fa-chevron-down"></i>');
								$('.goog-te-menu-frame.skiptranslate').load(function(){
									setTimeout(function(){
										$('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Translate <i class="fa fa-chevron-down"></i>');    
									}, 100);
								});
							});
						});
					</script>
				</li><!--/#google-translate.control.hidden-sm.hidden-xs-->
			</ul><!-- /#settings -->
		</div><!-- /#settings-drawer -->

		<div tabindex="0" id="search-toggle" class="fa fa-search hidden-sm hidden-xs"></div><!-- /#search-toggle -->
		<div id="search">
			<form class="search-form" method="get" action="search.php">
				<label class="fa fa-search" for="search-input"></label>
				<input name="q" class="form-control search-input" placeholder="Enter keyword to search..." type="search" id="search-input">
				<button>go</button>
			</form><!-- /.search-form -->
		</div><!-- /#search -->
	</div><!-- /#right-nav -->
</header>

<main id="main">
	<section id="lwp" style="background:url('./_assets_/images/lwp.jpg') center no-repeat;background-size:cover;">
		<div class="overlay"></div>
		<div class="container">
			<div id="lwp-wrapper" class="owl-carousel">
				<a href="./" class="lwp-link" style="background:url('./_assets_/images/live.jpg') center no-repeat;background-size:cover;">
					<span>live</span>
				</a><!-- /.lwp-link -->
				<a href="./" class="lwp-link" style="background:url('./_assets_/images/work.jpg') center no-repeat;background-size:cover;">
					<span>work</span>
				</a><!-- /.lwp-link -->
				<a href="./" class="lwp-link" style="background:url('./_assets_/images/play.jpg') center no-repeat;background-size:cover;">
					<span>play</span>
				</a><!-- /.lwp-link -->
			</div><!-- /#lwp-wrapper.owl-carousel -->
		</div><!-- /.container -->
		<img class="whitespace" src="./_assets_/images/lwp-whitespace.png" alt="Whitespace">
	</section><!-- /#lwp -->

	<section id="content">
		<section id="events-news" style="background:url('./_assets_/images/events-news.jpg') center no-repeat;background-size:cover;">
			<div class="overlay"></div>
			<div class="container">
				<section id="events" class="col-md-6">
					<h2>upcoming events</h2>
					<img src="./_assets_/images/events.png" alt="Events">
					<a href="./" class="btn">calendar</a>
				</section><!-- /#events -->

				<section id="news" class="col-md-6">
					<h2>news & announcements</h2>
					<div id="news-links" class="owl-carousel">
						<div class="news-link-wrapper">
							<div class="news-link" style="background:url('./_assets_/images/news1.jpg') center no-repeat;background-size:cover;">
								<div class="news-link-content">
									<span>january 01, 2019</span>
									<h3>2019 prelimary budget posted</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="./" style="background:url('./_assets_/images/right-arrow.png') center no-repeat;background-size:cover;"></a>
									<a href="./" class="fa fa-facebook"></a>
								</div><!-- /.news-link-content -->
							</div><!-- /.news-link -->
							<div class="news-link" style="background:url('./_assets_/images/news2.jpg') center no-repeat;background-size:cover;">
								<div class="news-link-content">
									<span>january 09, 2019</span>
									<h3>protect your home - 2019 resident safety</h3>
									<a href="./" style="background:url('./_assets_/images/right-arrow.png') center no-repeat;background-size:cover;"></a>
									<a href="./" class="fa fa-facebook"></a>
								</div><!-- /.news-link-content -->
							</div><!-- /.news-link -->
						</div><!-- /.news-link-wrapper -->
						<div class="news-link-wrapper">
							<div class="news-link" style="background:url('./_assets_/images/news1.jpg') center no-repeat;background-size:cover;">
								<div class="news-link-content">
									<span>january 01, 2019</span>
									<h3>2019 prelimary budget posted</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="./" style="background:url('./_assets_/images/right-arrow.png') center no-repeat;background-size:cover;"></a>
									<a href="./" class="fa fa-facebook"></a>
								</div><!-- /.news-link-content -->
							</div><!-- /.news-link -->
							<div class="news-link" style="background:url('./_assets_/images/news2.jpg') center no-repeat;background-size:cover;">
								<div class="news-link-content">
									<span>january 09, 2019</span>
									<h3>protect your home - 2019 resident safety</h3>
									<p>test test test test</p>
									<a href="./" style="background:url('./_assets_/images/right-arrow.png') center no-repeat;background-size:cover;"></a>
									<a href="./" class="fa fa-facebook"></a>
								</div><!-- /.news-link-content -->
							</div><!-- /.news-link -->
						</div><!-- /.news-link-wrapper -->
					</div><!-- /#news-links.owl-carousel -->
					<a href="./" class="btn">archives</a>
				</section><!-- /#news -->
			</div><!-- /.container -->
		</section><!-- /#events-news -->

		<section id="departments">
			<img class="whitespace" src="./_assets_/images/departments-whitespace.png" alt="Whitespace">
			<div class="container">
				<h2>find a department</h2>
				<div id="departments-links" class="owl-carousel">
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department1.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department2.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department3.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department4.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department5.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department6.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department7.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department8.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
					<a href="./" class="departments-link">
						<div class="departments-link-img" style="background:url('./_assets_/images/department9.png') center no-repeat;background-size:cover;"></div>
						<span>streets + highways</span>
					</a><!-- /departments-link -->
				</div><!-- /#departments-links.owl-carousel -->
			</div><!-- /.container -->
		</section><!-- /#departments -->

		<section id="community">
			<div id="community-bg" style="background:url('./_assets_/images/community.png') center no-repeat;background-size:cover;"></div>
			<div class="container">
				<div id="community-info">
					<h2><span>get social</span>Connect with the Community</h2>
					<ul id="tabs">
						<li class="current"><a href="./">the township</a></li>
						<li><a href="./">police department</a></li>
						<li><a href="./">parks + recreation</a></li>
					</ul><!-- /#tabs -->
				</div><!-- #community-info -->

				<div id="social-wrapper">
					<div id="tabs-content">
						<div class="current">
							<div id="township-facebook" class="facebookfeed active"></div>
							<div id="township-twitter" class="twitterfeed"></div>
							<div id="township-instagram" class="instafeed"></div>
						</div>
						<div>
							<div id="police-facebook" class="facebookfeed active"></div>
							<div id="police-twitter" class="twitterfeed"></div>
							<div id="police-instagram" class="instafeed"></div>
						</div>
						<div>
							<div id="parks-facebook" class="facebookfeed active"></div>
							<div id="parks-twitter" class="twitterfeed"></div>
							<div id="parks-instagram" class="instafeed"></div>
						</div>
					</div><!-- /#tabs-content -->
				</div><!-- /#social-wrapper -->

				<div id="filter">
					<span>filter:</span>
					<ul>
						<li class="active"><a href="#social-feed" class="fa fa-facebook"></a></li>
						<li><a href="#twitter-feed" class="fa fa-twitter"></a></li>
						<li><a href="#instagram-feed" class="fa fa-instagram"></a></li>
					</ul><!-- /#tabs -->
				</div><!-- /.filter -->
			</div><!-- /.container -->
		</section><!-- /#community -->

		<section id="sign-up">
			<div class="container">
				<form>
					<label for="signup-input">Sign-up for Local Updates:</label>
					<div>
						<input name="q" class="form-control" placeholder="Your Email Address for our e-Newsletter" id="signup-input">
						<button class="btn">submit</button>
						<button class="btn">?</button>
					</div>
				</form>
			</div><!-- /.container -->
		</section><!-- /#sign-up -->
	</section><!-- /#content -->
</main>

<footer>
	<div class="container">
		<section id="contact-info">
			<span><strong>&copy; <span>2019</span> Township of Exeter</strong></span>
			<span><span>4975</span> DeMoss Road, Reading, PA <span>19606</span></span>
			<span>(610) 779-5660</span>
		</section><!-- /#contact-info -->

		<section id="revize">
			<ul class="hidden-sm hidden-xs">
				<li><a href="./" class="fa fa-facebook"></a></li>
				<li><a href="./" class="fa fa-exclamation-triangle"></a></li>
			</ul>
			<a href="./">login</a>
			<span>Powered by <a href="./">revize.</a></span>
		</section><!-- /#revize -->
	</div><!-- /.container -->
</footer>

<div class="alert alert-dismissible floating-alert fade in os-animation" data-os-animation="fadeInUpBig" data-os-animation-delay="2s" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4>Alert Title 30 characters Max</h4>
	<p>Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120 characters Max 120</p>
	<p><a href="#" class="btn">Read More</a></p>
</div><!-- /.alert -->


<!-- Share widget make into an include file -->
<button type="button" class="share-btn floating-share-btn" data-toggle="modal" data-target="#shareModal">
	<i class="fa fa-share-alt"></i>
	<span>Share</span>
</button>

<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Share this page</h4>
			</div>
			<div class="modal-body">
				<div class="copylink">
					<p>Copy and paste this code into your website.</p>
					<pre>&lt;a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">Your Link Name&lt;/a&gt;</pre>
				</div><!-- /.copylink -->
				<div class="share-btns">
					<p>Share this page on your favorite Social network</p>
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-facebook"></i> Facebook
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.twitter.com/home?status=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-twitter"></i> Twitter
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.plus.google.com/share?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-google" onclick="return !window.open(this.href, 'google ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-google-plus"></i> Google Plus
							</a>
						</div>
						<div class="col-md-3 col-xs-6">
							<a href="https://www.reddit.com/submit?url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" class="btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
							target="_blank">
								<i class="fa fa-reddit"></i> Reddit
							</a>
						</div>
					</div><!-- /.row -->
				</div><!-- /.share-btns -->
				<button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Close</button>
			</div><!-- /.modal-body -->
		</div>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Share widget make into an include file -->


<script src="_assets_/js/jquery.min.js"></script>
<script src="_assets_/plugins/social-feed/bower_components/codebird-js/codebird.js"></script>
<script src="_assets_/plugins/social-feed/bower_components/doT/doT.min.js"></script>
<script src="_assets_/plugins/social-feed/bower_components/moment/min/moment.min.js"></script>
<script src="_assets_/plugins/social-feed/bower_components/moment/locale/en-au.js"></script>
<script src="_assets_/plugins/social-feed/js/jquery.socialfeed.js"></script>
<script src="_assets_/plugins/modernizr/modernizr.custom.js"></script>
<script src="_assets_/plugins/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script src="_assets_/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="_assets_/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="_assets_/plugins/twitter/js/jquery.tweet.min.js"></script>
<script src="_assets_/plugins/instafeed/instafeed.min.js"></script>
<script src="_assets_/js/scripts.js"></script>

</body>
</html>