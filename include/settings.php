<?
//////////////////////////////////////////////////////////////////////////////////
////                   Pokemon Online Project settings file                   ////
////                  Settings file created by: Krisna Putra                  ////
////                                                                          ////
////                    http://www.youtube.com/krisnarocks                    ////
////                       http://www.krisnaslife.cu.cc                       ////
//////////////////////////////////////////////////////////////////////////////////


//Connect to Database
$host="localhost"; // Host name
$username="root"; // Mysql username 
$password="password"; // Mysql password 
$db_name="Pokemon_online"; // Database name 

$devEmail = "krisna@krisnaslife.cu.cc";//Your Email.
$GameName = "Pokemon Online Project";//Game Name (can't be blank).
$showAds = "false";//Do you want to show adds? If set to true, change <img src="image/AddTopDummy.png" width="100%" height="100%"> to your adsense HTML code.
$pagetitle = "";//Title for your page name (the one on top of the browser/tab). Keep blank to use yout game name.
$AdsenseCode = '<img src="image/AddTopDummy.png" width="100%" height="100%">';
$Currency = "Coin";

//////////////////////////////////////////////////////////////////////////////////
////DO NOT EDIT ANYTHING BELLOW THIS LINE UNLESS YOU KNOW WHAT YOU ARE DOING!/////
////                      YOU HAVE BEEN WARNED!!                             /////
//////////////////////////////////////////////////////////////////////////////////

$pagetitle_extract="";
if($showAds == "true"){
	$AddSeperator = '<div id="TopAdd"> <font size="2px" face="Arial, Helvetica, sans-serif">'.$AdsenseCode.'</font></div>'.'<hr color="#990000">';
}else{
	$AddSeperator = '';
}

$GameName_extract = "";
$GameName_extract = str_replace (" ", "", $GameName);
if ($pagetitle_extract == "" || $pagetitle_extract == " "){
	$GameName = "Pokemon Online Project";	
}else{
	
}

$pagetitle_extract = "";
$pagetitle_extract = str_replace (" ", "", $pagetitle);
if ($pagetitle_extract == "" || $pagetitle_extract == " "){
	$pagetitle = $GameName;	
}else{
	
}
?>