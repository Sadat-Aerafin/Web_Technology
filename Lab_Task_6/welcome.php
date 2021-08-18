<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Welcome Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php include 'upperHeader.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-4">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-12 col-sm-8 text-center">
      <?php 

if (isset($_SESSION['uname'])) {
	echo "<h1 style='color:#53b8d4'> Welcome ".$_SESSION['uname']."</h1>";

}
else{
		header("location:login.php");
	}
?>
    </div>
  </div>
</div>
<?php include 'lowerFooter.php'; ?>
</body>
</html>