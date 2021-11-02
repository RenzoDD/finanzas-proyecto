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
				<button type="button" class="btn btn-secondary">Agregar Documento</button>
			</div>
		</div>

		<br>

		<div class="row text-center">
			<h3>Cartera</h3>
		</div>

		<br>

		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Valor</th>
						<th scope="col">Emisor</th>
						<th scope="col">Garantía</th>
						<th scopre="col">Valoriza MN</th>
						<th scopre="col">Valoriza ME</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Factura</td>
						<td>Layconsa</td>
						<td>35,000</td>
						<td>35,000</td>
						<td>8,537</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Recibo por Honorarios</td>
						<td>Faber Castell</td>
						<td></td>
						<td>25,000</td>
						<td>6,098</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Factura</td>
						<td>Alpha</td>
						<td></td>
						<td>35,000</td>
						<td>8,537</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Letra</td>
						<td>Beta</td>
						<td></td>
						<td>20,000</td>
						<td>4,878</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Factura</td>
						<td>Alicorp</td>
						<td></td>
						<td>60,000</td>
						<td>14,634</td>
					</tr>
				</tbody>

				<tfoot>
					<tr>
						<th scope="col"></th>
						<th scope="col">Total</th>
						<th scope="col"></th>
						<th scope="col">35,000</th>
						<th scopre="col">175,000</th>
						<th score="col">42,683</th>
					</tr>
				</tfoot>
			</table>
		</div>

		<br>

		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Valor</th>
						<th scope="col">Emisor</th>
						<th scope="col">Garantía</th>
						<th scopre="col">Valoriza MN</th>
						<th scopre="col">Valoriza ME</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Letra</td>
						<td>Alicorp</td>
						<td>25,000</td>
						<td>60,000</td>
						<td>14,634</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Factura</td>
						<td>Layconsa</td>
						<td></td>
						<td>35,000</td>
						<td>8,537</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Recibo por Honorarios</td>
						<td>Alpha</td>
						<td></td>
						<td>25,000</td>
						<td>6,098</td>
					</tr>

				</tbody>

				<tfoot>
					<tr>
						<th scope="col"></th>
						<th scope="col">Total</th>
						<th scope="col"></th>
						<th scope="col">25,000</th>
						<th scopre="col">125,000</th>
						<th score="col">29,268</th>
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