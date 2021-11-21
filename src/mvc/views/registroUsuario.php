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
				<form action="/registro/registrar" method="POST">
					<div class="mb-3">
						<label>Razón Social</label>
						<input type="text" class="form-control" name="RazonSocial">
					</div>
					<div class="mb-3">
						<label>Dirección</label>
						<input type="text" class="form-control" name="Direccion">
					</div>
					<div class="mb-3">
						<label>RUC</label>
						<input type="number" class="form-control" name="RUC">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Contraseña</label>
						<input type="password" class="form-control" name="Clave">
					</div>
					<div class="mb-3 text-center">
					<input type="submit" class="btn btn-primary" value="Registrarse">
					</div>
				</form>
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