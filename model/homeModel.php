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
    $_SESSION['loggedIn'] = 0;
    $db = openDatabaseConnection();
    
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    
    $sql = "SELECT * FROM register where Email='$Email'";
   // $output = mysqli_query($db, $sql);
    //$result = mysqli_fetch_assoc($output);
    $stmt = $db->prepare( $sql); 
    $stmt->execute(); 
    $user = $stmt->fetch();
    var_dump($user);
        
    if(!empty($user['Username'])){
        $username = $user['Username'];
        $_SESSION['username'] = $username;
        $email = $user['Email'];
        $_SESSION['email'] = $email;
        
        //Set session logged in
        
        $_SESSION['loggedIn'] = 1;
    }
    if($user != null){    
        if($Password == $user['Password']){
            header("Location:" . URL . "beveiligd/index");
        }else{
        echo "This password does not exist. Please try again.";
        }
    }else{
        echo "This email does not exist. Please try again or register.";
    }
}