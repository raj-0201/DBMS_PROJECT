<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];
$d=$_REQUEST['d'];
$e=$_REQUEST['e'];
$f=$_REQUEST['f'];
$g=$_REQUEST['g'];
$h=$_REQUEST['h'];
$i=$_REQUEST['i'];

$x=mysql_query ( "update `adduser` set `Name`='$a',`Rollno`='$b',`Address`='$d',`Contact`='$e',`E_mail`='$f',`Gender`='$g',`Course`='$h',`Branch`='$i' where M_id='$c'");
			
				if($x)
				{
			header('location:viewdetailsuser.php');
				}
				else
				{
				echo "error";
				}





?>
</body>
</html>
