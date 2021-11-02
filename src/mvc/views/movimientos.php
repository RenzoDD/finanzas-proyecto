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
		<div class="row" style="padding: 2%;">
			<div class="col">
				<div class="form-group row mb-3" style=" align-items: center;">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Tipo cambio: </label>
					<div class="col-md-3">
						<input type="text" class="form-control" id="exampleFormControlInput1" readonly value="4.1">
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group row mb-3" style="justify-content: flex-end; align-items: center;">
					<label class="col-md-2" for="selectbasic">Moneda</label>
					<div class="col-md-4">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		</div>
		<div class="row">
			<div class="col-12" style="margin-bottom: 2%;">
				<h1 style="text-align:center">Estado de cuenta corriente MN al </h1>
			</div>
		</div>

		<div class="form-group row mb-2">
			<label for="exampleFormControlInput1" class="col-md-2 control-label">Señores: </label>
			<div class="col-md-4">
				<input type="text" class="form-control" id="exampleFormControlInput1" readonly>
			</div>
		</div>
		<div class="row">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Fecha</th>
							<th scope="col">Fecha Valor</th>
							<th scope="col">Descripción</th>
							<th scope="col">Cargo</th>
							<th scope="col">Abono</th>
							<th scope="col">Saldo</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td></td>
							<td> </td>
							<td>Saldo Disponible</td>
							<td>170000</td>
							<td>210000</td>
							<td>40.000</td>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>22.07.2021</td>
							<td> 01.07.2021</td>
							<td>Factura Buenventura</td>
							<td>-</td>
							<td>50.000</td>
							<td>50.000 </td>
						</tr>
						<tr>
							<td>22.07.2021</td>
							<td> 23.07.2021</td>
							<td>Comisión Factoring</td>
							<td>2500</td>
							<td>-</td>
							<td> 47.500 </td>
						</tr>
						<tr>
							<td>22.07.2021</td>
							<td> 01.07.2021</td>
							<td>Factura Buenventura</td>
							<td>-</td>
							<td>50.000</td>
							<td>50.000 </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>

	<?php require __VIEW__ . "/.parts/page/footer.php" ?>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>