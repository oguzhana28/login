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