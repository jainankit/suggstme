<!DOCTYPE html>
<!--[if lt IE 7]><html dir="ltr" lang="en-US" class="ie6 ie67"><![endif]-->
<!--[if IE 7]><html dir="ltr" lang="en-US" class="ie7 ie67"><![endif]-->
<!--[if IE 8]><html dir="ltr" lang="en-US" class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html dir="ltr" lang="en-US"><!--<![endif]-->
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<title><?php echo $SHOW_TITLE;?> Suggst Me</title>

	<link rel="stylesheet" href="style.css?<?php echo filemtime("style.css");?>">
	<link rel="stylesheet" href="custom-style.css?<?php echo filemtime("custom-style.css");?>">
	<!--  custom css includes -->
	<?php echo $CUSTOM_CSS_INCLUDES; ?>
	<!-- end custom css includes -->

<link rel='stylesheet' id='colorbox-css'  href='js/colorbox/colorbox.css?ver=3.3.1' type='text/css' media='all' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300' rel='stylesheet' type='text/css'>

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3.1'></script>
	<script type='text/javascript' src='engine/js/jquery.easing.1.3.min.js?ver=3.3.1'></script>
	<script type='text/javascript' src='engine/js/superfish.js?ver=3.3.1'></script>
	<script type='text/javascript' src='engine/js/tabs.js?ver=3.3.1'></script>
	
	<!--  custom js includes -->
	<?php echo $CUSTOM_JS_INCLUDES; ?>
	<!--  end custom js includes -->
	<!--[if lt IE 9]>
		<script src="engine/js/selectivizr.js"></script>
	<![endif]-->

</head>

<body class="layout-left">

<!-- BEGIN #wrapper-->
<div id="wrapper">

	<!-- BEGIN #page-->
    <div id="page">


		<!-- BEGIN #top-bar-->
		<div id="top-bar">
		<!-- END #top-bar-->
		</div>

		<!-- BEGIN #header-->
		<div id="header">
			
			<!-- #header-inner -->
			<div id="header-inner" class="clearfix">

				<div id="logo">
						<h1 id="site-title"><span><a href="#" title="Construct Theme - Just another Demos site" rel="home"><img class="logo" alt="Construct Theme" src="http://demo.designerthemes.com/construct/files/2012/01/logo5.png" /></a></span></h1>
			<!-- END #logo -->
				</div>

			<!-- BEGIN #primary-menu -->

				<div id="primary-menu" class="clearfix">
	
					<div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home "><a href="home.php">Home</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="restaurant.php">Restaurants</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="restaurant.php">Browse</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="search.php">Search</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">Add a Place</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1338"><a href="#">Account</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">My Points</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">Preferences</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">History</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Blog</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">FAQ</a></li>
</ul></div>	
				<!-- END #primary-menu -->
				</div>

				<!-- FB Login -->
		    	<?php getFacebookWidget(); ?>
			    <!-- FB login end -->
			</div>
			<!-- /#header-inner -->
			
		<!-- END #header -->
		</div>
        <div id="main" class="clearfix">
        <div id="container" class="clearfix">
		<!--BEGIN #content -->
    		<div id="content">