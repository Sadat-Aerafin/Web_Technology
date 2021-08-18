<?php 

require_once 'db_connect.php';


function showAllEmployees(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `employee`  ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function checkUsernameValidity($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `employee` WHERE uname ='$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(count($rows)>0){
            return "false";
        }else{
            return "true";
        }
}

function showEmployee($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `employee` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// function searchEmployee($user_name){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `employee` WHERE uname LIKE '%$user_name%'";

    
//     try{
//         $stmt = $conn->query($selectQuery);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }


function addEmployee($data){
	$conn = db_conn();
    $selectQuery = "INSERT into employee (name, email, uname, password, designation, gender, dob, dp)
VALUES (:name, :email, :username, :pass, :designation, :gen, :dob, :dp)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
            ':email' => $data['email'],
        	':username' => $data['uname'],
        	':pass' => $data['password'],
            ':designation' => $data['designation'],
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


function updateEmployee($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE employee set name = ?, email = ?, designation = ?, gender = ?, dob = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['designation'], $data['gender'], $data['dob'], $id ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteEmployee($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `employee` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
    


?>