<?php

require_once "inc/init.php";

redirectIfNotLoggedIn();

$idToUpdate = (int)$_GET['id'];

$student = Student::find($idToUpdate);

if( ! $student ) {
	header("Location: index.php");
	die();
}

//	bilgiler geldiyse güncelleyelim
if($_POST) {
	$student->name = $_POST['name'];
	$student->number = $_POST['number'];
	$student->birth_year = $_POST['birth_year'];
	$student->school = $_POST['school'];
	$student->department = $_POST['department'];
	$student->telephone = $_POST['telephone'];
	$student->email = $_POST['email'];
	$student->save();
	header("Location: index.php");
	die();
}

include "views/editForm.php";

