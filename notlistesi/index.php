<?php

//	Öğrencilerin isimlerini ve notlarını barındıran, genel istatistik (en yüksek not, en düşük not, not ortalaması, standart sapma, sınava giren kişi sayısı) bilgilerini de sunan bir program yazmak istiyoruz

//	Program veri kaynağı olarak bir dizi kullanabilir

//	Sunumun yapıldığı ekranda listenin isme ve nota göre artan ya da azalan şekilde sıralanmasını sağlamalıyız

require_once "functions.php";


$notlar = array(
	"Uğur ARICI" => 100,
	"Yunus Emre BALOĞLU" => 99,
	"Sema BÖREKÇİ" => 75,
	"Cihat ATA" => 65,
	"Bilge KURTOĞLU" => 84,
	"Şeyma AKAY" => 89,
	);

/**
	kişi sayısı -> count()
	en düşük not -> min()
	en yüksek not -> max()
	ortalama -> array_sum() / count()
	standart sapma -> stats_standard_deviation()
*/

	$kisiSayisi = count($notlar);
	$enDusukNot = min($notlar);
	$enYuksekNot = max($notlar);
	$notOrtalamasi = array_sum($notlar)/count($notlar);
	$standartSapma = stats_standard_deviation($notlar);

/**
	nota göre yükselen 	-> asort() 	-> grade-asc
	nota göre azalan 	-> arsort() -> grade-desc
	isme göre A-Z 		-> ksort() 	-> name-asc
	isme göre Z-A 		-> krsort() -> name-desc
*/


// $siralamaFonksiyonlari = array("asort", "arsort", "ksort", "krsort");
	$siralamaFonksiyonlari = array(
		"grade-asc" => "asort",
		"grade-desc" => "arsort",
		"name-asc" => "ksort",
		"name-desc" => "krsort",
		);




	$siralama = "arsort";

	if(isset($_GET['sort'])){
		// if(in_array($_GET['sort'], $siralamaFonksiyonlari)) $siralama = $_GET['sort'];
		if(isset($siralamaFonksiyonlari[$_GET['sort']])) $siralama = $siralamaFonksiyonlari[$_GET['sort']];
	}

//	adres çubuğundan sıralama bilgisini alacağız

// var_dump($_GET);

// die();




	$siralama($notlar);

// krsort($notlar);

	include "index.view.php";
	?>









