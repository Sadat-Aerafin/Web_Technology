<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
<?php

include 'upperHeader.php';
include 'sideInfo.php';

$newPass = "";
$newPassErr = $retPassErr = "";
if (isset($_SESSION['uname'])) { 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_SESSION['password'] == $_POST['currPass'])
  {
  	if($_SESSION['password'] == $_POST['newPass'])
  	{
  		$newPassErr = "New Password can not be same as current password.";
  		$newPass = "";
  	} else {
  	$newPass = $_POST["newPass"];
  	if(strlen($newPass)<8){
  		$newPassErr = "Password must not be less than eight (8) characters";
  		$newPass = "";
  	}
  	if (!preg_match("/\W/", $newPass)) {
    $newPassErr = "Password should contain at least one special character";
    $newPass = "";
 	}
 	if($_POST["retPass"]!==$newPass)
 	{
 	$retPassErr="Retyped Password does not match with current Password";
 	$newPass="";
 	}
  }
  }
}
}
else{
  header("location:login.php");
}

 ?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset>
<legend>Change Password</legend>
<p><?php echo $newPassErr; ?></p>
<p><?php echo $retPassErr; ?></p>
Current Password :<input type="text" name="currPass"><br>
New Password :<input type="text" name="newPass"><br>
Retype New Passeord :<input type="text" name="retPass"><hr>
<input type="submit" name="submit"><br><br>
<?php 
if(isset($_POST['submit']))
{
echo "Password changed to: ".$newPass;
}
 ?>
</fieldset>
</form>
<?php include 'lowerFooter.php'; ?> 

</body>
</html>