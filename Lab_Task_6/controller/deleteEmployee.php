<?php 

require_once '../model/empModel.php';

if (deleteEmployee($_GET['id'])) {
    header('Location: ../empManagement.php');
}

 ?>