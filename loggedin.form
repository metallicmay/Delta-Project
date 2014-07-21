<?php
 include_once("database.php") 
 ?>
 <script type="text/javascript">
    function show_alert() {
    var msg = "Successful Login!";
    alert(msg);
    }
</script>
<?php
session_start();
$rollnum = $_POST['rollnum'];
$pwd = $_POST['pass'];
 $name="";
 $con = mysql_connect('localhost:3306','root','') or  die("Cannot connect :" . mysql_error()); 
  mysql_select_db("deltaproject",$con)
	or
	die("Cant connect :" . mysql_error());
	$query= mysql_query("SELECT * FROM users WHERE ROLLNUMBER ='".$rollnum."' AND PASSWORD ='".md5($pwd)."'") or die(mysql_error());
    $result=mysql_fetch_array($query);
   if($result)
    { 	 
      $_SESSION["name"]=$result['NAME'];
	  echo "<div align=right><a href=logout.php>Logout</a></div>";
	  echo"<a href=home.php>Home</a> <a href=about.php>About</a> <a href=procedures.php>Procedures</a> <a href=quicklinks.php>Quick Links</a> <a href=downloads.php>Downloads</a> <a href=faq.php>FAQ</a>";
	  echo '<h3>Hello, ' . $_SESSION["name"]. '</h3>';	  
      echo "<script type=\"text/javascript\"> show_alert(); </script>"; 	
  	}
	else
	{  echo "Login failed";
	   echo "<br></br><a href=loginform.php> <button>Sign in</button> </a>";
	}
	mysql_close($con);

?>
<html>
<body style="background-color:#CCFF99;font-family:Verdana;">
</html>
