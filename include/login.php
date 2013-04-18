<?php

session_start();
include_once ('connect.php');

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$tbl_name="user";

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

$data = mysql_fetch_array ($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

$_SESSION["myusername"] = $myusername;
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//echo $_SESSION['myuserid'];
//echo $_SESSION['myusername'];
//echo $data['Full_Name'];
//session_register("mypassword");
		?>
			<meta http-equiv="REFRESH" content="0;url=../index.php" />
		<?
}else {
	
	$_SESSION['cek']="Username or password missmatch";
		?>
			<meta http-equiv="REFRESH" content="0;url=../login.php" />
		<?
}
	?>
