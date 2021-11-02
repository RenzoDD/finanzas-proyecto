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


		<!--primera fila, donde está descuento, clientel, etc-->
		<div class="row">
			<div class="col-6">
				<h1>Descuento de valores</h1>>
			</div>
			<div class="col">
				<h7>Cliente</h7>
				<h5>ACME S.A.</h5>
			</div>
			<div class="col">
				<h7>Tipo de cambio</h7>
				<h5>4.1</h5>
			</div>
			<div class="col">
				<h7>Tiempo</h7>
				<input type="text" id="inputHora" class="form-control">

			</div>
			<div class="col">
				<h7>Periodo</h7>
				<select class="form-select" aria-label="Default select example">
					<option selected>Open this select menu</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>


		<!--segunda fila, donde está la primera tabla-->
		<div class="row">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Fecha</th>
							<th scope="col">Emisor</th>
							<th scope="col">Valor</th>
							<th scope="col">Vencimiento</th>
							<th scope="col">Bloqueo</th>
							<th scope="col">Dias/Venc</th>
							<th scope="col">Moneda</th>
							<th scope="col"></th>
							<th scope="col">Valoriza MN</th>
							<th scope="col">Valoriza ME</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>01.09.2021</td>
							<td>Factura</td>
							<td>Los portales</td>
							<td>30.09.2021</td>
							<td>-</td>
							<td>15</td>
							<td>PEN</td>
							<td>-</td>
							<td>10000</td>
							<td>243902</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!--segunda gila, donde está la primera tabla-->
		<div class="row">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Fecha</th>
							<th scope="col">Emisor</th>
							<th scope="col">Valor</th>
							<th scope="col">Vencimiento</th>
							<th scope="col">Bloqueo</th>
							<th scope="col">Dias/Venc</th>
							<th scope="col">Moneda</th>
							<th scope="col"></th>
							<th scope="col">Valoriza MN</th>
							<th scope="col">Valoriza ME</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>01.09.2021</td>
							<td>Factura</td>
							<td>Los portales</td>
							<td>30.09.2021</td>
							<td>-</td>
							<td>15</td>
							<td>USD</td>
							<td>-</td>
							<td>10000</td>
							<td>243902</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>


		<!--4 fila, donde está tasa, tipo de tasa, capitalizacionetc-->
		<div class="row">

			<div class="col">
				<h7>Tasa</h7>
				<input type="text" id="inputHora" class="form-control">
			</div>
			<div class="col">
				<h7>Tipo de tasa</h7>
				<select class="form-select" aria-label="Default select example">
					<option selected>Open this select menu</option>
					<option value="1">TEA</option>
					<option value="2">TNA</option>
					<option value="3">Three</option>
				</select>
			</div>
			<div class="col">
				<h7>capitalizacion</h7>
				<select class="form-select" aria-label="Default select example">
					<option selected>Open this select menu</option>
					<option value="1">Diaria</option>
					<option value="2">Mensual</option>
					<option value="3">Semestral</option>
				</select>
			</div>
			<div class="col">
				<button class="btn btn-primary" type="submit" style="height: 50px;">Calcular</button>
			</div>



			<div class="col">
				<div class="row">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Valoriza</th>
									<th scope="col">Valoriza ME</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Monto a financiar:</th>
									<td>40.500.00</td>
									<td>9,878.05</td>
								</tr>
								<tr>
									<th scope="row">Tasa de comision:</th>
									<td>40.500.00</td>
									<td>9,878.05</td>
								</tr>
								<tr>
									<th scope="row">Comision:</th>
									<td>40.500.00</td>
									<td>9,878.05</td>
								</tr>
								<tr>
									<th scope="row">Monto a desembolsar:</th>
									<td>40.500.00</td>
									<td>9,878.05</td>
								</tr>
							</tbody>
						</table>
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