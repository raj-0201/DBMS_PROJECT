<?php
session_start();
$x=$_SESSION['uname'];
?>

<html>
<head>
<title>Add User</title>
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
<form action="adusdb.php" method="post">
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

<tr align="center"><td><font color="#00FF00">Name</font></td><td><input type="text"   placeholder="enter name" style="margin-left:20px;" name="uname"  required="" /></td></tr>
<tr align="center"><td><font color="#00FF00">MIS</font></td><td><input type="text" placeholder="enter rollno" style="margin-left:20px;" name="roll" required="" pattern="[0-9]{7}"/></td></tr>
<tr align="center"><td><font color="#00FF00"></font></td><td><input type="hidden"  style="margin-left:20px;" name="m_id"/></td></tr>
<tr align="center"><td><font color="#00FF00">Address</font></td><td><input type="text" placeholder="enter  address" style="height:80px; margin-left:20px;" name="add" required="" /></td></tr>
<tr align="center"><td><font color="#00FF00">Contact</font></td><td><input type="text" placeholder="enter contact no" style="margin-left:20px;" name="cont" maxlength="10" required="" pattern="[0-9]{10}" /></td></tr>
<tr align="center"><td><font color="#00FF00">E_mail</font></td><td><input type="email" placeholder="enter e-mail" style="margin-left:20px;" name="em" required=""/></td></tr>
<tr align="center"><td><font color="#00FF00">Gender</font></td><td><input type="radio" name="g" value="male"/><font color="#00FF00">Male</font><input type="radio" name="g" value="female" required=""/><font color="#00FF00">Female</font></td></tr>
<tr align="center"><td><font color="#00FF00">Course</font></td><td><select style="margin-left:20px; " name="cou">
<option value="B.tech">B.tech</option>
 
</select></td></tr>
<tr><td align="center"><font color="#00FF00">Branch</font></td><td><select style="margin-left:80px;" name="bran">
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="MCE">MCE</option>
<option value="IT">IT</option>
</select></td></tr><br /><br />
<tr><td  colspan="2"><input type="submit" value="submit" style="height:25px; width:100px; margin-left:65px; margin-top:10px;  border-radius:40px; background-color:#00FF00;" /></td></tr>

</tr>

</div>
</center>







</div>
</form>
</body>
</html>
