<?php

require_once "classes/Student.php";

$idToDelete = (int)$_GET['id'];

$student = Student::find($idToDelete);

if($student)
	$student->delete();

header("Location: index.php");