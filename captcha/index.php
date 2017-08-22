<?php

require_once "vendor/autoload.php";

session_start();

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build(250, 60);
$_SESSION['captcha'] = $builder->getPhrase();
?>
<form action="check.php" method="post">
	<img src="<?=$builder->inline()?>"><br>
	<input type="text" name="captcha" placeholder="Görüntüdeki karakterleri girin" style="width: 250px; font-size: 24px;">	<br>
	<button type="submit">Kontrol Et</button>
</form>
