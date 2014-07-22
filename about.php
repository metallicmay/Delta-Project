<?php
 include_once("database.php") 
 ?>
<?php
session_start();
if($_SESSION["name"]) {
echo '<div align=right>' . $_SESSION["name"]. '</div>';	
echo"<a href=home.php>Home</a> <a href=about.php>About</a> <a href=procedures.php>Procedures</a> <a href=quicklinks.php>Quick Links</a> <a href=downloads.php>Downloads</a> <a href=faq.php>FAQ</a>";
echo "<div align=right><a href=logout.php>Logout</a></div>";
echo"<h1>ABOUT</h1>";
echo "<div> New to NITT? Feel like you're in the dark? Don't worry! This is your instant source of information from important notices and procedures to informal requirements. </div>
";	  
}
else
{ echo "You have been logged out! Click <a href=loginform.php> here </a> to log in again.";
}
?>
<html>
<body style="background-color:#CCFF99;font-family:Verdana;">
</body>
</html>
