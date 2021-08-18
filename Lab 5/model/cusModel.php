<?php 

require_once 'db_connect.php';


function showAllCustomer(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `customer`  ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showCustomer($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `customer` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchCustomer($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `customer` WHERE uname LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addCustomer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into customer (name, email, uname, password, membership, gender, dob, dp)
VALUES (:name, :email, :username, :pass, :membership, :gen, :dob, :dp)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' => $data['email'],
        	':username' => $data['uname'],
        	':pass' => $data['password'],
            ':membership' => $data['membership'],
            ':gen' => $data['gender'],
            ':dob' => $data['dob'],
        	':dp' => $data['image'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateCustomer($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE customer set name = ?, email = ?, membership = ?, gender = ?, dob = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['membership'], $data['gender'], $data['dob'], $id ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteCustomer($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `customer` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}