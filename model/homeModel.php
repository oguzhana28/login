<?php
function getAllAccounts() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM register";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllExams() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM exams";
	$exams = $db->prepare($sql);
	$exams->execute();

	$db = null;

	return $exams->fetchAll();
}

function loginUser(){
    $db = openDatabaseConnection();
    
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    
    $sql = "SELECT * FROM register where Email='$Email'";
   // $output = mysqli_query($db, $sql);
    //$result = mysqli_fetch_assoc($output);
    $stmt = $db->prepare( $sql); 
    $stmt->execute(); 
    $row = $stmt->fetch();
    var_dump($row);
        
    
    if($row != null){    
        if($Password == $row['Password']){
            header("Location:" . URL . "beveiligd/index");
        }else{
        echo "This password does not exist. Please try again.";
        }
    }else{
        echo "This email does not exist. Please try again or register.";
    }
}