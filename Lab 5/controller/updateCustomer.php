<?php  
require_once '../model/cusModel.php';


if (isset($_POST['change'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['membership'] = $_POST['membership'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];

	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../cusDp/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateCustomer($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  
  }
} else {
	echo 'Access Denied.';
}


?>