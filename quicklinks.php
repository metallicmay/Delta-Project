<?php
 include_once("database.php") 
 ?>
<?php
session_start();
if($_SESSION["name"]) {
echo '<div align=right>' . $_SESSION["name"]. '</div>';	
echo"<a href=home.php>Home</a> <a href=about.php>About</a> <a href=procedures.php>Procedures</a> <a href=quicklinks.php>Quick Links</a> <a href=downloads.php>Downloads</a> <a href=faq.php>FAQ</a>";
echo "<div align=right><a href=logout.php>Logout</a></div>";
echo"<h1>QUICK LINKS</h1>";	
echo "<p> Important links: </p>
<div> <a href=http://www.nitt.edu/> Official Website of NITT </a> </div>
<br></br>
<p>Blogs about NITT:</p>
<div> <a href=http://www.metallicmay.wordpress.com> NITT-The true blue experience</a> </div>";
}
else
{ echo "You have been logged out! Click <a href=loginform.php> here </a> to log in again.";
}
?>
<html>
<body style="background-color:#CCFF99;font-family:Verdana;">
</body>
</html>
