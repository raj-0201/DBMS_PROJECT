<?php

$a=date('y-m-d');
echo $a;


include('connection.php');
$x=$_GET['a'];

$b=mysql_query("select rdate from `issuedbooks` where M_id='$x'");
while($c=mysql_fetch_array($b))
{
?>
<?php  echo "<br>".$c[0]; ?>


<?php

}
?>
 