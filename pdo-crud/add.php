<?php

// var_dump($_POST);

$baslik = $_POST['baslik'];
$icerik = $_POST['icerik'];

require_once "connection.php";

// $addNew = $connection->exec("INSERT INTO articles (title, content) VALUES ('$baslik', '$icerik')");

$addNew = $connection->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");

$addNew->execute([$baslik, $icerik]);

header("Location: index.php");