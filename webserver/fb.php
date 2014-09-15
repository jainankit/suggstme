<?php
include("inc/includes.php");
require_once("inc/Restaurant.php");
require_once("inc/Cuisine.php");
require_once("inc/Filter.php");

global $USER_LOGGED_IN;
global $USERID;

// Generate the default recommendations if user is logged in.
if ($USER_LOGGED_IN) {
  $recommendation = new Recommendation($USERID);
  $filter = new Filter();
  $filter->setCuisine(7);
  $result = $recommendation->getFilteredWithCategory(2, $filter);
  while ($reco = mysql_fetch_array($result)) {
      $restaurant = new Restaurant($reco['resId']);
      echo $restaurant->getName().",".$restaurant->getAddress();
      $cuisines = $restaurant->getCategories();
      foreach ($cuisines as $cuisine) {
        echo $cuisine->getName();
      }
  }
}
?>
<html>
  <body>
  <?php getFacebookWidget(); ?>
  </body>
</html>
