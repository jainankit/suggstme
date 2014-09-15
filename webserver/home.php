<?php
include "inc/includes.php";

/////////////////// Adding custom JS //////////////////////////
$CUSTOM_JS_INCLUDES = "<script type='text/javascript' src=\"js/libs/modernizr-2.0.6.min.js\"></script>
	<script type=\"text/javascript\" src=\"js/cycle/jquery.cycle.all.latest.js\"></script>
	<script type=\"text/javascript\" src=\"js/mylibs/jquery.circlemouse.js\"></script>
	<!-- super fish js include -->
	<script type=\"text/javascript\" src=\"js/superfish/js/superfish.js\"></script>
	<script defer src=\"js/script.js\"></script>";
$CUSTOM_CSS_INCLUDES = "<link rel=\"stylesheet\" href=\"carousel-style.css?".filemtime("custom-style.css")."\">";
include "template/header.php";
?>
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
<?php include "template/footer.php"; ?>