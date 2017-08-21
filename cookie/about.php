<?php
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
		<h1>Hakkımızda</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<a href="index.php">Ana sayfa</a>
	</div>
</body>
</html>