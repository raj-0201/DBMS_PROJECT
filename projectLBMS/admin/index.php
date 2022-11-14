 <html>
<head>
<title>login</title>
<style>
div
{
background-image:url(images/1.jpg);
height:220px;
width:250px;
border:4px thin red;
border-radius:0px;
margin-top:300px;
margin-left:300px;
float:left;
 




}

#a
{

height:665px;
width:1340px;
background-image:url(images/1.jpg);
float:left;
margin-top:0px;
margin-left:0px;

}
#c
{
background-image:url(1.jpg);
height:100px;
width:100px;
border:4px thin red;
border-radius:0px;
margin-top:355px;
margin-right:380px;
float:right;
-webkit-transform:skew(15deg,0deg);


}
</style>

</head>
<body>

<?php
if(isset($_POST['s']))
{
	$a=$_POST['uname'];
	$b=$_POST['pwd'];
	
	if($a=='admin' && $b=='admin')
	{
		header('location:main.php');
		}
	else
	{
		echo "wrong username & password";
		}

}

?>
<form action="index.php" method="post">

<div id="a">

<table align="left" >

<tr>

<td colspan="2"  >
<div align="center">
<br><br>

<center>
<input type="text" placeholder="username" name="uname" size="40" style="height:30px; width:200px; background-color:#FCBC66;"/><br><br>
<input type="password" placeholder="password" name="pwd"size="40" style="height:30px; width:200px;background-color:#FCBC66;"/><br><br>
<input type="checkbox"/>Remember password&nbsp;&nbsp;
<input type="reset" value="RESET" style=" background-color:#FCBC66;"/><br><br>
<a href=""><font color="#000000">Forgot Password??</font></a>
</td>
</center>
</div>
</tr>

<div id="c">
<br><br><center>
<input type="submit" value="LOGIN" name="s"  style="height:50px; width:100px;background-color:#FCBC66; margin-top:-12px;"/>
</center>
</div>




</table>
</div>
</form>
<?php
?>
</body>
</html>
