<?php
include_once('../model/registerModel.php');

function index($message = '')
{
render("register/index",array('message' => $message));
}
  
function createSave(){
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         createAccount();
    }
   header("Location:" . URL . "home/index");
}