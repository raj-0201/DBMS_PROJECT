<?php
session_start();
$x=$_SESSION['uname'];
?>

<html>
<head>
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
background: #666666;
height:300px;
width:700px;
border:2px thin #000000;
margin-left:350px;
margin-top:120px;
border-radius:10px;
float:left;
}
 

 



</style>
</head>
<body>

<form>
<div>
 <div id="a">
 <font size="5" color="#FFFFFF">
 <ul style="list-style:none; height:40px;">
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="addbooks.php" style="text-decoration:none;">add Book</a></li>
  <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="viewbookdetails.php" style="text-decoration:none">veiw Book details</a></li>
  
  <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="issuedbooks.php" style="text-decoration:none">Issued Books</a></li>
  <li style="border-left:groove; padding-left:20px; height:40px;"  ><a href="returnedbooks.php" style="text-decoration:none">Return Books</a></li>
  <li style="border-left:groove; padding-left:20px; height:40px;"><a  href="../user/logout.php" style="text-decoration:none;">Logout</a></li>
  <li style="padding-left:300px; border-left:groove;height:40px;"><?php echo $x; ?></li>
 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font>
</div><br /><br />
 
<div  id="c">
<center><h2><font color="#FFFFFF"; style="margin-left:10px;">Vision</h2></center></font>
<hr/>
<font color="#FFFFFF" size="4"  style="margin-left:10px; font-style:italic; font-family:'Times New Roman', Times, serif;">
By 1854. COEP is a center of learning innovative and creative things and helping institude to become a good engineer.
</font>
<hr/>
<center><h2><font color="#FFFFFF"; style="margin-left:10px;">Mission</h2></center></font>
<hr/>
<font color="#FFFFFF"; size="4" style="margin-left:10px;font-style:italic; font-family:'Times New Roman', Times, serif; ">
To nurture students to become productive responsible citizens through the assistance of service - oriented and highly competent internal and external Engineers working in a harmonious relationship.
</font><hr/>

</div>


</div>






</form>

</body>

</html>
