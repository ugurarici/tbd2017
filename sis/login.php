<?php

require_once "inc/init.php";

redirectIfLoggedIn();

//	busayfaya talep geldiğinde zaten üye girişi yapılmışsa direkt ana sayfaya yönlendireceğiz

//	doğrudan gelindiğinde giriş formunu göstereceğiz

//	veri post edildiğinde önceden atanmış parola ile eşleşirse session başlatacağız

$adminPassword = 123;

if($_POST)
{
	if($_POST['captcha']==$_SESSION['captcha']){
		if($_POST['password']==$adminPassword){
			$_SESSION['admin'] = true;
			header("Location: index.php");
			die();
		} else {
			$error = "Parola doğru değil. Lütfen tekrar deneyin";
		}	
	} else {
		$error = "Doğrulama kodunu yanlış girdiniz. Lütfen tekrar deneyin.";
	}
}

$builder = new Gregwar\Captcha\CaptchaBuilder;
$builder->build(250, 60);
$_SESSION['captcha'] = $builder->getPhrase();

include "views/loginForm.php";