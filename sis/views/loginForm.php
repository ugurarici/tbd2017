<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giriş Yap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="padding-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-6 mr-auto ml-auto">
				<h1>Giriş Yap</h1>
				<?php if(isset($error)): ?>
					<div class="alert alert-danger" role="alert">
						<?=$error?>
					</div>
				<?php endif; ?>
				<form method="POST">
					<div class="form-group row">
						<label for="inpPassword" class="col-sm-2 col-form-label">Parola</label>
						<div class="col-sm-10">
							<input name="password" type="password" class="form-control" id="inpPassword" placeholder="Parolayı Girin">
						</div>
					</div>
					<div class="form-group row">
						<label for="lblCaptcha" class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<img src="<?=$builder->inline()?>" alt="Resimdeki karakterleri girin">
						</div>
					</div>
					<div class="form-group row">
						<label for="inpCaptcha" class="col-sm-2 col-form-label">Doğrulama</label>
						<div class="col-sm-10">
							<input name="captcha" type="text" class="form-control" id="inpCaptcha" placeholder="Görseldeki karakterleri girin">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>