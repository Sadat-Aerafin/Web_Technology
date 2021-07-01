<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
include 'upperHeader.php';
include 'sideInfo.php';
if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h1>";

}
else{
		header("location:login.php");
	}
include 'lowerFooter.php';

?>
</body>
</html>