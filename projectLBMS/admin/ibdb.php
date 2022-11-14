<?php
$a=$_REQUEST['uname'];
$b=$_REQUEST['roll'];
$c=$_REQUEST['m_id'];
$d=$_REQUEST['bid'];
$e=date('y-m-d');



$time_now=mktime(date('h')+5,date('i')+30,date('s'));
$date = date('H:i:s', $time_now);

 $q=strftime("%Y-%m-%d", strtotime("$e +14 day"));
 



include('connection.php');
$x=mysql_query("insert into `issuedbooks`(`Name`,`Rollno`,`M_id`,`Book_id`,`date`,`time`,`rdate`)
 						values('$a','$b','$c','$d','$e','$date','$q')");
						if($x)
						{
						echo "<script>
						alert ('data inserted');
						window.location=('issuedbooks.php');
						</script>";
						}
						else
						{
						echo "error";
						}
						



?>