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

	<title>Suggst Me</title>

	<link rel="stylesheet" href="style.css?<?php echo filemtime("style.css");?>">
	<link rel="stylesheet" href="custom-style.css?<?php echo filemtime("custom-style.css");?>">

<link rel='stylesheet' id='colorbox-css'  href='js/colorbox/colorbox.css?ver=3.3.1' type='text/css' media='all' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,300' rel='stylesheet' type='text/css'>

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3.1'></script>
	<script type='text/javascript' src='engine/js/superfish.js?ver=3.3.1'></script>
	<script type='text/javascript' src='engine/js/tabs.js?ver=3.3.1'></script>
	
	<script type='text/javascript' src="js/libs/modernizr-2.0.6.min.js"></script>
	<script type="text/javascript" src="js/cycle/jquery.cycle.all.latest.js"></script>
	 <script type="text/javascript" src="js/mylibs/jquery.circlemouse.js"></script>
	<!-- super fish js include --> 
	<script type="text/javascript" src="js/superfish/js/superfish.js"></script> 
	<script defer src="js/script.js"></script>

	<!--[if lt IE 9]>
		<script src="engine/js/selectivizr.js"></script>
	<![endif]-->

</head>

<body class="home blog layout-left">

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
	
					<div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home "><a href="#">Home</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="#">Restaurants</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">Browse</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-showcase"><a href="#">Search</a></li>
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
		    	<div id="fb-root"><fb:login-button scope="email,user_checkins,friends_checkins,publish_stream">Login using Facebook</fb:login-button></div>
				<script>
			      window.fbAsyncInit = function() {
			        FB.init({
			          appId      : '224577017641017',
			          status     : true, 
			          cookie     : true,
			          xfbml      : true,
			          oauth      : true,
			        });

			        FB.Event.subscribe('auth.login', function(response) {
			          window.location.reload();
			        });
			      };

			      (function(d){
			         var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
			         js = d.createElement('script'); js.id = id; js.async = true;
			         js.src = "//connect.facebook.net/en_US/all.js";
			         d.getElementsByTagName('head')[0].appendChild(js);
			       }(document));
			       
			    </script>
			    <!-- FB login end -->
			</div>
			<!-- /#header-inner -->
			
		<!-- END #header -->
		</div>
        <div id="main" class="clearfix">
        <div id="container" class="clearfix">
		<!--BEGIN #content -->
    		<div id="content">
    		
	      <!-- carousel -->
	        <div class="row_carousel">
	        <div class="carousel">
	                  <div class="slider"  id="s4">
	                      <div class="slide">
	                      	<div class="align_slider">
	                     	<div class="slider_desrcip">
	                        	<div class="slider_title">Tired of too many options?</div>
	                            <p>We focus on providing the right place you are looking for each time. Our engine works hard so that you don't have to.</p>
	                            <a href="#" class="button_slider"><span>Join now</span><strong></strong></a>                            
	                      	</div>
	                      	<div class="slider_image">
	                            <div>
	                                <img src="images/slider_pic1.jpg" alt=""    />
	                            </div>
	                    	</div>
	                         </div> 
	                      </div>
	                      <div class="slide">
	                      	<div class="align_slider">
	                      	<div class="slider_image fleft">
	                            <div>
	                                <img src="images/slider_pic2.jpg" alt=""    />
	                            </div>
	                    	</div>
	                        <div class="slider_desrcip fright">
	                        	<div class="slider_title">I don't have same taste as my friends</div>
	                            <p>We understand each indivudual is different. So we provide personalized recommendations every time.</p>
	                            <a href="#" class="button_slider"><span>Learn more</span><strong></strong></a>                            
	                      	</div>
	                       </div>   
	                      </div>
	                      <div class="slide" style="background:url(images/slider2_pic1.jpg) no-repeat 50% 0%">
	                      	<div class="align_slider">
	                      	<div class="slider_desrcip descr2_right">
	                        	<div class="slider_title">So many fake reviews everywhere </div>
	                            <p>Not sure which reviews to trust? Always find hard to separate fake reviews form real ones? Our unique system makes sure you don't get fake suggestions. </p>
	                            <a href="#" class="button_slider"><span>Join now</span><strong></strong></a>                          
	                      	</div>
	                        </div>
	                      </div> 
	                      <div class="slide" style="background:url(images/slider3_image.png) no-repeat 50% 0%;">
	                      	<div class="align_slider">
	                     	<div class="slider_desrcip">
	                        	<div class="slider_title">Where do I start?</div>
	                            <p>Download the Mobile App (Android/iPhone) or just Login here.</p>
	                            <a href="#" class="button_slider"><span>Lets go!</span><strong></strong></a>                            
	                      	</div>
	                         </div> 
	                      </div>
	                    </div>
	        		</div>
			
		</div>
	    <!-- EOF carousel -->
		
	</div><!-- #content -->

			<!--END #content -->
			</div>

		<!--END #main -->
		</div>

	<!--END #page -->

    </div>

<!--END #wrapper -->
</div>

<!--BEGIN #bottom -->
<div id="bottom">

	<!--BEGIN #footer -->
	<div id="footer">
		
		<!-- #footer-inner.clearfix -->
		<div id="footer-inner" class="clearfix">

		
			<!--BEGIN #footer-menu -->
			<div id="footer-menu" class="clearfix">
				<div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu">
<li id="menu-item-1328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1328"><a href="#">About us</a></li>
<li id="menu-item-1329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1329"><a href="#">Feedback</a></li>
<li id="menu-item-1330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1330"><a href="#">How it works</a></li>
<li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="#">Contact</a></li>
<li id="menu-item-1336" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1336"><a href="#">Sitemap</a></li>

</ul></div>			<!--END #footer-menu -->
			</div>
	
			<!--BEGIN #credits -->
			<div id="credits">
				<p>Copyright 2012 Suggst.me - A <a href="http://suggst.me" title="Suggst.me">Recommender</a> by <a href="http://suggst.me/">Suggst.me</a></p>
			<!--END #credits -->

			</div>
		
		</div>
		<!-- /#footer-inner.clearfix -->

	<!--END #footer -->
	</div>

<!--END #bottom -->
</div>

<script> // for contact form
	var ajaxurl='http://demo.designerthemes.com/construct/wp-admin/admin-ajax.php';
</script>

<script type='text/javascript'>
/* <![CDATA[ */
var dt = {"startPage":"1","maxPages":"3","nextLink":"http:\/\/demo.designerthemes.com\/construct\/page\/2\/"};
/* ]]> */
</script>
<script type='text/javascript' src='js/jquery.custom.js?ver=1.0'></script>

</body>

</html>
