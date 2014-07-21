<?php
 include_once("database.php") 
 ?>
<?php
session_start();
if($_SESSION["name"]) {
echo '<div align=right>' . $_SESSION["name"]. '</div>';	
}
echo"<a href=home.php>Home</a> <a href=about.php>About</a> <a href=procedures.php>Procedures</a> <a href=quicklinks.php>Quick Links</a> <a href=downloads.php>Downloads</a> <a href=faq.php>FAQ</a>";
echo "<div align=right><a href=logout.php>Logout</a></div>";
echo"<h1>FAQ</h1>";	
?>
<html>
<head>
<script>
function toggle(id) {
    var answer = document.getElementById(id);
  (answer.style.display=='block') ? answer.style.display='none' : answer.style.display='block' ;  
 }
</script>
<style>
div.ques1
 { cursor:pointer; }
div.ques1 div 
{ display:none;
margin-left: 40px; }
div.ques2
 { cursor:pointer; }
div.ques2 div 
{ display:none;
margin-left: 40px; }
div.ques3
 { cursor:pointer; }
div.ques3 div 
{ display:none;
margin-left: 40px; }
div.ques4
 { cursor:pointer; }
div.ques4 div 
{ display:none;
margin-left: 40px; }
div.ques5
 { cursor:pointer; }
div.ques5 div 
{ display:none;
margin-left: 40px; }
</style>
</head>
<body style="background-color:#CCFF99;font-family:Verdana;">
<div class="ques1" onclick="toggle('ans1');"> <a href=#>Question 1</a>
    <div id="ans1"> Answer 1</div>
</div>
<br></br>
<div class="ques2" onclick="toggle('ans2');"> <a href=#>Question 2</a>
    <div id="ans2"> Answer 2</div>
</div>
<br></br>
<div class="ques3" onclick="toggle('ans3');"> <a href=#>Question 3</a>
    <div id="ans3"> Answer 3</div>
</div>
<br></br>
<div class="ques4" onclick="toggle('ans4');"> <a href=#>Question 4</a>
    <div id="ans4"> Answer 4</div>
</div>
<br></br>
<div class="ques5" onclick="toggle('ans5');"> <a href=#>Question 5</a>
    <div id="ans5"> Answer 5</div>
</div>
</body>
</html>
