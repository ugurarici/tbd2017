<?php

require_once "classes/Student.php";

// //	bütün öğrencileri almak istediğimizde
// $students = Student::all();

// //	bir öğrenciyi ID'sine göre bulmak istediğimizdei
// $student = Student::find(1);

// //	aramak için
// $results = Student::search("Yunus");

//	yeni ekleme
// $student = new Student;

// $student->name = "Örnek İsim";
// $student->number = "54310006";
// $student->birth_year = 1993;
// $student->school = "DİRİLİŞ Üniversitesi";
// $student->deparment = "Bilgisayar Mühendisliği";
// $student->email = "ornek.isim@dirilisuniversitesi.com";

// //	yeni girdiyi kaydetme
// $student->save();

$search = null;

if(isset($_GET['search'])){
	$search = $_GET['search'];
	$students = Student::search($search);
}
else{
	$students = Student::all();
}

include "views/list.php";

