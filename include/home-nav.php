<p><div id="txt"></div>
<p><font color="990000"><b>General:</b></font></p>
<hr color="990000" width="92%" align="left">

<?php
@session_start();
include('include/game_info.php');
include_once ('include/connect.php');

//Make query to database
	$myusername = $_SESSION['myusername'];
	$sql="SELECT * FROM user WHERE username='$myusername'";
	$result=mysql_query($sql);
	$data = mysql_fetch_array ($result);
//Vars to fatch
	$moneyLeft = $data['money'];


if(!isset($_SESSION["myusername"]))
{
?>
<meta http-equiv="REFRESH" content="0;url=login.php">
<?
}else{?><font size="1px"><p><?
echo "Logged in as "; ?><b><? echo $_SESSION["myusername"]; ?></b>
    <br>
    <?echo 'You have '; ?><b><? echo $moneyLeft; ?></b><? echo ' '.$Currency.'(s)'; ?>
</font>

<p><font color="990000"><b>Functional:</b></font></p>
<hr color="990000" width="92%" align="left">
<ul class="func" style="padding: 0; list-style-type: none;">
<li class="shop"><a href="shop.php" class="func" style="color:#000;">Shop</a></li>
<li class="trade"><a href="trade.php" style="color:#000;">Trade</a></li>
<li class="inv"><a href="inventory.php" style="color:#000;">Inventory</a></li>
<li class="map"><a href="map.php" style="color:#000;">Map</a></li>
<li class="battle"><a href="gym.php" style="color:#000;">Battle</a></li>
</ul>
<p><font color="990000"><b>Shortcut:</b></font></p>
<hr color="990000" width="92%" align="left">
<ul class="shortcut" style="padding: 0; list-style-type: none;">
<li class="logout"><a href="logout.php" style="color:#000;">Logout</a></li>
<? } ?>
<li><a href="index.php" style="color:#000;">Home</a></li>
<li class="faq"><a href="faq.php" style="color:#000;">About this game / FAQ</a></li>
<li class="legal"><a href="legal.php" style="color:#000;">Legal</a></li>
</ul>
<br>