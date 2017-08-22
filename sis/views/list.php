<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Öğrenciler</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h1>Öğrenciler</h1>
			</div>
			<div class="col-4">
				<div class="btn-group pull-right">
					<a href="add.php" class="btn btn-primary">+ Yeni Öğrenci</a>
					<a href="logout.php" class="btn btn-danger">Çıkış Yap</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<form class="form-inline" method="get">
					<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></div>
						<input name="search" type="text" class="form-control" placeholder="Arama Yapın" value="<?=$search?>">
					</div>

					<button type="submit" class="btn btn-primary">Ara</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p>Toplam <strong><?=count($students)?></strong> öğrenci listeleniyor</p>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Ad</th>
							<th>Numara</th>
							<th>Doğum Yılı</th>
							<th>Okul / Bölüm</th>
							<th>Telefon</th>
							<th>E-Posta</th>
							<th>İşlemler</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($students as $student): ?>
							<tr>
								<td><?=$student->name?></td>
								<td><?=$student->number?></td>
								<td><?=$student->birth_year?></td>
								<td><?=$student->school?><br><?=$student->department?></td>
								<td><?=$student->telephone?></td>
								<td><?=$student->email?></td>
								<td>
									<div class="btn-group" role="group">
										<a href="update.php?id=<?=$student->id?>" class="btn btn-secondary">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</a>
										<a href="delete.php?id=<?=$student->id?>" class="btn btn-secondary" onclick="return confirm('Silmek istediğinize emin misiniz?');">
											<i class="fa fa-trash" aria-hidden="true"></i>
										</a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>