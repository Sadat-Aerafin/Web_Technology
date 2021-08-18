
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View profile</title>
</head>
<body>
<?php 
include 'upperHeader.php';
include 'sideInfo.php';
 $username = $password = "admin";
 if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
?>
UserName : <?php echo $username; ?><br>
Password : <?php echo $password; ?>
<?php include 'lowerFooter.php' ?>
</body>
</html>