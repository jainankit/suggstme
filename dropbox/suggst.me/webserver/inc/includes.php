<?php
define('APP_ID', '224577017641017');

$USER_LOGGED_IN = FALSE;
$USER_NAME = "";
$USER_EMAIL = "";
$USERID = "";

include "inc/connect.php";
include "inc/functions.php";
include "inc/Recommendation.php";

// Downloaded from https://github.com/facebook/facebook-php-sdk
require 'inc/fb/facebook.php';


$facebook = new Facebook(array(
  'appId'  => APP_ID,
  'secret' => '0e314bc856ffced54c78fbc711afa97f',
));

// Find the user information. If the user is already logged in,
// verify that the permissions are granted to the app.
$userId = $facebook->getUser();
$permissionGranted = false;
    if ($userId) { 
       // echo $userId;
      try {
        $userInfo = $facebook->api('/me');
        $permissionGranted = true;
      } catch (FacebookApiException $exception) {
        // Do nothing.
      }
    }

if ($permissionGranted) {
  $USER_LOGGED_IN = TRUE;
  $USER_NAME = $userInfo['name'];
  $USER_EMAIL = $userInfo['email'];
  $USERID = $userId;

  $userUpdateQuery = mysql_query("UPDATE sm_user_auth SET
      name =\"".htmlentities($USER_NAME)."\",
      email =\"".htmlentities($USER_EMAIL)."\", lastlogin=\"".time()."\"
      WHERE fbid = ".$userId) or die(mysql_error());

  if (mysql_affected_rows() == 0) {

    // New user found. Populate tables for the user.
    mysql_query("INSERT INTO sm_user_auth (fbid, name, email, lastlogin)
        VALUES (".$userId.", \"".htmlentities($USER_NAME)."\", 
        \"".htmlentities($USER_EMAIL)."\", \"".time()."\")")
        or die(mysql_error());

    mysql_query("INSERT INTO sm_user_filters (fbid) VALUES (".$userId.")")
        or die(mysql_error());
  }
}

//$result= $facebook->api('/'.$userId.'/picture', 'GET');
?>
