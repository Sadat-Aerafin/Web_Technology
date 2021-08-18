<?php 

require_once '../model/cusModel.php';

if (deleteCustomer($_GET['id'])) {
    header('Location: ../empManagement.php');
}

 ?>