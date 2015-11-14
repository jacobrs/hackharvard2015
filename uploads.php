<?php 
	$thisPage = "uploads";
	$pathToRoot = "./";
?>
<html>
	<head>
		<title>HackHarvard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel="stylesheet" type="text/css">
		<link href="<?php echo $pathToRoot; ?>css/Normalize.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $pathToRoot; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $pathToRoot; ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $pathToRoot; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $pathToRoot; ?>css/main.css" rel="stylesheet" type="text/css">

		<script src="<?php echo $pathToRoot; ?>js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo $pathToRoot; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo $pathToRoot; ?>js/main.js"></script>
	</head>
	<body>
		<?php require_once($pathToRoot."templates/nav_bar.php"); ?>
		<div class="content">
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>