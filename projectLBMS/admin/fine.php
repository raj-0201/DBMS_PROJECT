   
 
 <a href="retdelbooks.php?a=<?php echo $q; ?>">Delete</a>



<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
$q=$_GET['a'];



$a=date('y-m-d');

echo "ret: ".$a;
echo "<br/>";
$x=mysql_query("select * from `issuedbooks` where M_id='$q'");

 
while($c=mysql_fetch_array($x))
{
$d=$c[6];
}
echo "due: ".$d;
echo "<br/>";
$due=strtotime($d);
$ret=strtotime($a);
$diff=$ret-$due;

$days=$diff/(60*60*24);
$fine=$days*20;
echo $fine;
?>
 
