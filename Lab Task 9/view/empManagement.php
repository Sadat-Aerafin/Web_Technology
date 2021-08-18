<?php 

     require_once 'controller/employeeInfo.php';
     
     $employees = fetchAllEmployees();
     include 'UpperHeader.php';
     
     if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
     
 ?>
<!DOCTYPE html>  
 <html>  
      <head> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Employee Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


       <style>

}
</style> 
 </head>  

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-3">
      <?php include 'sideInfo.php'; ?>
    </div>
    <div class="col-md-12 col-lg-9">
    <div align="right">
        <input type="text" name="search" id="search" placeholder="Search..." onkeyup="search_data()">  
    </div> 
    <div class="table-responsive">
    <div id="search_table">
      <table class="table table-striped">
     <thead>
          <tr>
          <th>Name</th> 
          <th>E-mail</th>  
          <th>User name</th>
          <th>Designation</th>  
          <th>Gender</th>   
          <th>Date of birth</th> 
          <th>Image</th>
          <th>Action</th>
          </tr>
     </thead>
     <tbody>
          <?php foreach ($employees as $i => $employee): ?>
               <tr>
                    <td><a href="showEmployee.php?id=<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?></a></td>
                    <td><?php echo $employee['email'] ?></td>
                    <td><?php echo $employee['uname'] ?></td>
                    <td><?php echo $employee['designation'] ?></td>
                    <td><?php echo $employee['gender'] ?></td>
                    <td><?php echo $employee['dob'] ?></td>
                    <td><img width="100px" src="empDp/<?php echo $employee['dp'] ?>" alt="<?php echo $employee['name'] ?>"></td>
                    <td><a href="editEmp.php?id=<?php echo $employee['id'] ?>">Edit</a>&nbsp<a href="controller/deleteEmployee.php?id=<?php echo $employee['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
               </tr>
          <?php endforeach; ?>
          

     </tbody>
     

</table>
        
    </div>

    </div>
    <div align="middle">
            <a style="font-size:20px;" href="empReg.php">Regester for a new employee</a>
        </div>
    </div>
  </div>
</div>

     <!--  <div style="text-align:center;">
          <form method="post" action="controller/findEmployee.php">
          <fieldset>
          <legend>search for a employee: </legend>
          Name : <input type="text" name="uNameS">
          <input type="submit" name="searchEmp", value="Search">
          </fieldset>
          </form> -->
          
       <!-- </div> -->
<script src="js/searchEmp.js"></script>
<?php include 'lowerFooter.php'; ?>
      </body>  
 </html>  