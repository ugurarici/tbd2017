<?php

require_once "classes/Student.php";

//	eğer sayfaya bilgiler post edildiyse ekleme işlemi yapalım
if($_POST) {
	$student = new Student;
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

include "views/newForm.php";