<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2; 
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
  $dist = acos($dist); 
  $dist = rad2deg($dist); 
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344); 
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

function getFacebookWidget() {
  global $USER_LOGGED_IN;
  global $USER_NAME;
  global $USERID;
    if (!$USER_LOGGED_IN) { ?>
    <div id="fb-root">
    	<fb:login-button scope="email,user_checkins,friends_checkins,publish_stream">Login using Facebook</fb:login-button>
    </div>
    <?php
    } else {
    	?>
    <div id="fb-root">
     	<a href="#"><img src="http://graph.facebook.com/<?php echo $USERID;?>/picture?type=square" width="30" height="0" /></a>
     </div>
     	<?php
    } ?>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?= APP_ID ?>',
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
<?php
}

function getLoadMoreButton() {
	?>
	<!--BEGIN #load-more.item -->	
	<div class="item" id="load-more" data-order='999'>
	
		<a id="load-more-link" href="#">
		
			<span id="plus"></span>
			
			<span id="detail-holder">
				<span class="count-text"><span class="count">10</span> posts remaining</span>
	
				<span class="load-more-text"><span class="load-more-plus">+</span> Load More</span>
			</span>
			
			<span id="loader" data-perpage="9"></span>
			
		</a>
		
	<!--END #load-more.item -->	
	</div>
	<?php
}

function getNavNextPage() {
	?>
<!-- #nav-item-wrap -->
<div id="nav-item-wrap">
	<!--BEGIN .item -->
	<div class="item nav-title-item" data-order='1'>
		<h1 id="page-title">Next Page</h1>
	<!--END .item -->
	</div>
<!-- END #nav-item-wrap -->
</div>
	<?php
} 
?>
