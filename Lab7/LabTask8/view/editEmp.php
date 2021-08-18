<!DOCTYPE html>
<html>
<head>
<title>Edit Employee</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">     

</head>
<body>
<?php 
require_once 'controller/employeeInfo.php';
$employee = fetchEmployee($_GET['id']);
include 'upperHeader.php';
if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
 ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-3">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-12 col-sm-9 text-center">
<form name="myform" action="controller/updateEmployee.php" method="POST" onsubmit="return validateform()" enctype="multipart/form-data" >

<fieldset>
<legend>Employee Profile</legend>
Name:<input type="text" name="name" id="name" onblur="checkNameBlur()" value="<?php echo $employee['name'] ?>">
<span id="NameErr" class="text-danger font-weight-bold"></span><hr>

Email:<input type="text" name="email" id="email" value="<?php echo $employee['email'] ?>">
<span id="emailErr" class="text-danger font-weight-bold"></span><hr>

Designation:<select name="desig" id="desig">
    <option value="<?php echo $employee['designation']; ?>" selected><?php echo $employee['designation']; ?></option>
       <option value="web_developer">Web developer</option>
       <option value="business_analysts">Business analysts</option>
       <option value="customer_service_representative">Customer service representative</option>
       <option value="delivery_driver">delivery driver</option>
     </select>
     <span id="desigErr" class="text-danger font-weight-bold"></span><hr>

Gender:<input type="radio" id="male" name="gender" value="male" <?php if ($employee['gender']=="male") echo "checked";?>>
    <label for="male">Male</label>                     
    <input type="radio" id="female" name="gender" value="female"  <?php if ($employee['gender']=="female") echo "checked";?>>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other"  <?php if ($employee['gender']=="other") echo "checked";?>>
    <label for="other">Other</label>
    <span id="genderErr" class="text-danger font-weight-bold"></span><br><hr>
 Date of Birth:<input type="date" name="dob" value="<?php echo $employee['dob']?>">
 <span id="dobErr" class="text-danger font-weight-bold"></span><br><hr>
 New Image<input type="file" name="image"><br><br>
 <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
 <input type="submit" name="change" value="Change"><br>

</fieldset>
</form>
    </div>
  </div>
</div>
<script src="js/editEmpScript.js"></script>

<?php include 'lowerFooter.php'; ?>

</body>
</html>