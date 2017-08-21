<?php

//	sitemizdeki içeriklerin kullanıcının tercih ettiği renkte gözükmesini istiyoruz

//	bu tercih yapıldıktan sonra hafızada tutulmasını ve site içinde dolaşılırken de her zaman tercih edilen son rengin kullanılmasını istiyoruz

$color = "black";

if( isset( $_COOKIE['color'] ) ) $color = $_COOKIE['color'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gökkuşağı</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="color:<?=$color?>;">
	<div class="container" style="width:60%;margin:auto;">
		<div>
			<a href="color.php?color=black">Siyah</a> 
			<a href="color.php?color=red">Kırmızı</a> 
			<a href="color.php?color=green">Yeşil</a> 
			<a href="color.php?color=blue">Mavi</a> 
		</div>
		<h1>Ana sayfa</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<a href="about.php">Hakkımızda</a>
	</div>
</body>
</html>