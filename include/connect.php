<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Include</title>
</head>

<?php

include_once ('settings.php');

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("Database connection fail!"); 
mysql_select_db("$db_name")or die("Database connection fail!");

?>


<body>
</body>
</html>