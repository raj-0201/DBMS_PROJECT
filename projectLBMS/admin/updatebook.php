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


$x=mysql_query ( "update `addbooks` set `Book_Title`='$a',`Author`='$b',`Copies`='$c',`Book_Publication`='$e',`Publisher_name`='$f',`ISBN`='$g',`Copyright_Year`='$h' where Book_id='$d'");
			
				if($x)
				{
			header('location:viewbookdetails.php');
				}
				else
				{
				echo "error";
				}





?>
</body>
</html>
