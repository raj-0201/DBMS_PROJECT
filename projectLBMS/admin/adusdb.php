
<?php
$a=$_REQUEST['uname'];
$b=$_REQUEST['roll'];
$c='_db_'.$_REQUEST['m_id'];
$d=$_REQUEST['add'];
$e=$_REQUEST['cont'];
$f=$_REQUEST['em'];
$i=$_REQUEST['g'];
$g=$_REQUEST['cou'];
$h=$_REQUEST['bran'];

include('connection.php');
$x=mysql_query("insert into `adduser`(`Name`,`MIS`,`M_id`,`Address`,`Contact`,`E_mail`,`Gender`,`course`,`branch`)
 						values('$a','$b','$c','$d','$e','$f','$i','$g','$h')");
						if($x)
						{
						echo "<script>
						alert ('data inserted');
						window.location=('adduser.php');
						</script>";
						}
						else
						{
						echo "error";
						}



?>
