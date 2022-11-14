<?php
session_start();
$x=$_SESSION['uname'];
?>

<html>
<head>
<title>User Details</title>

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
margin-top:80px;
} 





</style>

</head>

<body>
<div>
<div id="a">
 <font size="5" color="#FFFFFF">
 <ul style="list-style:none; height:40px;">
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="adduser.php" style="text-decoration:none;">Add User</a></li>
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="viewdetailsuser.php" style="text-decoration:none;">User Details</a></li>
   <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="addbooks.php" style="text-decoration:none">Add Books</a></li>
   <li style="border-left:groove; padding-left:20px; height:40px;"><a href="issuedbooks.php" style="text-decoration:none;">Issued Books</a></li>
   <li style="border-left:groove; padding-left:20px; height:40px;"><a href="returnedbooks.php" style="text-decoration:none;">Returned Books</a></li>
   <li style="border-left:groove; padding-left:20px; height:40px;"><a href="viewbookdetails.php" style="text-decoration:none;">Book Details</a></li>  
  <li style="border-left:groove; height:40px; padding-left:20px;"><a href="logout.php" style="text-decoration:none;">Logout</a></li>
  <li style="padding-left:20px; border-left:groove; height:40px; color:#FFFF00;"><?php echo $x; ?></li>

 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font><br /><br />
 
</div>
<div id="c">
<table border="50" cellpadding="5" cellspacing="0" height="80" width="1200" align="center" >
<tr><th colspan="11">USER DETAILS</th></tr>
<tr>
<center>
<th>Name</th>
<th>MIS</th>
<th>M_id</th>
<th>Address</th>
<th>Contact</th>
<th>E_mail</th>
<th>Gender</th>
<th>Course</th>
<th>Branch</th>
<th>Edit</th>
<th>Delete</th>

</center>
</tr>
<?php
include('connection.php');


$y=mysql_query("select * from `adduser`");
while($z=mysql_fetch_array($y))
{
?>
<tr>

<td align="center"><?php
echo "<br>".$z[0];?></td>
<td align="center"><?php
echo "<br>".$z[1];?></td>
<td align="center"><?php
echo "<br>".$z[2];?></td>
<td align="center"><?php
echo "<br>".$z[3];?></td>
<td align="center"><?php
echo "<br>".$z[4];?></td>
<td align="center"><?php
echo "<br>".$z[5];?></td>
<td align="center"><?php
echo "<br>".$z[6];?></td>
<td align="center"><?php
echo "<br>".$z[7];?></td>
<td align="center"><?php
echo "<br>".$z[8];?></td>
<td align="center"><a href="edit.php?M_id=<?php echo $z[2]; ?>">Edit</a></td>
<td align="center"><a href="delete.php?a=<?php echo $z[2]; ?>">Delete</a></td>
</tr>
<?php
}
?>

</table></div></div>
</body>
</html>
