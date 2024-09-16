

<?php include("reUseAdmin/components.php"); 
 include("reUseAdmin/db_config.php");
 include("reUseAdmin/adHeader.php");

session_start();
session_destroy();
redirect("index.php");
?>

<?php 
 include("script/adScript.php");
 ?>