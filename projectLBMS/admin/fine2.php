<?php
session_start();
$x=$_SESSION['uname'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
div
{
background-image:url(images/white-damask-background_00435854.jpg);
height:665px;
width:1350px;
float:left;
margin-top:
}
#a
{
background:#761816;
height:40px;
width:1350px;
}
#a ul 
{
list-style:none;
float:left;
margin:0px 15px 0px 15px;
padding-right:10px;
border-right:groove;
height:40px;

}
#a ul li 
{

color:#FFFFFF;
font-size:25px ;
padding-right:20px;
float:left;


}
#a ul li a
{
color:#FFFFFF;
}

 
#b
{
background-image:url(images/logo.png);
height:100px;
width:760px;
float:left;
margin-left:300px;
border:2px dashed #761816;
margin-top:20px;
}
#c
{
margin-top:100px;
margin-left:150px;
width:80%;
height:50%;
}
#c table
{
height:100px;
width:250px;
}





</style>
</head>

<body>
<div>

 
<div id="a">
 <font size="5" color="#FFFFFF">
 <ul style="list-style:none; height:40px;">
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="adduser.php" style="text-decoration:none;">Add User</a></li>
    <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="viewdetailsuser.php" style="text-decoration:none">User Details</a></li>
	<li style="border-left:groove; padding-left:20px; height:40px;"><a href="addbooks.php" style="text-decoration:none;">Add Books</a></li>
		<li style="border-left:groove; padding-left:20px; height:40px;"><a href="issuedbooks.php" style="text-decoration:none;">Issued Books</a></li>
	<li style="border-left:groove; padding-left:20px; height:40px;"><a href="returnedbooks.php" style="text-decoration:none;">Returned Books</a></li>
	<li style="border-left:groove; padding-left:20px; height:40px;"><a href="viewbookdetails.php" style="text-decoration:none;">Book Details</a></li>
    <li style="border-left:groove; height:40px; padding-left:20px;"><a href="logout.php" style="text-decoration:none;">Logout</a></li>
  <li style="padding-left:20px; border-left:groove; border-right:; height:40px; color:#FFFF00;"><?php echo $x; ?></li>
 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</font></p></center><br /><br />
</div>
<div id="c">

<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
$q=$_GET['a'];



$a=date('y-m-d');
?>
<table border="40" align="center" cellpadding="20" >
<tr>
<th>ISSUED DATE</th>
<th>DUE DATE</th>
<th>FINE</th>
<th>DELETE</th>
</tr>
<tr><td><?php echo $a; ?></td>
<?php

$x=mysql_query("select * from `issuedbooks` where M_id='$q'");

 
while($c=mysql_fetch_array($x))
{
$d=$c[6];
}?>
<td><?php echo $d;?></td>
<?php 
$due=strtotime($d);
$ret=strtotime($a);
$diff=$ret-$due;

$days=$diff/(60*60*24);
//echo $days;
if($days<1)
{
$fine=0;
}
else
{
$fine=$days*2;

}
?>
<td><?php echo $fine; ?> </td>
 <?php
$query=mysql_query("select * from adduser where M_id='$q'");
 $query1=mysql_fetch_array($query);
 $o_fine=$query1[9];
 $n_fine=$o_fine+$fine;
// echo $n_fine;

 mysql_query("update adduser set fine='$n_fine' where M_id='$q'");
 //echo "update adduser set fine='$n_fine' where M_id='$q'";
 ?>
<td><a href="retdelbooks.php?a=<?php echo $q; ?>">Delete</a></td></tr>


</div> 

</div>
</body>
</html>
