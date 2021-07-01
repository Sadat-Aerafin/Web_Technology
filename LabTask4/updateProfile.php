<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php include 'upperHeader.php';
include 'sideInfo.php';
?>
<fieldset>
<legend>Profile</legend>
<?php
if (isset($_SESSION['uname'])) { 
 

echo "Name: ".$_SESSION['name']."<br>";
echo "Email: ".$_SESSION['email']."<br>";
echo "Gender: ".$_SESSION['gender']."<br>";
echo "Date of Birth: ".$_SESSION['dob']."<br>";
}else{
	header("location:login.php");
}
 ?>
</fieldset>
<?php include 'lowerFooter.php'; ?>
</body>
</html>