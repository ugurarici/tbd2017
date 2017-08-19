<?php

//	Öğrencilerin isimelrini ve notlarını barındıran, genel istatistik (en yüksek not, en düşük not, not ortalaması, standart sapma, sınava giren kişi sayısı) bilgilerini de sunan bir program yazmak istiyoruz

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
	nota göre yükselen -> asort()
	nota göre azalan -> arsort()
	isme göre A-Z -> ksort()
	isme göre Z-A -> krsort()
*/

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


$siralama = "arsort";

if($_GET['sort']) $siralama = $_GET['sort'];

//	adres çubuğundan sıralama bilgisini alacağız

// var_dump($_GET);

// die();




$siralama($notlar);

// krsort($notlar);

include "index.view.php";
?>









