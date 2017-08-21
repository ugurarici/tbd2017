<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Not Listesi</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1>Not Listesi</h1>
				<div class="btn-group" role="group" aria-label="Sırala">
					<a href="?sort=name-asc" class="btn <?=$siralama=="ksort" ? "btn-primary" : "btn-secondary";?>">A-Z</a>
					<a href="?sort=name-desc" class="btn <?=$siralama=="krsort" ? "btn-primary" : "btn-secondary";?>">Z-A</a>
				</div>
				<div class="btn-group" role="group" aria-label="Sırala">
					<a href="?sort=grade-asc" class="btn <?=$siralama=="asort" ? "btn-primary" : "btn-secondary";?>">0-9</a>
					<a href="?sort=grade-desc" class="btn <?=$siralama=="arsort" ? "btn-primary" : "btn-secondary";?>">9-0</a>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Öğrencinin Adı</th>
							<th>Notu</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($notlar as $kisi => $not): ?>
						<tr>
							<td><?=$kisi?></td>
							<td><?=$not?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-4">
				<h1>İstatistikler</h1>
				<table class="table table-striped">
					<tbody>
						<tr>
							<th>Kişi Sayısı</th>
							<td><?=$kisiSayisi?></td>
						</tr>
						<tr>
							<th>En yüksek not</th>
							<td><?=$enYuksekNot?></td>
						</tr>
						<tr>
							<th>En düşük not</th>
							<td><?=$enDusukNot?></td>
						</tr>
						<tr>
							<th>Not ortalaması</th>
							<td><?=number_format($notOrtalamasi, 2, ",", ".")?></td>
						</tr>
						<tr>
							<th>Standart Sapma</th>
							<td><?=number_format($standartSapma, 2, ",", ".")?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>