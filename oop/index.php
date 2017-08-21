<?php

$ogrenci = new Ogrenci;
$ogrenci->name = "Yunus Emre";
$ogrenci->email = "falan@fdasf.co";
$ogrenci->birthYear = 1996;
$ogrenci->save();
$ogrenci->name = "Yunus Emre BALOĞLU";
$ogrenci->save();

$ogrenci->getAge();

echo $ogrenci->id;

$ogrenci = Ogrenci::find(2);
echo $ogrenci->name;
$ogrenci->name = "Yeni İsim";
$ogrenci->save();

$student = $connection->query("SELECT * FROM students WHERE id = 2")->fetch();
$student['name'];

$yeniIsim = "Falan Filan";

$updateStudent = $connection->prepare("UPDATE students SET name = ? WHERE id = ?");
$updateStudent->execute([$yeniIsim, 2]);






