<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style>

    h1 {text-align: center;}

</style>
<body>
<?php 
include 'header.php';
include 'sidebar.php';

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";

}
else{
		header("location:login.php");
	}
include 'footer.php';

?>
</body>
</html>