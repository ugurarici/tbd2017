<?php

//	PHP ile veritabanı işlemlerini yapabilmek için PDO örneği göreceğiz

require_once "connection.php";

// $addNew = $connection->exec("INSERT INTO articles (title, content) VALUES ('yeni bir şeyi PDO ile ekliyoruz', 'PDOYU ÇOK SEVİYORUZ')");

$articles = $connection->query("SELECT * FROM articles");

foreach ($articles as $article) : ?>
	<h1><?=$article['title']?></h1>
	<p><?=$article['content']?></p>
	<small><a href="delete.php?id=<?=$article['id']?>">Sil</a></small>
	<hr>
<?php endforeach; ?>

<a href="addForm.php">Yeni Ekle</a>

