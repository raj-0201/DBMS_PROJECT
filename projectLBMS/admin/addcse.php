<?php
session_start();
$x=$_SESSION['uname'];
?>

<html>
<head>
<title>Add CSE</title>
<style>
div
{
background-image:url(images/white-damask-background_00435854.jpg);
height:653px;
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

color: #FFFFFF;
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
background:#761816;
height:50px;
width:404px;
float:left;
margin-left:471px;
margin-top:0px;
font:cursive;
font-style:oblique;
font-size:24px;
color:#00FF00;
}
#d
{
background:#000000;
border:2px dashed #000000;
height:420px;
width:400px;
font:Chiller;




}







</style>
</head>

<body>
<form action="addcsedb.php" method="post">
<div>
<div id="a">
 <font size="5" color="#FFFFFF">
 <ul style="list-style:none; height:40px;">
 <li style="border-left:groove; padding-left:20px; height:40px;"><a href="addcse.php" style="text-decoration:none;">CSE</a></li>
     
	<li style="border-left:groove; padding-left:20px; height:40px;"><a href="addece.php" style="text-decoration:none;">ECE</a></li>
		 
	 
	 
	<li style="border-left:groove; padding-left:20px; height:40px;"><a href="welcome.php" style="text-decoration:none;">Proceed to Add Details</a></li>
    <li style="border-left:groove; height:40px; padding-left:20px;"><a href="logout.php" style="text-decoration:none;">Logout</a></li>
  <li style="padding-left:20px; border-left:groove; border-right:groove; height:40px; color:#FFFF00;"><?php echo $x; ?></li>
 </ul></font>
</div><br />
<div id="b">
<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</p></center></font>
</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<center>
<div id="c">
<center>
please login to coninue
</center>
</div>
<div id="d" >

<table   align="center">
<tr>

<tr align="center"><td><font color="#00FF00">Name</font></td><td><input type="text"   placeholder="enter name" style="margin-left:20px;" name="uname" required="" /></td></tr>
<tr align="center"><td><font color="#00FF00">MIS</font></td><td><input type="text" placeholder="enter rollno" style="margin-left:20px;" name="roll" required="" pattern="[0-9]{7}"/></td></tr>

 
<tr align="center"><td><font color="#00FF00">Branch</font></td><td><select style="margin-left:20px; " name="bran">
<option value="CSE">CSE</option>
 
</select></td></tr>
<tr><td align="center"><font color="#00FF00">Copies</font></td><td><select style="margin-left:80px;" name="cop">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select></td></tr><br /><br />
<tr><td  colspan="2"><input type="submit" value="submit" style="height:25px; width:100px; margin-left:65px; margin-top:10px;  border-radius:40px; background-color:#00FF00;" /></td></tr>

</tr>

</div>
</center>







</div>
</form>
</body>
</html>
