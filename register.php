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

<?php
@session_start();
if(!isset($_SESSION["myusername"]))
{
?>
<?
?>
<p><a href="login.php" style="color:#000;">Login</a></p>
<p>Sign-Up</p>
<?
}else{?><font size="2px"><?
	echo "Welcome, "; ?><b><? echo $_SESSION["myusername"]; ?></b><? echo "!"; ?>
<meta http-equiv="REFRESH" content="0;url=index.php">
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
<br />
<form name="form1" method="post" action="include/register.php">
  <center>
    <table width="363" border="0">
      <tr>
        <th width="153" scope="col">&nbsp;</th>
        <th width="9" scope="col">&nbsp;</th>
        <th width="187" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td align="right"><font size="2px" face="Arial, Helvetica, sans-serif">Username</font></td>
        <td>:</td>
        <td><font size="2px" face="Arial, Helvetica, sans-serif"><input type="text" name="username" id="username" class="TextBox" placeholder="Username"/></td>
      </tr>
      <tr>
        <td align="right"><font size="2px" face="Arial, Helvetica, sans-serif"><label for="email" class="Title">Email</font></label></td>
        <td>:</td>
        <td><input type="text" name="email" id="email" class="TextBox" placeholder="example@email.com"/></td>
      </tr>
      <tr>
        <td align="right"><font size="2px" face="Arial, Helvetica, sans-serif"><label for="mypassword5" class="Title">Password</font></label></td>
        <td>:</td>
        <td><input type="password" name="mypassword" id="Password" class="Title" placeholder="Password" /></td>
      </tr>
      <tr>
        <td align="right"><font size="2px" face="Arial, Helvetica, sans-serif"><label for="mypassword4" class="Title">Re-enter Password</font></label></td>
        <td>:</td>
        <td><input type="password" name="mypassword2" id="Password" class="Title" placeholder="Re-enter Password" /></td>
      </tr>
    </table>
    </center>
  <center>
      <p><font color="#FF0000">
    <?
if(isset($error)){
	echo "<br/>" . $error . "<br/>";
}
?>
</font></p></center>
	<center>
    <input type="submit" name="submit" id="submit" value="Register" />
</form>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<center>
<font size="1px"><? echo $footer;?></font>
</center>
</div>
</body>
</div>
<br />
<br />
</body>
</html>