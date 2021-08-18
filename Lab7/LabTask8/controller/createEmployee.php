<?php  
require_once '../model/empModel.php';


if (isset($_POST['createEmp'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['uname'] = $_POST['un'];
	$data['password'] = password_hash($_POST['pass'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['designation'] = $_POST['desig'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../empDp/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addEmployee($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>