<?php
	$thisPage = "home";
	$pathToRoot = "./";

	require_once($pathToRoot."scripts/common.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rift Motion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<script>
			var thisPage = "home";
		</script>
		<?php 
			require_once($pathToRoot."templates/basic_html_imports.php");
		?>
	</head>
	<body>
		<?php require_once($pathToRoot."templates/nav_bar.php"); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="row hidden-sm hidden-xs">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						 
						<div class="carousel-inner">
						    <div class="item active">
						      	<img src="http://placehold.it/1200x315" alt="...">
						      	<div class="carousel-caption">
						         	<h3>Caption Text</h3>
						      	</div>
						    </div>
						    <div class="item">
						      	<img src="http://placehold.it/1200x315" alt="...">
						      	<div class="carousel-caption">
						          	<h3>Caption Text</h3>
						      	</div>
						    </div>
						    <div class="item">
						      	<img src="http://placehold.it/1200x315" alt="...">
						      	<div class="carousel-caption">
						          	<h3>Caption Text</h3>
						      	</div>
						    </div>
						</div>
						 
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 bottom-content">
						<div id="ourVision" class="row bottom-content-rows" style="visibility: hidden;">
							<div class="col-lg-7 col-xs-12">
								<h2 class="title">Our vision</h2>
								<font id="ourVisionText" class="bottom-content-descriptions">
									With the recent rise in Virtual Reality and Gesture Sensors we saw our opportunity to create something that can affect students around the globe. 
									With technologies like the Oculus Rift and Leap Motion available in the market we thought up an idea which is has been recently gaining traction: online collaboration. 
									We hope that in the future that people can use our product and learn something new, if that happens then we have accomplished our mission.
								</font>
							</div>
							<div class="col-lg-3 col-lg-push-1 col-xs-6 col-xs-push-3">
								<img src="<?php echo $pathToRoot; ?>assets/images/ourVision.png" style="width: 100%; margin-top: 2em;"></img>
							</div>
						</div>
						<div id="whatWeDo" class="row bottom-content-rows" style="visiblity: hidden;">
							<div class="col-lg-7 col-lg-push-4 col-xs-12 col-xs-push-0">
								<h2 class="title">What we do</h2>
								<font id="whatWeDoText" class="bottom-content-descriptions">
									Rift motion is a software which allows users to interact with 3D models. 
									Our website currently lets users upload 3D models on to our site which other users can download for educational purposes. 
									These 3D models also come with tags that the user has placed on the model, this can help students learn the structure of specific objects while also learning about the smaller details.
								</font>
							</div>
							<div class="col-lg-3 col-lg-pull-7 col-lg-push-0 col-xs-6 col-xs-pull-0 col-xs-push-3">
								<img src="<?php echo $pathToRoot; ?>assets/images/3DModeling.png" style="width: 100%;"></img>
							</div>
						</div>
						<div id="whatWeUse" class="row bottom-content-rows" style="visiblity: hidden;">
							<div class="col-lg-7 col-xs-12">
								<h2 class="title">What we use</h2>
								<font id="whatWeUserText" class="bottom-content-descriptions">
									We use Oculus rift and Leap motion to interact with the 3D models inside of Unity. 
									From within Unity we set certain gestures that a person can do in order to have different interactions with the objects. 
									For example, poking the object will allow the user to label a certain part of the object.
								</font>
							</div>
							<div id="oculusRiftHolder" class="col-lg-3 col-lg-push-1 col-xs-8 col-xs-push-2">
								<img src="<?php echo $pathToRoot; ?>assets/images/oculusRift.png" style="width: 100%;"></img>
							</div>
						</div>
						<div id="whatWeArePlanning" class="row bottom-content-rows" style="visiblity: hidden;">
							<div class="col-lg-7 col-lg-push-4 col-xs-12 col-xs-push-0">
								<h2 class="title">What we are planning</h2>
								<font id="whatWeArePlanningText" class="bottom-content-descriptions">
									We are planning to provide an affordable way for students to further their education. 
									Our product can also help experts in the field with their research or work.
								</font>
							</div>
							<div class="col-lg-3 col-lg-pull-7 col-lg-push-0 col-xs-6 col-xs-pull-0 col-xs-push-3">
								<img src="<?php echo $pathToRoot; ?>assets/images/collaboration.png" style="width: 100%;"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>
