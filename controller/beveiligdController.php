<?php
include_once('../model/homeModel.php');

function index()
{
	render("beveiligd/index", array(
            'exams' => getAllExams()));
}