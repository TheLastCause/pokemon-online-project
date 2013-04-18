<? include('include/game_info.php');  ?>
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
include('include/game_info.php');
if(!isset($_SESSION["myusername"]))
{
?>
<?
?>
<p><a href="login.php" style="color:#000;">Login</a></p>
<p><a href="register.php" style="color:#000;">Sign-Up</a></p>
<?
}else{?><font size="2px"><?
	echo "Welcome, "; ?><b><? echo $_SESSION["myusername"]; ?></b><? echo "!"; ?>
<!--<meta http-equiv="REFRESH" content="0;url=home.php">--></font>
<p><a href="home.php" style="color:#000;">Enter game!</a></p>
<?

        if ($_SESSION["myusername"] == 'admin'){
        	?>
        		<a href="include/edit_setting.php" style="color:#000;" >Edit website setting</a> | <a href="Admin_Pannel.php" style="color:#000;">Admin Pannel</a>
        	<?	
        }else{
        	
        }

?>
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
  <p><img src="image/version_logo.png" />
  </p>
  <br />
 <?php
@session_start();
if(!isset($_SESSION["myusername"]))
{
?>
<table width="398" border="0">
  <tr>
    <th width="210" scope="col" align="justify"><p><font size="2px" face="Arial, Helvetica, sans-serif" align="left">Sign-Up now for the first release of Pokemon Online. You can own, battle, and trade pokemon! The best part, its <b>FREE!!!</b></font></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></th>
    <th width="178" scope="col"><a href="register.php"><img src="image/join_now.png" /></a></th>
  </tr>
</table>
<?
}else{
	?>
    <table width="398" border="0">
  <tr>
    <th width="210" scope="col" align="justify"><p><font size="2px" face="Arial, Helvetica, sans-serif" align="left">Play now and join the other player train, capture and trade there Pokemon in this <b>FREE</b> game. Do you have what it takes to be the best Pokemon trainer?</font></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></th>
    <th width="178" scope="col"><a href="home.php"><img src="image/play_now.png" /></a></th>
  </tr>
</table>
    <p>
      <?
} 
?>
    </p>
    <br />
    <hr color="990000">
    <br />
    <img src="image/news_updates.png">
    <br />
    <br />
    <p>&nbsp;</p>
    <table width="95%">
      <tr>
        <th scope="col" align="justify"><? include ('main_news.php'); ?></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
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