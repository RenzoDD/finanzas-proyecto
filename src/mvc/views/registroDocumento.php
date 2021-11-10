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


		<div class="container"></div>
			<div class="row justify-content-md-center">
				<div class="col">

					<form action="/registroDocumento/registrarDocumento" method="POST">
									
					<div class="mb-3">
						<label class="form-label">Tipo de documento</label>
						<select name="TipoDocumento">
							<option value="Factura">Factura</option>
							<option value="Letra">Letra</option>
							<option value="Recibo">Recibo</option>
						</select>
					</div>
					<div class="mb-3">
						<label >Emisor</label>
						<input class="form-control" name="Emisor" ></input>
					</div>

					<div class="mb-3">
						<label >Fecha de emision</label>
						<input  type="date" name="FechaEmision"></input>
					</div>

					<div class="mb-3">
						<label >Fecha de pago</label>
						<input type="date" name="FechaPago"></input>
					</div>

					<div class="mb-3">
						<div class="row g-3">
							<div class="col">
								<label>Moneda</label>
							<select name="Moneda">
								<option value="Sol">Sol</option>
								<option value="Dolar">Dolar</option>
							</select>
							</div>
							<div class="col">
								<label>Monto</label>
								<input type="number" name="Monto">
							</div>
							
						</div>
					</div>

	

					<div class="mb-3 text-center">
					<input type="submit" class="btn btn-primary" value="Registrar">
					</div>


				</form>
				
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