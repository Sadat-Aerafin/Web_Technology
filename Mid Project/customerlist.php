<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
       <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style> 
 </head>  
 <body>
 <?php include 'header.php'; 
 include 'sidebar.php';
 if (!isset($_SESSION['uname'])) {
       header("location:login.php");
      }
 ?>    
<h3>Customers:</h3>     
 <table style="width:100%;">  
      <tr>  
           <th>Name</th> 
           <th>E-mail</th>  
           <th>User name</th>
           <th>Password</th> 
             
           <th>Contact</th>   
              
      </tr>  
      <?php   
      $data = file_get_contents("data1.json");  

      $data = json_decode($data, true);  

      foreach($data as $row)  
      {  
           echo '<tr>
           <td>'.$row["name"].'</td>
           <td>'.$row["e-mail"].'</td>
           <td>'.$row["username"].'</td>
           <td>'.$row["password"].'.</td>
         
           <td>'.$row["contact"].'</td>
           
           </tr>';  
      }  
      ?>  
 </table> <br> 
                   
     
      <!-- <div style="text-align:center;">
          <a  style="font-size:20px;" href="empReg.php">Regester for a new employee</a>

       </div> -->
<?php include 'footer.php'; ?>
      </body>  
 </html>  