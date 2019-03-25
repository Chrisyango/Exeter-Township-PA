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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700">
	<link rel="stylesheet" href="_assets_/css/layout.css">

	<link rel="shortcut icon" href="_assets_/images/favicon.ico">
	<link rel="apple-touch-icon" href="_assets_/images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="72x72" href="_assets_/images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="114x114" href="_assets_/images/touch-icon-iphone4.png">
	<link rel="apple-touch-icon" sizes="144x144" href="_assets_/images/touch-icon-ipad2.png">

	<!-- Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body id="freeform" class="fullwidth">

<header class="fixed">
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
				<li id="font-increase">font increase +</li>
				<li id="font-decrease">font decrease -</li>
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

<section id="slider">
	<ul class="bxslider">
		<li style="background: url('./_assets_/images/inner-hero.jpg') center no-repeat;background-size: cover;"></li>
	</ul><!-- /.bxslider -->
</section><!-- /#slider -->

<main id="main">
	<div class="container">
		<div id="entry-bg" style="background:url('./_assets_/images/community.png') center no-repeat;background-size:cover;"></div>
		<article id="entry">
			<section id="breadcrumbs">
					<p>
						<a href="./">
							home
						</a>
						<a href="./">
							departments
						</a>
						<span>page title</span>
					</p>
			</section><!-- /#breadcrumbs -->
			<h1 id="page-title">department headline / page title</h1>
			<div id="post">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>	
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
				</p>
				<img src="./_assets_/images/inner-img1.jpg" alt="Town Image">
				<img src="./_assets_/images/inner-img2.jpg" alt="Town Image">
				<p>
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem:
				</p>
				<ul>
					<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse </li>
					<li>Quam nihil molestiae consequatur vel illum qui</li>
					<li>Dolorem eum fugiat quo voluptas nulla pariatur?</li>
				</ul>
				<p>
					Ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<span class="quote">
					“At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.”
				</span>
			</div><!-- /#post -->
		</article><!-- /#entry -->

		<section id="sign-up">
			<form>
				<label for="signup-input">Sign-up for Local Updates:</label>
				<div>
					<input name="q" class="form-control" placeholder="Your Email Address for our e-Newsletter" id="signup-input">
					<button class="btn">submit</button>
					<button class="btn">?</button>
				</div>
			</form>
		</section><!-- /#sign-up -->
	</div><!-- /.container -->
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
<script src="_assets_/plugins/modernizr/modernizr.custom.js"></script>
<script src="_assets_/plugins/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="_assets_/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="_assets_/js/scripts.js"></script>

</body>
</html>