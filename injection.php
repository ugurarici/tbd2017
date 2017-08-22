<?php


//	global scopetaki string, integer, float, array gibi sabit içerik taşıyan veriler herhangi bir fonksiyonun scopeuna gönderildiğinde, parametreden gelen bu veri fonksiyon scopeu için kopyalanır, bu noktadan sonra global scopetaki bu değişken üzerinde değil, fonksiyon için kopyalanan hali üzerinde işlem yapılır
//	yani fonksiyon ve/veya metod içinde bir değişken üzerinde yapılan işlemler, ana scopetaki değişkene hiçbir şekilde etki etmez

//	ancak objelerde durum farklıdır, herhangi bir fonksiyon ve/veya metoda bir objeyi parametre olarak gönderdiğimizde, bu obje fonksiyon scopeuna kopyalanmaz. Yalnızca objenin referansı gönderilmiş olur
//	yani bir fonksiyon ve/veya metod içine gönderilen obje üzerinde, fonksiyon içinde yapılan işlemler, dorğudan ana scopeta kayıtlı olan objenin kendisi üzerinde yapılır

//	bu sayede belirli değerlere sahip / belirli işlemler yapabilen objelerimizi ihtiyaç duyduğumuz yere parametre olarak göndererek, tek bir tanesi üzerinden tüm işlemlerimizi yapabiliriz. Örneğin: veritabanı bağlantısı (PDO objesi) ihtiyacı duyan sınıflarımız / işlemlerimiz için yarattığımız tek bir PDO objesini her birine göndererek, tek bir veritabanı bağlantısı üzerinden tüm işlemlerimizi yapabilir hale geliriz

//	Buna Bağımlılık Sızdırma (Dependecy Injection) denir
$isim = "Uğur";

function isimSoyle($isim)
{
	$isim = "Filan";
	echo $isim;
}

// isimSoyle($isim);
// echo $isim;

//	

class Kisi
{
	public $isim;
}


$kisi = new Kisi;
$kisi->isim = "Uğur ARICI";

function isimDegistir($kisiObjesi, $yeniIsim)
{
	$kisiObjesi->isim = $yeniIsim;
}

echo $kisi->isim;

echo "<br>";

isimDegistir($kisi, "Yunus Emre BALOĞLU");

echo $kisi->isim;










