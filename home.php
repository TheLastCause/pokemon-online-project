<? include('include/game_info.php');?>
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
<!-- Timed event starter-->
<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML="Current time: "+h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>


</head>
<body onload="startTime()">
<font face="Arial, Helvetica, sans-serif" size="2px">
<center>
<img src="image/logo.png">
</center>
<div id="BodyShadow"
</font><div id="Body">
<? echo $AddSeperator;?>
<div id="NavBar">
  <? include_once ('include/home-nav.php'); ?>
</div>
<br>
<br>
<br>
<script type="text/javascript">
    var d = new Date();
    var time = d.getHours();

    if (time < 12) 
      {
      document.write("<b>Good morning, <? echo $_SESSION["myusername"]; ?>!</b>");
      }
    if (time > 12) 
      {
      document.write("<b>Good afternoon, <? echo $_SESSION["myusername"]; ?>!</b>");
      }
	if (time > 17) 
      {
      document.write("<b>Good evening, <? echo $_SESSION["myusername"]; ?>!</b>");
      }
	if (time > 18) 
      {
      document.write("<b>Good night, <? echo $_SESSION["myusername"]; ?>!</b>");
      }
    if (time == 12) 
      {
      document.write("<b>Go eat lunch!</b>");
      }
</script>
</div>
</div>
</body>
</div>
<br />
<br />
</body>
</html>