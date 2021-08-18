<?php 
session_start();
require_once 'C:\xampp\htdocs\WebTech\Project\model\empModel.php';

if (isset($_POST['searchEmp'])) {

    try {
    	$allSearchedEmployees = searchEmployee($_POST['uNameS']);
        $_SESSION['employees'] = $allSearchedEmployees;
        header('Location: ../showSearchedUser.php');
        

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

 ?>
