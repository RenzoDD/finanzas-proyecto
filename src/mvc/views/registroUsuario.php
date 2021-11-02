<!doctype html>
<html lang="en" class="h-100" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<title>Web Template</title>
</head>

<body class="d-flex flex-column h-100">
	<?php require __VIEW__ . "/.parts/page/header.php" ?>

	<main class="container my-3">
		<h1 style="text-align:center">Registro</h1>
		<div class="row">
			<div class="col">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Razón Social</label>
					<input type="text" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Dirección</label>
					<input type="text" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">RUC</label>
					<input type="text" class="form-control" id="exampleFormControlInput1">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Contraseña</label>
					<input type="text" class="form-control" id="exampleFormControlInput1">
				</div>

				<div class="mb-3" style="display: flex; justify-content: center; margin: 30px;">
					<button type="button" class="btn btn-primary">Regístrate</button>
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
					<img src="/assets/img/registroUsuario.png" class="img-fluid" alt="Registro Usuario">
				</div>
			</div>
		</div>
	</main>

	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>