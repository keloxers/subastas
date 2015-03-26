<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>flati | responsive html5 template | themeforest | josweb</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="css/zocial.css" rel="stylesheet" type="text/css"/>
<link href="css/settings.css" rel="stylesheet" type="text/css"/>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>


	<!--header-->
		<div class="header">
			<div class="container">
			<!--logo-->
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<i class="fa fa-bars"></i></button>
						<div class="logo">
							 <a href="index.html"><img src="img/logo.png" alt="" class="animated bounceInDown" /></a>
						</div>
						<!--menu-->
						   <nav id="main_menu">
						<div class="nav-collapse collapse">
							<ul class="nav nav-pills">
								<li class="dropdown active"><a href="javascript:{}">Home</a>
								<ul class="dropdown-menu">
								<li><a href="index.html">Slider Revolution</a></li>
								<li><a href="index2.html">Nerve Slider</a></li>
								<li><a href="index3.html">NivoSlider</a></li>
								<li><a href="index4.html">Slides</a></li>
								</ul>
								</li>
								<li class="dropdown"><a href="javascript:{}">Pages</a>
							<ul class="dropdown-menu">
									<li><a href="team.html">The Team</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="testimonials.html">Testimonials</a></li>
									<li><a href="timeline.html">Timeline</a></li>
									<li><a href="full.html">Full Width</a></li>
									<li><a href="left_sidebar.html">Left Sidebar</a></li>
									<li><a href="right_sidebar.html">Right Sidebar</a></li>
							</ul>
								</li>
								<li class="dropdown"><a href="javascript:{}">Work</a>
							<ul class="dropdown-menu">
									<li><a href="portfolio_2columns.html">2 Columns</a></li>
									<li><a href="portfolio_3columns.html">3 Columns</a></li>
									<li><a href="portfolio_4columns.html">4 Columns</a></li>
									<li><a href="portfolio_masonry.html">Masonry</a></li>
									<li><a href="gallery.html">Paginated Gallery</a></li>
									<li><a href="video_gallery.html">Video Gallery</a></li>
									<li><a href="single_portfolio.html">Single Slider</a></li>
									<li><a href="single_video.html">Single Video</a></li>
									<li><a href="single_image.html">Single Image</a></li>
									<li><a href="full_slider.html">Full Slider</a></li>
									<li><a href="full_video.html">Full Video</a></li>
							</ul>
								</li>
								<li class="dropdown"><a href="javascript:{}">Style</a>
							<ul class="dropdown-menu">
									<li><a href="scaffolding.html">Scaffolding</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="shortcodes.html">Shortcodes</a></li>
									<li><a href="icons.html">Icons</a></li>
									<li><a href="javascript:{}">Colours</a>
								<ul class="dropdown-menu sub-menu">
									<li><a href="../blue/index.html">Blue</a></li>
									<li><a href="../orange/index.html">Orange</a></li>
									<li><a href="../green/index.html">Green</a></li>
									<li><a href="../red/index.html">Red</a></li>
								</ul>
									<li><a href="script_examples.html">JS Examples</a></li>
								</ul>
								</li>
								<li class="dropdown"><a href="javascript:{}">Extras</a>
							<ul class="dropdown-menu">
									<li><a href="dribbble_stream.html">Dribbble Stream</a></li>
									<li><a href="alt_footer.html">Alt. Footer & Boxes</a></li>
									<li><a href="pricing_table.html">Pricing Table</a></li>
									<li><a href="404.html">404 Page</a></li>
							</ul>
								</li>
								<li class="dropdown"><a href="javascript:{}">Blog</a>
							<ul class="dropdown-menu">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog_two.html">Blog II</a></li>
									<li><a href="blog_post.html">Blog Post</a></li>
									<li><a href="blog_post2.html">Blog Post II</a></li>
							</ul>

							<ul class="nav navbar-nav navbar-right">
								@if (Auth::guest())
									<li><a href="{{ url('/auth/login') }}">Login</a></li>
									<li><a href="{{ url('/auth/register') }}">Register</a></li>
								@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
										</ul>
									</li>
								@endif
							</ul>


								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		<!--//header-->




			</div>
		</div>
	</nav>

	@yield('content')



	<!-- footer -->
	<div id="footer">
	<h1>get in touch</h1>
	<h3 class="center follow">
	We're social and we'd love to hear from you! Feel free to send us an email, find us on Google Plus, follow us on Twitter and join us on Facebook.</h3>

	<div class="follow_us">
		<a href="#" class="zocial twitter"></a>
		<a href="#" class="zocial facebook"></a>
		<a href="#" class="zocial linkedin"></a>
		<a href="#" class="zocial googleplus"></a>
		<a href="#" class="zocial vimeo"></a>
		</div>
	</div>

	<!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="copyright">
							FLATI
							&copy;
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>
							 - All Rights Reserved :
							Template by <a href="http://spiralpixel.com">Spiral Pixel</a>
						</div>
						</div>
					</div>
				</div>
					</div>

				<!-- up to top -->
				<a href="#"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
				<!--//end-->
<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
<!-- slider settings -->
<script>
	//<![CDATA[
    $(document).ready(function() {
	if ($.fn.cssOriginal!=undefined)
	$.fn.css = $.fn.cssOriginal;
	$('.fullwidthbanner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:550,
			onHoverStop:"on",
			navigationType:"none",
			soloArrowLeftHOffset:0,
			soloArrowLeftVOffset:0,
			soloArrowRightHOffset:0,
			soloArrowRightVOffset:0,
			touchenabled:"on",
			fullWidth:"on",
			shadow:0
		});
	});
//]]>
</script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!-- carousel -->
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($) {
	$("#slider_home").carouFredSel({ width : "100%", height : "auto",
	responsive : true,  circular : true, infinite	: false, auto : false,
	items : { width : 231, visible: { min: 1, max: 3 }
	},
	swipe : { onTouch : true, onMouse : true },
	scroll: { items: 3, },
	prev : { button : "#sl-prev", key : "left"},
	next : { button : "#sl-next", key : "right" }
	});
		});
		//]]>
	</script>
