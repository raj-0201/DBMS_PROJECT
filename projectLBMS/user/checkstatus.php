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
margin-top:50px;
} 





</style>

</head>

<body>
<div>
<div id="a">
 <font size="5" color="#FFFFFF">
 <ul style="list-style:none; height:40px;">
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="viewbook.php" style="text-decoration:none;">View Book</a></li>
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="checkstatus.php" style="text-decoration:none;">Check Status</a></li>
  
  <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="logout.php" style="text-decoration:none">Logout</a></li>
  <li style="padding-left:700px; border-left:groove; height:40px;"><?php echo $x; ?></li>

 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font><br /><br />
</div>
<div id="c">
<table border="50" cellpadding="0" cellspacing="0" height="80" width="1200" align="center" >
<tr>
<center>
<th>Name</th>
<th>MIS</th>
<th>M_id</th>
<th>B_id</th>
<th>Date</th>
<th>Time</th>
<th>rdate</th>



</center>
</tr>
<?php
include('connection.php');
$b=$_SESSION['roll'];



$y=mysql_query("select * from `issuedbooks` where `Rollno`='$b'");
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


</tr>

<?php
}
?>

</table></div></div>
</body>
</html>
