<?php
session_start();
if($_POST){
	if($_POST['captcha'] == $_SESSION['captcha'])
		echo "Karakterleri doğru girdiniz, TBR!";
	else
		echo "Bi yanlışlık oldu herhalde. Bizde yanlış olmaz, olduysa da yanlışlıkla olmuştur!";

	echo '<br><a href="index.php">Tekrar</a>';
} else {
	header("Location: index.php");
}