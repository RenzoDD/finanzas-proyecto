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
				<p>Tipo cambio: 4.1 </p>
			</div>
			<div class="col text-end">
				<div class="dropdown show">
					<a>Moneda:
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Selecciona Moneda
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#">PEN</a>
							<a class="dropdown-item" href="#">USD</a>
						</div>
					</a>
				</div>
			</div>
		</div>

		<br>

		<div class="row text-center">
			<h3>Movimiento de Comitentes del
				<input type="date" id="date">
				al
				<input type="date" id="date">
			</h3>
		</div>

		<br>

		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Fecha</th>
						<th scope="col">Valor</th>
						<th scope="col">Emisor</th>
						<th scope="col">Cargos</th>
						<th scopre="col">Abonos</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<th scope="row">12/10/2020</th>
						<td>Factura</td>
						<td>Layconsa</td>
						<td></td>
						<td>25,000</td>
					</tr>
					<tr>
						<th scope="row">01/06/2021</th>
						<td>Letra</td>
						<td>Alpha</td>
						<td></td>
						<td>35,000</td>
					</tr>
					<tr>
						<th scope="row">02/06/2021</th>
						<td>Factura</td>
						<td>Beta</td>
						<td></td>
						<td>20,000</td>
					</tr>
					<tr>
						<th scope="row">03/07/2021</th>
						<td>Recibo por Honorarios</td>
						<td>Alicorp</td>
						<td>60,000</td>
						<td></td>
					</tr>
					<tr>
						<th scope="row">14/08/2021</th>
						<td>Factura</td>
						<td>Faber Castell</td>
						<td>35,000</td>
						<td></td>
					</tr>
				</tbody>

				<tfoot>
					<tr>
						<th scope="col"></th>
						<th scope="col"></th>
						<th scope="col">SubTotal</th>
						<th scope="col">95,000</th>
						<th scopre="col">80,000</th>
					</tr>
				</tfoot>
			</table>
		</div>

	</main>


	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>