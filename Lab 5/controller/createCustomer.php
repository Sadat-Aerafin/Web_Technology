<?php  
require_once '../model/cusModel.php';


if (isset($_POST['createCus'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['uname'] = $_POST['un'];
	$data['password'] = password_hash($_POST['pass'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['membership'] = $_POST['membership'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../empDp/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, Error Occured.";
  }

  if (addCustomer($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'Access denied! .';
}

?>