<?php  
require_once '../model/empModel.php';


if (isset($_POST['change'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['designation'] = $_POST['desig'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];

	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../empDp/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateEmployee($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	//header('Location: ../showStudent.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>