<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php include 'header.php';
include 'sidebar.php';
?>
<fieldset>
<legend>Profile</legend>
<?php
if (isset($_SESSION['uname'])) { 

echo "Name: ".$_SESSION['name']."<br>";
echo "Email: ".$_SESSION['email']."<br>";
echo "Contact: ".$_SESSION['contact']."<br>";

}else{
	header("location:login.php");
}
 ?>
</fieldset>
<?php include 'footer.php'; ?>
</body>
</html>