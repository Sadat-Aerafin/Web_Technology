<?php 
session_start();
require_once 'C:\xampp\htdocs\new project\model\cusModel.php';
 

if (isset($_POST['searchCus'])) {

    try {
    	$allSearchedCustomers = searchCustomer($_POST['uNameS']);
        $_SESSION['customers'] = $allSearchedCustomers;
        header('Location: ../showSearchedUser.php');
        

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

 ?>