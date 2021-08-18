<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['uname']))
  {
    echo "<a href='welcome.php'><img src='img/eLogo.png'></a>";
    echo "<div style='text-align:right;'>";
    echo "Logged in as "."<a href='viewProfile.php'>".$_SESSION['uname']."| </a>";
    echo "<a href=' logout.php'>Logout</a>";
    echo "<hr>";
    echo "</div>";
  }else{
  echo "<a href='publicHome.php'><img src='img/eLogo.png'></a>";
  echo "<div style='text-align:right;'>";
  echo "<a href='publicHome.php'>Home|</a>";
  echo "<a href='login.php'>Login</a>";
  echo "<hr>";
  echo "</div>";
}
  ?>
</body>
</html>