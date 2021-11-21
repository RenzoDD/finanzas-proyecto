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

	<form action="/financiar/guardar" method="post" class="container my-3">
		<h1>Descuento de valores</h1>

		<div class="row">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Emisor</th>
							<th scope="col">Fecha</th>
							<th scope="col">Tipo</th>
							<th scope="col">Vencimiento</th>
							<th scope="col">Dias/Venc</th>
							<th scope="col">Valor</th>
							<th scope="col">Financiamiento</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($documentosSoles as $doc) : ?>
							<?php if ($doc->DiasVencimiento() > 0 && ($doc->Monto - $doc->EnFinanciamiento) > 0) : ?>
								<tr>
									<th class="align-middle"><input id="select-<?php echo $doc->DocumentoID ?>" name="select-<?php echo $doc->DocumentoID ?>" class="select form-check-input" type="checkbox" onchange="ElegirDocumento(<?php echo $doc->DocumentoID ?>)"></th>
									<td class="align-middle"><?php echo $doc->Emisor ?></td>
									<td class="align-middle"><?php echo $doc->FechaEmision ?></td>
									<td class="align-middle"><?php echo $doc->TipoDocumento ?></td>
									<td class="align-middle"><?php echo $doc->FechaVencimiento ?></td>
									<td class="align-middle"><span class="time"><?php echo $doc->DiasVencimiento() ?></span></td>
									<?php if ($doc->Moneda == "PEN") : ?>
										<td class="align-middle"><span class="moneda" id="moneda-<?php echo $doc->DocumentoID ?>"><?php echo $doc->Moneda ?></span> <span id="max-<?php echo $doc->DocumentoID ?>"><?php echo ($doc->Monto - $doc->EnFinanciamiento) ?></span></td>
									<?php endif ?>
									<?php if ($doc->Moneda == "USD") : ?>
										<td class="align-middle"><span class="moneda" id="moneda-<?php echo $doc->DocumentoID ?>"><?php echo $doc->Moneda ?></span> <span id="max-<?php echo $doc->DocumentoID ?>"><?php echo ($doc->Monto - $doc->EnFinanciamiento) ?></span></td>
									<?php endif ?>
									<td class="align-middle">
										<input type="number" class="form-control form-control-sm text-center value" name="value-<?php echo $doc->DocumentoID ?>" readonly value="0" id="value-<?php echo $doc->DocumentoID ?>" onchange="ContarDinero()">
									</td>
								</tr>
							<?php endif ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<h2>Datos adicionales</h2>
				<div class="row">
					<div class="col">
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="0" readonly id="dias" name="dias">
							<label>Dias para pago</label>
						</div>
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="0" readonly id="bruto" name="bruto">
							<label>Total Financiado (PEN)</label>
						</div>
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="0" id="iniciales" name="iniciales">
							<label>Gastos Iniciales (PEN)</label>
						</div>
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="0" id="finales" name="finales">
							<label>Gastos Finales (PEN)</label>
						</div>
					</div>
					<div class="col">
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="5" id="tasa" name="tasa">
							<label>Tasa de descuento (%)</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="tipo" name="tipo" onchange="SetTipo()">
								<option value="NOMINAL">Nominal</option>
								<option value="EFECTIVA">Efectiva</option>
							</select>
							<label>Tipo de Tasa</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="periodo" name="periodo">
								<option value="ANUAL">Anual</option>
								<option value="SEMESTRAL">Semestral</option>
								<option value="BIMESTRAL">Bimestral</option>
								<option value="MENSUAL">Mensual</option>
								<option value="QUINCENAL">Quincenal</option>
								<option value="DIARIA">Diaria</option>
							</select>
							<label>Periodo</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="capitalizacion" name="capitalizacion">
								<option value="ANUAL">Anual</option>
								<option value="SEMESTRAL">Semestral</option>
								<option value="BIMESTRAL">Bimestral</option>
								<option value="MENSUAL">Mensual</option>
								<option value="QUINCENAL">Quincenal</option>
								<option value="DIARIA">Diaria</option>
							</select>
							<label>Capitalización</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="form-floating mb-3">
							<input type="number" class="form-control" value="0" id="descuento" name="descuento" readonly>
							<label>Descuento</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<h2>Monto a Recibir</h2>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" id="radio-pen" name="recibir" onchange="CambiarMoneda('PEN')" value="0" checked>
					<label class="form-check-label" for="radio-pen">S/ <span id="soles">0.00</span></label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" id="radio-usd" name="recibir" onchange="CambiarMoneda('USD')" value="0">
					<label class="form-check-label" for="radio-usd">$ <span id="dolares">0.00</span></label>
				</div>
				<input type="hidden" name="moneda" id="moneda" value="PEN" required>
				<hr>
				<h2>TCEA</h2>
				<div class="row text-center">
					<div class="col">
						<div class="input-group mb-3">
							<input type="text" class="form-control" readonly id="tcea" name="tcea" value="0">
							<span class="input-group-text">%</span>
						</div>
					</div>
				</div>
				<hr>
				<div class="text-center">
					<button class="btn btn-success btn-lg">Guardar</button>
				</div>
			</div>
		</div>
	</form>

	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script>
		globalThis.cambio = <?php echo CAMBIO ?>;
	</script>
	<script src="/assets/js/main.js"></script>
	<script> setInterval(CalcularTCEA, 500) </script>
</body>

</html>