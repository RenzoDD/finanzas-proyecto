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


		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-8 ">
					<div class="mb-3">
						<h1 ">¡Bienvenido a FinSmart</h1>
                    <br><br>
                    <h4 >¡Bienvenido a FinSmart!
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore 
                        magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat. Duis aute irure dolor in reprehenderit.
                        
                     </h4>
                    
                </div>
                <div class=" mb-3">
							<!--ponen el .html al que quieren ir -->

							<a href="registro.html"><input type="button" value="ir a login" class="btn btn-primary"></a>
					</div>



				</div>

				<div class="col-6 col-md-4">
					<div class="mb-3">
						<a class="navbar-brand" href="/">
							<img src="/assets/img/imghombre1.jpg">
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