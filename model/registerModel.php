<?php

function createAccount(){
    $db = openDatabaseConnection();
    
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
	
    if (strlen($Username) == 0 || strlen($Password) == 0 || strlen($Email) == 0) {
		return "niet alle velden zijn correct ingevuld";
	}
	
	$sql = "INSERT INTO register(Username, Password, Email) VALUES (:Username, :Password, :Email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':Username' => $Username,
		':Password' => $Password,
		':Email' => $Email));
}