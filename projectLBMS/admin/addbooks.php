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
height:360px;
width:400px;
font:Chiller;





}







</style>
</head>

<body>
<form action="adbodb.php" method="post">
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
Add Books 
</center>
</div><br /><br />
<div id="d" >
<br /><br />
<table align="center"  style="margin-top:20px;">
<tr>

<tr><td align="center"><font color="#00FF00">Details</font></td><td align="center"><font color="#00FF00">Values</font></td></tr>
 
<tr><td><font color="#00FF00">Book_Title</font></td><td><input type="text"  placeholder="Book Title" name="bt" style="margin-left:20px; margin-right:20px;" required=""/><br /></td></tr>
<tr><td><font color="#00FF00">Author</font></td><td><input type="text" placeholder="Author Name" name="aut" style="margin-left:20px;" required=""/><br /></td></tr>
<tr><td><font color="#00FF00">Copies</font></td><td><input type="text" placeholder="No. Of Copies" name="cop" style="margin-left:20px;" required="" /><br /></td></tr>
<tr><td><font color="#00FF00"></font></td><td><input type="hidden" name="bid" placeholder="Book Id"  style="margin-left:20px;" /><br /></td></tr>
<tr><td><font color="#00FF00">Book_Publication</font></td><td><input type="text" placeholder="Book Publication" name="bp" style="margin-left:20px;" required=""/><br></td></tr>
<tr><td><font color="#00FF00">Publisher_Name</font></td><td><input type="text" placeholder="Publisher Name" name="pn"  style="margin-left:20px;" required=""/><br />
<tr><td><font color="#00FF00">ISBN</font></td><td><input type="text" name="isbn" placeholder="ISBN"  style="margin-left:20px;" required=""/><br />
<tr><td><font color="#00FF00">Copyright_Year</font></td><td><input type="text"  name="cy" placeholder="Copyright year" style="margin-left:20px;" required=""/><br /><br>
 
 
 
 
<tr><td colspan="2"><input type="submit" value="submit" style="height:25px; width:100px; margin-left:115px; border-radius:20px;" /></td></tr>



</tr>
</div>
</center>







</div>
</form>
</body>
</html>
