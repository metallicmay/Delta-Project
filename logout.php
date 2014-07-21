<?php
 include_once("database.php") 
 ?>
<?php
session_start();
session_destroy();
header("location:landingpage.php");
?>
<html>
<body style="background-color:#CCFF99;font-family:Verdana;">
</html>
