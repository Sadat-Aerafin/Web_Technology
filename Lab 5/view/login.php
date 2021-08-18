<?php 
include 'header.php';

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["uname"],time()+ (86400*30));
	setcookie ("password",$_POST["pass"],time()+ (86400*30));
	echo $_COOKIE['username'];
} else {
	setcookie("username","");
	setcookie("password","");
}
 $username = $password = "admin";
   
 if (isset($_POST['submit'])) 
 {               
 	if($_POST['uname']==$username && $_POST['pass'] == $password)
 	{
 		$_SESSION['uname'] = $username;
 		$_SESSION['password'] = $password;
 		
		header("location:welcome.php");
 	}
 	else{
		$msg="username or password invalid";
	}
 } 
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="uname" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="pass" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"></td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="checkbox" name="remember">Remember Me<br><br></td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="submit" name="submit" value="login"> </td>
		</tr>

	</table>
	<?php include 'footer.php' ?>



</form>

</body>
</html>