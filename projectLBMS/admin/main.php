<?php
session_start();
$x=$_SESSION['uname'];
?>
<html>
<head>
<title>WELCOME</title>
<style>
div
{
background-image:url(images/white-damask-background_00435854.jpg);
height:661px;
width:1350px;
margin-top:0px;}
#a
{
background:#761816;
height:40px;
width:1345px;
list-style:none;
}

#a ul li
{
float:left;
margin:0px 15px 0px 15px;
padding-right:10px;
border-right:groove;
height:40px;

}
#a ul li a
{

color:#FFFFFF;
font-size:25px ;


}
#b
{
background-image:url(images/logo.png);
height:100px;
width:760px;
float:left;
margin-left:300px;
border:2px dashed #761816;
}
</style>
</head>
<body>
<div>
 
<div id="a">
 <font size="5" color="#FFFFFF">

 <ul style="list-style:none; height:50px;">

        <li style="border-left:groove; padding-left:20px; "><a href="welcome.php" style="text-decoration:none;">Proceed To Add Details</a> </li>
	
		     <li style="border-right:groove;"> <font size="6" color="#00FF00">COEP LIBRARY</font></li>
			 <li > <a href="bank.php" style="text-decoration:none; ">Book Bank</a>  </li>
			 <li > <a href="logout.php" style="text-decoration:none; ">Logout</a>  </li>
	  <li style="padding-left:30x; border-left:; color:#FFFF00;"><?php echo $x; ?></li>
      </ul> 
	  </font>  
</div><br>
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font>
</div><br><br><br><br><br><br><br><br>
 
<img src="images/anigif.gif" style="width:1050px; border-radius:10px;  height:420px; margin-left:150px;"/>
</div>
 
</div>

</body>
</html>

