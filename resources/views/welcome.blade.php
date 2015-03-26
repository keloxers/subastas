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

				</nav>
			</div>
		</div>
	<!--//header-->

	<!--page-->

		<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">

	<!--welcome-->
		<div class="welcome_index">
		Bienvenidos a  <a href="#"><span class="hue_block white normal">Clasificados Virasoro</span></a> un lugar para vender, comprar, permutar y
		<span class="hue">subastar</span> 	al mejor precio más <span>simple</span> que nunca.
		</div>
	<!--//welcome-->
		</div>
			</div>
				</div>
				<!--//banner-->


	<!-- footer -->
	<div id="footer">
	<h1>Ingresar con</h1>
	<h3 class="center follow">
	Para publicar y revisar anuncios debes ingresar con alguna de las siguientes redes sociales Facebook, Twitter, Google Plus, Linkedin o GitHub.</h3>

	<div class="follow_us">
		<a href="#" class="zocial facebook"></a>
		<a href="#" class="zocial twitter"></a>
		<a href="#" class="zocial googleplus"></a>
		<a href="#" class="zocial linkedin"></a>
		<a href="/login" class="zocial github"></a>
		</div>
	</div>

	<!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="copyright">
							Codex S.A.
							&copy;
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>
							 - All Rights Reserved :
							<a href="http://www.virasorovirtual.com">VirasoroVirtual.com</a>
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
</body>
</html>
