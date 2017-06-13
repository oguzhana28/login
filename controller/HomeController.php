<?php
include_once('../model/homeModel.php');

function index()
{
	render("home/index");	
}
function login()
{
	loginUser();
}

function logout(){
    session_destroy();
    header("Location:" . URL . "home/index");
}