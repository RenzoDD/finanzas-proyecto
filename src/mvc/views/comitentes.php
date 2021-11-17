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
			<form>
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
							<select id="selectbasic" name="moneda" class="form-control" onchange="this.form.submit()">
								<option value="PEN" <?php echo $moneda == "PEN" ? "selected" : "" ?>>PEN</option>
								<option value="USD" <?php echo $moneda == "USD" ? "selected" : "" ?>>USD</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<h1 class="text-center">Movimiento de Comitentes del </h1>
			<div class="row">
				<div class="col-6" style="margin-bottom: 2%;">
					<input type="date" name="fechaInicio" class="form-control" value="<?php echo $fechaInicio ?>" onchange="this.form.submit()">
				</div>
				<div class="col-6" style="margin-bottom: 2%;">
					<input type="date" name="fechaFin" class="form-control" value="<?php echo $fechaFin ?>" onchange="this.form.submit()">
				</div>
			</div>
		</form>


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
					<?php foreach($documentos as $documento): ?>
					<tr>
						<th scope="row"><?php echo $documento->FechaEmision ?></th>
						<td><?php echo $documento->TipoDocumento ?></td>
						<td><?php echo $documento->Emisor ?></td>
						<td><?php echo $documento->Monto < 0?$documento->Monto:"" ?></td>
						<td><?php echo $documento->Monto> 0?$documento->Monto:"" ?></td>

					</tr>
					<?php endforeach?>
				</tbody>

				<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td>Saldo Disponible</td>
								<td><?php echo $sumaCargos ?></td>
								<td><?php echo $sumaAbonos ?></td>
							</tr>

					</tfoot>
			</table>
		</div>
		<div class="text-end">
			<a href="/registroDocumento" class="btn btn-primary">Agregar Documento</a>
		</div>
	</main>


	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>