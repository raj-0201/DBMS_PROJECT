<?php
session_start();
$x=$_SESSION['uname'];
?>

<html>
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
margin-top:50px;
} 





</style>
</head>

<body>
<div>
<form>
 
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
  <li style="padding-left:20px; border-left:groove;  height:40px; color:#FFFF00;"><?php echo $x; ?></li>

 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font><br /><br />
</div>
<div id="c">
<table border="40" cellpadding="5" cellspacing="0" height="80" width="1200" align="center" >
<tr><th colspan="10">BOOK DETAILS</th></tr>
<tr align="center">

<th>Book_title</th>
<th>Author</th>
<th>Copies</th>
<th>Book_id</th>
<th>Book_Publication</th>
<th>Publisher_Name</th>
<th>ISBN</th>
<th>Copyright_Year</th>
 
<th>Edit</th>
<th>Delete</th>


</tr>
</form>
<?php
include('connection.php');


$y=mysql_query("select * from `addbooks`");
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
 
<td align="center"><a href="editbook.php?Book_id=<?php echo $z[3]; ?>">Edit</a></td>
<td align="center"><a href="deletebook.php?a=<?php echo $z[3]; ?>">Delete</a></td>
</tr>

<?php
}
?>
</table></div></div>

</body>
</html>
