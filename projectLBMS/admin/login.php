<?php

session_start();


?>
<html>
<head>
<title>WELCOME</title>
<style>
div
{
background-image:url(images/white-damask-background_00435854.jpg);
height:653.2px;
width:1345px;
margin-top:0px;

}
#a
{
background:#761816;
height:40px;
width:1345px;
list-style:none;



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
#c
{
background:#761816;
height:100px;
width:400px;
float:left;
margin-left:500px;
margin-top:130px;
font:cursive;
font-style:oblique;
font-size:24px;
color:#00FF00;
}
#d
{
background:#000000;
height:200px;
width:400px;
}
 






</style>
</head>
<body>


<div>
 
<div id="a">
  
</div><br />
	<div id="b">
	<br><br><br><br><br><center><p><font size="6" color="#0000CC">WELCOME TO COEP CENTRAL LIBRARY</font></p></center>
	</div>
	
		<div id="c">
		<center>
		please login to coninue
		</center>
			<div id="d">
				<table align="left" >
				
					<tr>
					
						<td colspan="2"   >
						
							<form action="" method="post" style="margin-top:30px;">
								<input type="text" placeholder="username" name="uname" size="40" style="height:30px; width:220px; background-color:; margin-left:100px;"/><br><br>
								<input type="password" placeholder="password" name="pwd"size="40" style="height:30px; width:220px;background-color:; margin-left:100px;"/><br><br>
								<input type="submit" value="login" name="q" style=" background-color:; margin-left:95px; border-radius:20px; height:30px; width:80px;"/>
								<input type="reset" value="RESET" style=" background-color:; margin-left:60px; border-radius:20px; height:30px; width:80px;"/>
							</form> 
						</td>
					
					</tr>
				</table>
			
			
			
			</div>
		</div>
	</div>
<?php
if(isset($_POST['q']))
{
	$a=$_POST['uname'];
	$b=$_POST['pwd'];
	
	include('connection.php');
	$q=mysql_query("select * from `login` where `username`='$a' and `password`='$b'");
	echo "select * from `login` where `username`='$a' and `password`='$b'";
	$y=mysql_num_rows($q);
	if($y>0)
	{
		$_SESSION['uname']=$a;
		header('location:main.php');
	}	
	else
	{
		echo "<script>
			alert('username or password mismatch');
			</script>";
		}

}

?>

</body>
</html>
