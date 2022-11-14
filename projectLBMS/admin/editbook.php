<?php
session_start();
$x=$_SESSION['uname'];
?>
<html>
<head>
<title>Edit User</title>
<style>
div
{
background-image:url(images/white-damask-background_00435854.jpg);
height:660px;
width:1345px;
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
border-right:;
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
  <li style="padding-left:20px; border-left:groove; border-right:groove; height:40px; color:#FFFF00;"><?php echo $x; ?></li>
 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font>
</div> 
<?php


$Book_id=$_GET['Book_id'];

	include('connection.php');
$y=mysql_query("select * from `addbooks` where `Book_id`='$Book_id'");
while($z=mysql_fetch_array($y))
{
	$a=$z[0];
	$b=$z[1];
	$c=$z[2];
	$d=$z[3];
	$e=$z[4];
	$f=$z[5];
	$g=$z[6];
	$h=$z[7];

}
?>

<form action="updatebook.php" method="post" style="margin-top:-50px;">
<table border="25" align="center" cellspacing="5"  style="margin-top:-50px; font-size:18px;">
<tr><td>Book Title </td><td><input type="text" name="a" value="<?php echo $a; ?>"/></td></tr><br /><br />
<tr><td>Author </td><td><input type="text" name="b" value="<?php echo $b; ?>"/></td></tr><br /><br />
<tr><td>Copies </td><td><input type="text" name="c" value="<?php echo $c; ?>"/></td></tr><br /><br />
<tr><td>Book Id </td><td> <input type="text" name="d" value="<?php echo $d; ?>"/></td></tr><br /><br />
<tr><td>Book Publication </td><td><input type="text" name="e" value="<?php echo $e; ?>"/></td></tr><br /><br />
<tr><td>Publisher Name </td><td><input type="text" name="f" value="<?php echo $f; ?>"/></td></tr><br /><br />
<tr><td>ISBN</td><td><input type="text" name="g" value="<?php echo $g; ?>"/></td></tr><br /><br />
<tr><td>Copyright Year </td><td><input type="text" name="h" value="<?php echo $h; ?>"/></td></tr><br /><br />

<tr><td colspan="2" align="center"><input type="submit" value="submit"/></td></tr>
</table>

</form>

</div>
</body>
</html>
