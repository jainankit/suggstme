<?php
include_once("settings.php");
$link = mysql_connect($SM_DATABASE_SERVER, $SM_DATABASE_USERNAME, $SM_DATABASE_PASSWORD);
mysql_select_db($SM_DATABASE_NAME, $link);
?>
