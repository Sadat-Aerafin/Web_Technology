<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>
	<?php include 'UpperHeader.php';
           include 'sideInfo.php';

      if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
      ?>  
<img src="img/dashboard.jpg" width="100%" height="400">
<?php include 'lowerFooter.php' ?>
</body>
</html>