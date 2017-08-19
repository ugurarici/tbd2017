<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<title>İlk PHP Dosyamız</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="overlay flex-container">
			<h1><?php echo $baslik ?></h1>
		</div>
	</header>
	<div class="container">
		<h1 class="highlight">Merhaba Dünya!</h1>
		<p>Lorem ipsum <strong class="highlight">dolor sit amet</strong>, consectetur adipisicing elit. Rem aut, et eos! Repudiandae alias facilis, optio eaque, <em>deleniti adipisci</em> dignissimos autem impedit ut ad repellendus, dolorem veniam aspernatur harum eum.</p>
		<h2>Yapılacaklar</h2>
		<ol>
			<?php foreach($yapilacaklar as $yapilacak): ?>
				<li class="highlight"><?=$yapilacak?></li>
			<?php endforeach; ?>
		</ol>
		<h2>Alınacaklar</h2>
		<ul>
			<li>HDMI kablosu</li>
			<li>Uzatma kablosu</li>
			<li>Su</li>
			<li>Şeker</li>
			<li>Un</li>
			<li>Yağ</li>
		</ul>
		<h2>Kişi Bilgileri: <?=$kisi["isim"]?> <?=$kisi["soyisim"]?></h2>
		<ul>
			<li>Adı: <?=$kisi["isim"]?> <?=$kisi["soyisim"]?></li>
			<?php if( isset($kisi["dogumYili"]) ): ?>
			<li>Doğum Yılı: <?=$kisi["dogumYili"]?></li>
			<li>Yaşı: <?=date('Y')-$kisi["dogumYili"]?></li>
			<?php endif; ?>
			<li>Boyu: <?=$kisi["boy"]?></li>
			<li>Yaşadığı Yer: <?=$kisi["sehir"]?></li>
			<li>Hobileri: <?=$kisi["hobiler"]?></li>
			<li>Mezun mu?:
				<?php
				if($kisi["mezunMu"]){
					echo "Evet";
				}else{
					echo "Hayır";
				}
				?>
			</li>
		</ul>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolorem delectus quaerat aliquam veritatis doloribus itaque molestias, iste exercitationem aut odio recusandae fugit debitis nam unde incidunt adipisci iusto minima?</p>
		<blockquote>
			Ben dersimi anlatır maaşımı alırım, olan size olur
		</blockquote>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia ipsa, tempora sapiente nulla aut libero molestiae incidunt fugiat hic molestias porro. Debitis nesciunt fugit vero, officiis dicta perferendis quibusdam temporibus.</p>
		<img src="hattusa.jpg" alt="Hattusa">
	</div>
</body>
</html>