<?php

class Ogrenci
{
	var $id;
	var $name;
	var $email;
	var $job;

	function adiniSoyle()
	{
		echo $this->name;
	}

	function save()
	{
		//
	}
}

$yunus = new Ogrenci;

// var_dump($yunus);

$yunus->name = "Yunus Emre BALOĞLU";
$yunus->email = "yunusemrebaloglu@gmail.com";
$yunus->job = "Öğrenci";

// var_dump($yunus);

$yunus->adiniSoyle();











