<?php

require_once "inc/init.php";

redirectIfNotLoggedIn();

$idToDelete = (int)$_GET['id'];

$student = Student::find($idToDelete);

if($student)
	$student->delete();

header("Location: index.php");