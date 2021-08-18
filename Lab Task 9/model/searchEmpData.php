<?php 
include('db_connect.php');
$search=$_POST['search'];
$conn = db_conn();
    $selectQuery = "SELECT * FROM employee ";
    if($search!=''){
    	$selectQuery.="WHERE name LIKE '%$search%' OR uname LIKE '%$search%' OR email LIKE '%$search%'";
    }
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(isset($data['0'])){
	$html='<table class="table table-striped">
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
     </thead>';
     foreach($data as $list){
     $html.='<tr>	
     	<td><a href="showEmployee.php?id='.$list['id'].'">'.$list['name'].'</a></td> 
        <td>'.$list['email'].'</td>
        <td>'.$list['uname'].'</td>
        <td>'.$list['designation'].'</td>
        <td>'.$list['gender'].'</td>
        <td>'.$list['dob'].'</td>
        <td><img width="100px" src="empDp/'.$list['dp'].'" alt="'.$list['name'].'"></td>
        <td><a href="editEmp.php?id='.$list['id'].'">Edit</a>&nbsp<a href="controller/deleteEmployee.php?id='.$list['id'].' onclick=return confirm("Are you sure want to delete this ?")">Delete</a></td>

        </tr>';


        
     }
     $html.='</table>';
     echo $html;
}else{

	echo "Data not found";
}


 ?>