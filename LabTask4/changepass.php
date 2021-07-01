<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
$data = file_get_contents("data.json");
$data = json_decode($data, true);  
$pass = $msg ='';
 if (isset($_POST['submit'])) 
 {               
 foreach($data as $row)
 {
 	if($row["e-mail"]==$_POST['email'])
 	{
 		$pass = $row["password"];
    $msg="";
 	}
 	else{
		$msg="Email does not exist";
	}
 } 
}

 ?>
<?php include 'upperHeader.php'; ?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset>
  <legend>Forgot Password</legend>
  <input type="text" name="email">
  <input type="submit" name="submit">

</fieldset>
<?php
 if (isset($msg)) {
   echo $msg;
   echo '<br>';
 }
 echo "Password is:".$pass;
 include 'lowerFooter.php'; ?>
</body>
</html>