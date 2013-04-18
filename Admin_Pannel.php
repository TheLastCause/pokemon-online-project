<?php
session_start();
include('include/game_info.php');
if(isset($_SESSION["cek"])){
	$error = $_SESSION["cek"];
}
session_destroy();

if(!isset($_SESSION["myusername"]))
{

}else{
	?><meta http-equiv="REFRESH" content="0;url=index.php"><?
}
?>

<html>
<head>
<link href="include/stylesheets.css" rel="stylesheet" type="text/css">
<title><? echo $pagetitle; ?> | Admin Pannel</title>
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

<?php
@session_start();
if(!isset($_SESSION["myusername"]))
{
?>
<?
?>
<p>Login</p>
<p><a href="register.php" style="color:#000;">Sign-Up</a></p>
<?
}else{?><font size="2px"><?
	echo "Welcome, "; ?><b><? echo $_SESSION["myusername"]; ?></b><? echo "!"; ?>
<!--<meta http-equiv="REFRESH" content="0;url=home.php">--></font>
<p><a href="home.php" style="color:#000;">Enter game!</a></p>
<p><a href="logout.php" style="color:#000;">Logout</a></p>
<? } ?>
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
    <input type="password" name="mypassword" id="Password" class="Title" placeholder="Password" class="TextBox"/>
  </font></p>
  <center>
    <p> <font color="#FF0000" size="2px" face="Arial, Helvetica, sans-serif">
      <?
if(isset($error)){
	echo $error;
}
?>
    </font></p>
</center>
  <p>
    <font size="2px" face="Arial, Helvetica, sans-serif"><center>
    <input type="submit" name="Login" id="Login" value="Login" />
    </font></p>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
<font size="1px"><? echo $footer;?></font>
</center>
</div>
</body>
</div>
<br />
<br />
</body>
</html>