<?php
	$pathToRoot = "./";
	$thisPage   = "guide";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			MotionLab
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script>
			var thisPage = "guide";
		</script>
		<?php 
			require_once($pathToRoot."templates/basic_html_imports.php");
		?>
	</head>
	<body>
		<?php require_once($pathToRoot."templates/nav_bar.php"); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="col-lg-8 col-lg-push-2">
					<h2>1. General Interactions</h2>
					<div class="col-lg-7">
						 <p class="guide-text">
						 	MotionLab works by having the user interact with a virtual enivornment using the Oculus Rift and also the Leap Motion.
						 	The Oculus will allow you to see the 3D models that we have created for you while the Leap motion allows you to directly 
						 	"touch" the 3D models, together they allow you to interact with objects that vary from molecules to just about anything
						 	you can think of.
						 </p>
					</div>
					<div class="col-lg-5">
						<img src="" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>