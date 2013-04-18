<?

//STEP 1 Connect To Database

session_start();
include_once ('connect.php');

//STEP 2 Declare Variables

$Username = $_POST['username'];
$Email = $_POST['email'];
$Email1 = "@";
$Email_Check = strpos($Email,$Email1);
$Password = $_POST['mypassword'];
$Re_Password = $_POST['mypassword2'];
$CheckQuery="INSERT INTO other_ref_person (usr_name) VALUES ('".$Email."')";

//STEP 3 Check To See If All Information Is Correct

if($Username == "")
{
	$_SESSION['cek']="Opps! You don't enter a username!";
	?>
		<meta http-equiv="REFRESH" content="0;url=../Register.php">
	<?
}else{

if($Password == "" || $Re_Password == "")
{
	$_SESSION['cek']="Opps! You didn't enter one of your passwords!";
	?>
		<meta http-equiv="REFRESH" content="0;url=../Register.php">
	<?
}else{

if($Password != $Re_Password)
{
	$_SESSION['cek']="Ouch! Your passwords don't match! Try again.";
	?>
		<meta http-equiv="REFRESH" content="0;url=../Register.php">
	<?
}else{

if($Email_Check == false)
{
	$_SESSION['cek']="Opps! That's not an email!";
	?>
		<meta http-equiv="REFRESH" content="0;url=../Register.php">
	<?
}else{

//STEP 4 Insert Information Into MySQL Database

if(!mysql_query("INSERT INTO user (username, email, password) VALUES ('$Username', '$Email', '$Password')"))
{
	$_SESSION['cek']="We could not register you due to a mysql error (Contact the website owner if this continues to happen.)";
	header("location: Register.php");
	echo "Hi";
}else{
	$_SESSION['cek']="You may now login.";
	?>
		<meta http-equiv="REFRESH" content="0;url=../Register.php">
	<?
}
}
}
}
}
(!mysql_query("INSERT INTO identity (Full_Name) VALUES ('$Email')"));
mysql_query("INSERT INTO other_ref_person (usr_name) VALUES ('$Email')");
mysql_query("INSERT INTO ref_person (usr_name) VALUES ('$Email')");


?>