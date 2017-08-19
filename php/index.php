<?php

$baslik = "TBD Genç Yaz Kampı 2017!";

//	metin

//	tam sayı
$sinifMevcudu = 22;

//	ondalıklı sayı
$iphoneFiyati = 3999.99;

//	true-false (boolean)
$mezunMu = true;

//	null
$dursunLazimOlur = null;

// $yapilacaklar1 = "Başvuru yap";
// $yapilacaklar2 = "Kabul edil";
// $yapilacaklar3 = "Derse gel, öğren";
// $yapilacaklar4 = "PHP kodlamaya başla!";

$yapilacaklar = array(
	"Başvuru yap",
	"Kabul edil",
	"Derse gel, öğren",
	);

$kisi = array(
	"isim" => "Uğur",
	"soyisim" => "ARICI",
	"mezunMu" => false,
	// "dogumYili" => 1993,
	"boy" => 1.73,
	"sehir" => "İstanbul",
	"hobiler" => "yemek yemek, konuşmak"
	);

// var_dump($yapilacaklar);

include "index.view.php";







