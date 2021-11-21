<!doctype html>
<html lang="en" class="h-100" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<title>FinSmart</title>
</head>

<body class="d-flex flex-column h-100">
	<?php require __VIEW__ . "/.parts/page/header.php" ?>

	<main class="container my-3">
		<form>
			<div class="row">
				<div class="col">
					<p>Tipo cambio: 4.1 </p>
				</div>				
			</div>
		</form>
			<div class="row text-center">
				<h3>Cartera</h3>
			</div>
		</div>
		<br>
		<div class="row text-left">
				<h3>Moneda Nacional</h3>
			</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Valor</th>
						<th scope="col">Emisor</th>
						<th scope="col">Garantía</th>
						<th scopre="col">Valoriza MN</th>
						<th scopre="col">Valoriza ME</th>
					</tr>

				</thead>
				<tbody>
					<?php foreach($documentosPEN as $doc): ?>
					<tr>
						<td><?php echo $doc->TipoDocumento ?></td>
						<td><?php echo $doc->Emisor?></td>
						<td><?php echo $doc->EnFinanciamiento?></td>
						<td><?php echo $doc->Monto > 0?$doc->Monto:"" ?></td>
						<td><?php echo $doc->Monto > 0?(($doc->Monto)/4.1):"" ?></td>
					</tr>
					<?php endforeach?>
				</tbody>

				<tfoot>
					
				</tfoot>
			</table>
		</div>
		<br>
		<div class="row text-left">
				<h3>Moneda Extranjera</h3>
			</div>					
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Valor</th>
						<th scope="col">Emisor</th>
						<th scope="col">Garantía</th>
						<th scopre="col">Valoriza MN</th>
						<th scopre="col">Valoriza ME</th>
					</tr>

				</thead>
				<tbody>
					<?php foreach($documentosUSD as $doc): ?>
					<tr>
						<td><?php echo $doc->TipoDocumento ?></td>
						<td><?php echo $doc->Emisor?></td>
						<td><?php echo $doc->EnFinanciamiento?></td>
						<td><?php echo $doc->Monto > 0?(($doc->Monto)*4.1):"" ?></td>
						<td><?php echo $doc->Monto > 0?$doc->Monto:"" ?></td>
					</tr>
					<?php endforeach?>
				</tbody>

				<tfoot>
					
				</tfoot>
			</table>
		</div>

		<div class="col text-end">
			<a href="/registroDocumento" class="btn btn-primary">Agregar Documento</a>
			</div>					
		<br>

	</main>


	<?php require __VIEW__ . "/.parts/page/footer.php" ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>