<?php
	$thisPage = "team";
	$pathToRoot = "./";
?>
<html>
	<head>
		<title>HackHarvard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link href="<?php echo $pathToRoot; ?>css/Normalize.css" rel="stylesheet">
		<link href="<?php echo $pathToRoot; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $pathToRoot; ?>css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $pathToRoot; ?>css/main.css" rel="stylesheet">

		<script src="<?php echo $pathToRoot; ?>js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo $pathToRoot; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo $pathToRoot; ?>js/main.js"></script>
	</head>
	<body>
		<?php require_once($pathToRoot."templates/nav_bar.php"); ?>
		<h2>Hello World</h2>
	</body>
</html>