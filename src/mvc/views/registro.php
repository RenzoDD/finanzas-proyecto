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


		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col ">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Tipo de documento</label>
						<select class="form-select" aria-label="Default select example">
							<option selected>Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Emisor</label>
						<input class="form-control" id="exampleFormControlTextarea1"></input>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Fecha de emision</label>
						<input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31"></input>
					</div>

					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Fecha de pago</label>
						<input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31"></input>
					</div>

					<div class="mb-3">
						<div class="row g-3">
							<div class="col">
								<label for="exampleFormControlTextarea1" class="form-label">Moneda</label>
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
							<div class="col">
								<label for="exampleFormControlTextarea1" class="form-label">MONTO</label>
								<input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
							</div>
						</div>
					</div>

					<div class="mb-3">
						<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">Registrate</button>


					</div>

				</div>
				<div class="col">
					<div class="mb-3">
						<a class="navbar-brand" href="/">
							<img src="/assets/img/registro1.jpg" width="500px">
						</a>
					</div>
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