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

		<div class="row">
			<div class="col">
				<h1 class="h3 font-weight-normal">Ingresa a FinSmart</h1>
				<p>Por favor, llena tus datos.</p>
				<form action="/login/validar" method="post">
					<div class="mb-3">
						<label>RUC</label>
						<input type="text" class="form-control" name="RUC" placeholder="Ingresa el RUC">
					</div>

					<div class="mb-3">
						<label>Contraseña</label>
						<input type="password" class="form-control" name="Clave" placeholder="Escribe tu contraseña">
					</div>

					<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
				</form>
			</div>
			<div class="col">
				<img class="rounded mx-auto d-block" src="/assets/img/login.png" height="500">
			</div>
		</div>
	</main>

	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>