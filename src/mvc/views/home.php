<?php
/*
 * Copyright 2021 (c) Renzo Diaz
 * Licensed under MIT License
 * Home view
 */
?>

<!doctype html>
<html lang="en" class="h-100" prefix="og: http://ogp.me/ns#">

<head>
	<?php
	echo MetaHeaders("Title", "Slogan");
	echo GoogleAnalytics($pagename);
	?>

	<link href="/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
	<title>Web Template</title>
</head>

<body class="d-flex flex-column h-100">
	<?php require __VIEW__ . "/.parts/page/header.php"; ?>

	<main class="container my-3">
		<h1><?php echo Bootstrap::Icon("globe"); ?> Hello, world!</h1>
		<p> I'm using <?php echo Bootstrap::Icon("bootstrap"); ?> <b>bootstrap</b></p>

		<?php require __VIEW__ . "/.parts/graphs/bars.php"; ?>
	</main>

	<?php require __VIEW__ . "/.parts/page/footer.php"; ?>

	<?php require __VIEW__ . "/.parts/modal/regular.php"; ?>
	<?php require __VIEW__ . "/.parts/modal/static.php"; ?>

	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

</html>