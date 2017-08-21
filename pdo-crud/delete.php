<?php

require_once "connection.php";

$silinecekId = (int)$_GET['id'];

$delete = $connection->exec("DELETE FROM articles WHERE id = $silinecekId");

header("Location: index.php");