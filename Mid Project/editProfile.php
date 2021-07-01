<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
include 'header.php';
include 'sidebar.php';

if (isset($_SESSION['uname'])) {
if(isset($_POST['submit'])) {
unset($_SESSION["name"]);
unset($_SESSION["email"]);

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['gender'] = $_POST['contact'];


 }
}else{
	header("location:login.php");
}


 ?>
 <form method="post">
<fieldset>
<legend>Profile</legend>
Name:<input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"><hr>
Email:<input type="text" name="email" value="<?php echo $_SESSION['email'] ?>"><hr>
Contact:<input type="text"  name="contact" value="<?php echo $_SESSION['contact'] ?>"><hr>
 <input type="submit" name="submit" value="Change"><br>

<?php 
if(isset($_POST['submit']))
{
	echo "Updated name: ".$_SESSION['name'];
	echo "<br>";
	echo "Updated email: ".$_SESSION['email'];
	echo "<br>";
	echo "Updated gender: ".$_SESSION['contact'];
	echo "<br>";

}
 ?>
</fieldset>
<?php include 'footer.php'; ?>
</form>
</body>
</html>