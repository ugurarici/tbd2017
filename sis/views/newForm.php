<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Yeni Öğrenci Ekle</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1>Yeni Öğrenci Ekle</h1>
			</div>
			<div class="col-2">
				<a href="index.php" class="btn btn-primary btn-block">Listeye Dön</a>
			</div>
		</div>
		<div class="row">
			<div class="col-6 mr-auto ml-auto">
				<form method="POST">
					<div class="form-group row">
						<label for="inpName" class="col-sm-2 col-form-label">Ad</label>
						<div class="col-sm-10">
							<input name="name" type="text" class="form-control" id="inpName" placeholder="Ad">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpNumber" class="col-sm-2 col-form-label">Numara</label>
						<div class="col-sm-10">
							<input name="number" type="text" class="form-control" id="inpNumber" placeholder="Numara">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpBirthYear" class="col-sm-2 col-form-label">Doğum Yılı</label>
						<div class="col-sm-10">
							<input name="birth_year" type="text" class="form-control" id="inpBirthYear" placeholder="Doğum Yılı">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpSchool" class="col-sm-2 col-form-label">Okul</label>
						<div class="col-sm-10">
							<input name="school" type="text" class="form-control" id="inpSchool" placeholder="Okul">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpDepartment" class="col-sm-2 col-form-label">Bölüm</label>
						<div class="col-sm-10">
							<input name="department" type="text" class="form-control" id="inpDepartment" placeholder="Bölüm">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpPhone" class="col-sm-2 col-form-label">Telefon</label>
						<div class="col-sm-10">
							<input name="telephone" type="text" class="form-control" id="inpPhone" placeholder="Telefon">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpEmail" class="col-sm-2 col-form-label">E-Posta</label>
						<div class="col-sm-10">
							<input name="email" type="text" class="form-control" id="inpEmail" placeholder="E-Posta">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Yeni Öğrenciyi Kaydet</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>