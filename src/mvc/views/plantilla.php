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
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
			</div>
			<div class="col">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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