<?php 
 include 'upperHeader.php';

if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["uname"],time()+ (86400*30));
	setcookie ("password",$_POST["pass"],time()+ (86400*30));
	echo $_COOKIE['username'];
} else {
	setcookie("username","");
	setcookie("password","");
}

 $data = file_get_contents("data.json");
 $data = json_decode($data, true);  
 
 if (isset($_POST['submit'])) 
 {               
 foreach($data as $row)
 {
 	if($row["username"]==$_POST['uname'] && $row["password"]==$_POST['pass'])
 	{
 		$_SESSION['name'] = $row["name"];
 		$_SESSION['email'] = $row["e-mail"];
 		$_SESSION['uname'] = $row["username"];
 		$_SESSION['password'] = $row["password"];
 		$_SESSION['gender'] = $row["gender"];
 		$_SESSION['dob'] = $row["dob"];
 		
		header("location:welcome.php");
 	}
 	else{
		$msg="username or password invalid";
	}
 } 
}

 
 ?>
 
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
			<td align="middle" colspan="2"><input type="submit" name="submit" value="login"> <a href="forgotPass.php">Forgot Password?</a></td>
		</tr>

	</table>
	<?php include 'lowerFooter.php' ?>



</form>