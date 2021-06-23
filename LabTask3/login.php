<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php 
$uname = $pass = "";
$unameErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $unameErr = "User Name is required";
  } else {
    $uname = $_POST["uname"];
    if (!preg_match("/^[a-zA-Z0-9._-]*$/",$uname)) {
      $unameErr = "Only alpha numeric characters, period, dash or
underscore are allowed";
      $uname = "";
    }
    if(strlen($uname)<2){
      $unameErr = "User Name should contain at least two word";
      $uname = "";
    }
  }
  if(empty($_POST["pass"])) {
	$passErr = "Password must not be less than eight (8) characters" ;
  } else {
  	$pass = $_POST["pass"];
  	if(strlen($pass)<8){
  		$passErr = "Password must not be less than eight (8) characters";
  		$pass = "";
  	}
  	if (!preg_match("/\W/", $pass)) {
    $passErr = "Password should contain at least one special character";
    $pass = "";
 	}
  }
}

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset>
  <legend>LOGIN</legend>
  <p><?php echo $unameErr; ?></p>
  <p><?php echo $passErr; ?></p>
  User Name: <input type="text" name="uname"><br>
  Password: <input type="Password" name="pass"><hr>
  <input type="checkbox" name="remember">Remember Me<br><br>
  <input type="submit" name="Login">
  <a href="passretrival.php">Forgot Password?</a>
</fieldset>
</form>
<?php 
echo "User Name: ".$uname;
echo "<br>";
echo "Password : ".$pass;
 ?>
</body>
</html>