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
    if (!$USER_LOGGED_IN) { ?>
    <div id="fb-root"></div>
    <fb:login-button scope="email,user_checkins,friends_checkins,publish_stream">Login using Facebook</fb:login-button>
    <?php
    } else {
     echo "Welcome ".$USER_NAME;
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
?>
