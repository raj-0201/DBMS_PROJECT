<?php
$a=$_REQUEST['bt'];
$b=$_REQUEST['aut'];
$c=$_REQUEST['cop'];
$d=$_REQUEST['bid'];
$e=$_REQUEST['bp'];
$f=$_REQUEST['pn'];
$g=$_REQUEST['isbn'];
$h=$_REQUEST['cy'];
 
include('connection.php');
$x=mysql_query("insert into `addbooks`(`Book_Title`,`Author`,`Copies`,`Book_id`,`Book_Publication`,`Publisher_Name`,`ISBN`,`Copyright_Year`)
 						values('$a','$b','$c','$d','$e','$f','$g','$h')");
						if($x)
						{
						echo "<script>
						alert ('data inserted');
						window.location=('addbooks.php');
						</script>";
						}
						else
						{
						echo "error";
						}





















?>