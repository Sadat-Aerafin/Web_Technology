
<!DOCTYPE html>  
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/style.css">

     <title>Employee Regestration</title> 
</head>  
<body> 

     <?php
      include 'UpperHeader.php';
     if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
           
      ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-3">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-12 col-sm-9">
      <h2>Employee Regestration:</h2>               
      <form name="myform" class="bg-light" action="controller/createEmployee.php" method="POST" onsubmit="return validateform()" >   
      <br>
      <div class="form-group">
      <label>Name</label>  
      <input type="text" class="form-control" name="name" id="name" onblur="checkNameBlur()" onkeyup="checkNameKeyUp()" placeholder="Enter Name">
      <span id="NameErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>E-mail</label>
      <input type="text" class="form-control" name = "email" id="email" onblur="checkEmail()">
      <span id="emailErr" class="text-danger font-weight-bold"></span><br>
     </div>
      <div class="form-group">
      <label>User Name</label>
      <input type="text" class="form-control" name = "un" id="un">
      <span id="unErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" name = "pass" id="pass">
      <span id="passErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>Confirm Password</label>
      <input type="password" class="form-control" name = "Cpass"id="Cpass">
      <span id="CpassErr" class="text-danger font-weight-bold"></span><br>
      </div>
      <div class="form-group">
      <label>Designation</label>
      <select name="desig" class="form-control" id="desig">
       <option value="" selected >Select</option> 
       <option value="web_developer">Web developer</option>
       <option value="business_analysts">Business analysts</option>
       <option value="customer_service_representative">Customer service representative</option>
       <option value="delivery_driver">delivery driver</option>
     </select>
     <span id="desigErr" class="text-danger font-weight-bold"></span><br>
     </div>
     <label>Gender:</label>
     <div class="form-check">
     <input type="radio" class="form-check-input" id="male" name="gender" value="male">
      <label class="form-check-label" for="male">Male</label>
      </div>
     <div class="form-check">           
      <input type="radio" class="form-check-input" id="female" name="gender" value="female">
      <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check">
      <input type="radio" class="form-check-input" id="other" name="gender" value="other">
      <label class="form-check-label" for="other">Other</label>
     </div>
     <span id="genderErr" class="text-danger font-weight-bold"></span><br>
      <div class="form-group">
      <label>Date of Birth:</label>
      <input type="date" class="form-control" name="dob" id="dob">
      <span id="dobErr" class="text-danger font-weight-bold"></span><br> 
      </div>
      <div class="form-group">
      <input type="file" class="form-control" name="image">
      </div>
      <input type="submit" name="submit" value="Submit"><br>                 
       <?php   
      if(isset($message))  
      {  
           echo "<h3>$message</h3>";  
      }  
      ?> 
 </form> 
    </div>
  </div>
</div>
<script src="js/empRegScript.js"></script>
     
 <?php include 'lowerFooter.php'; ?> 
 
 <br />  
      </body>  
 </html>  