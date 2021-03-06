<!doctype html>
<html lang="en" class="h-100" prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<title>Calculo TCEA</title>
</head>

<body class="d-flex flex-column h-100">
	<?php require __VIEW__ . "/.parts/page/header.php" ?>

	<main class="container my-3">
		<div>
			<h2 style="text-align:center">TCEA</h2>
		</div>
		<div class="row" style="padding: 2%;">
			<div class="col" style="border-right: 1px solid black;">
				<div class="mb-3">
					<h5 style="text-align:center">Tasa</h5>
				</div>
				<div class="form-group row mb-3">
					<label class="col-md-4" for="selectbasic">Días por año</label>
					<div class="col-md-8">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
				</div>

				<div class="form-group row mb-3">
					<label class="col-md-4 control-label" for="selectbasic">Plazo de Tasa</label>
					<div class="col-md-8">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
				</div>
				<div class="form-group row mb-3">
					<label class="col-md-2 control-label" for="selectbasic">Tasa</label>
					<div class="col-md-3">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
					<label for="exampleFormControlInput1" class="col-md-2 control-label">Valor</label>
					<div class="col-md-3">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
					<label for="exampleFormControlInput1" class="col-md-1 control-label">%</label>
				</div>
				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-5 control-label">Fecha de Descuento</label>
					<div class="col-md-7">
						<input class="form-control" type="date" id="start" name="trip-start"></input>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group row mb-3">
					<h5 style="text-align:center">Datos de la Factura</h5>
				</div>

				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Fecha de Emisión</label>
					<div class="col-md-8">
						<input class="form-control" type="date" id="start" name="trip-start"></input>
					</div>
				</div>
				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Fecha de Pago</label>
					<div class="col-md-8">
						<input class="form-control" type="date" id="start" name="trip-start"></input>
					</div>
				</div>
				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Total Facturado</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
				</div>
				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Retención</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="border-top: 1px solid black; padding: 2%;">
			<div class="col" style="border-right: 1px solid black;">
				<div class="form-group row mb-3">
					<h5 style="text-align:center">Costes / Gastos Iniciales</h5>
				</div>

				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Motivo</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
				</div>
				<div class="form-group row mb-3">
					<label class="col-md-4 control-label" for="selectbasic">Valor expresado en</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>

					<div class="col-md-4">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
				</div>

				<div class="form-group row mb-3">
					<div class="col-md-8" style=" flex: auto;  margin: 20px auto; display: flex;
                    justify-content: space-around; align-items: center;max-width: 500px;">
						<button id="button2id" name="button2id" class="btn btn-primary">Agregar</button>
						<button id="button2id" name="button2id" class="btn btn-primary">Calcular</button>
						<button id="button2id" name="button2id" class="btn btn-primary">Eliminar</button>
					</div>
				</div>


				<div class="form-group row mb-3">
					<div class="col-md-10" style=" margin:0 auto;">
						<table class="table">
							<thead>
								<tr>

									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td>[P]</td>
									<td> Comisión de Desembolso</td>
									<td>12</td>
								</tr>
								<tr>
									<td>[M]</td>
									<td> Gastos Notariales</td>
									<td>54</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<div class="col">
				<div class="form-group row mb-3">
					<h5 style="text-align:center">Costes / Gastos Finales</h5>
				</div>
				<div class="form-group row mb-3">
					<label for="exampleFormControlInput1" class="col-md-4 control-label">Motivo</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
				</div>
				<div class="form-group row mb-3">
					<label class="col-md-4 control-label" for="selectbasic">Valor expresado en</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
					<div class="col-md-4">
						<select id="selectbasic" name="selectbasic" class="form-control">
							<option value="1">Option one</option>
							<option value="2">Option two</option>
							<option value="3">Option three</option>
						</select>
					</div>
				</div>

				<div class="form-group row mb-3">
					<div class="col-md-12 content-button" style=" flex: auto;  margin: 20px auto; display: flex;
                        justify-content: space-around; align-items: center;max-width: 500px;">
						<button id="button2id" name="button2id" class="btn btn-primary">Agregar</button>
						<button id="button2id" name="button2id" class="btn btn-primary">Calcular</button>
						<button id="button2id" name="button2id" class="btn btn-primary">Eliminar</button>
					</div>
				</div>

				<div class="form-group row mb-3">
					<div class="col-md-10" style=" margin:0 auto;">
						<table class="table">
							<thead>
								<tr>

									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col"></th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td>[M]</td>
									<td> Portes</td>
									<td>12</td>
								</tr>
								<tr>
									<td>[M]</td>
									<td> Gastos por comunicaciones</td>
									<td>54</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mb-12" style="display: flex; justify-content: center;  margin: 30px;">
					<button type="submit" id="button2id" name="button2id" class="btn btn-primary">Calcular</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group row mb-3" style="display: flex; justify-content: center;">
					<label for="exampleFormControlInput1" class="col-md-3 control-label">Valor Recibido</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="exampleFormControlInput1">
					</div>
				</div>
			</div>
			<div class="col">
				<div class="form-group row mb-3" style="display: flex; justify-content: center;">
					<label for="exampleFormControlInput1" class="col-md-3 control-label">TCEA</label>
					<div class="col-md-4">
						<input type="text" class="form-control" id="exampleFormControlInput1">
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