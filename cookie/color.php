<?php

if(isset( $_GET['color'] )) {
	setcookie("color", $_GET['color']);
}

header("Location: index.php");