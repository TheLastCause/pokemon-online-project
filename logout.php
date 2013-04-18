<title>Logout</title>
<script type="text/javascript">
var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.write("<? $dateLogout=' ?>" + day + "/" + month + "/" + year + "<? '; ?>")
</script>
<?php 
@session_start();
include_once ('include/connect.php');
include('include/game_info.php');
$tbl_name="user";
$myusername = $_SESSION["myusername"];
$currentDate="UPDATE $tbl_name SET last_login=CURDATE() WHERE username='$myusername'";
$currentTime="Update $tbl_name SET last_login_time=CURTIME() WHERE username='$myusername'";
$result=mysql_query($currentDate);
$result2=mysql_query($currentTime);
mysql_query($result);
session_destroy();
?>
<html>
<head>
<link href="include/stylesheets.css" rel="stylesheet" type="text/css">
<title><? echo $pagetitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body {
	background-color: #660000;
}
</style>
</head>
<body>
<font face="Arial, Helvetica, sans-serif" size="2px">
<center>
<img src="image/logo.png">
</center>
<div id="BodyShadow"
</font><div id="Body">
<? echo $AddSeperator;?>
<div id="NavBar">
<font color="990000"><p><b>Game:</b></p></font>
<hr color="990000" width="92%" align="left">
<p><a href="login.php" style="color:#000;">Login</a></p>
<p><a href="register.php" style="color:#000;">Sign-Up</a></p>
<p><a href="faq.php" style="color:#000;">About this game / FAQ</a></p>
<p><a href="legal.php" style="color:#000;">Legal</a></p>
<p><b>Other:</b></p>
<hr color="990000" width="92%" align="left">
<p><a href="index.php" style="color:#000;">Home/News</a></p>
<p><a href="news.php" style="color:#000;">News Archive</a></p>
<p><a href="forums.php" style="color:#000;">Forums</a></p>
<p><a href="chat.php" style="color:#000;">Chat Room</a></p>
</div>
<center>
<br />
<br />
<br />
<br />
<br />
<br />
  <form name="form1" method="post" action="include/login.php">
  <p>
    <font size="2px" face="Arial, Helvetica, sans-serif">
    <label for="myusername2" class="Title">Username:</label>
    <input type="text" name="myusername" id="myusername2" class="TextBox" placeholder="Username"/>
  </font></p>
  <p>
    <font size="2px" face="Arial, Helvetica, sans-serif"><label for="mypassword" class="Title">Password:</label>
    <input type="password" name="mypassword" id="Password" class="Title" placeholder="Password" />
  </font></p>
  <center>
    <p> <font color="#FF0000" size="2px" face="Arial, Helvetica, sans-serif">
      You have been logged out! You may now re-login.
    </font></p>
</center>
  <p>
    <font size="2px" face="Arial, Helvetica, sans-serif"><center>
    <input type="submit" name="Login" id="Login" value="Login" />
    </font></p>
</form>
  <br />
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
<font size="1px"><? echo $footer;?></font>
</center>
</div>
</div>
</body>
</div>
<br />
<br />
</body>
</html>