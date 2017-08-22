<?php

function redirectIfNotLoggedIn()
{
	if(!isset($_SESSION['admin'])) {
	//	kullanıcı girişi yok, forma yönlendirelim
		header("Location: login.php");
		die();
	}
}

function redirectIfLoggedIn()
{
	if(isset($_SESSION['admin'])) {
	//	kullanıcı girişi yok, forma yönlendirelim
		header("Location: index.php");
		die();
	}
}