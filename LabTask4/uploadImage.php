<!DOCTYPE html>
<html>
<body>
<?php
include 'upperHeader.php';
include 'sideInfo.php';
if (isset($_SESSION['uname'])) { 


}else{
  header("location:login.php");
}

  ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php include 'lowerFooter.php'; ?> 
</body>
</html>