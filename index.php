<?php
	$thisPage = "home";
	$pathToRoot = "./";

	require_once($pathToRoot."scripts/common.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MotionLab</title>
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
		<div class="content" style="visibility: hidden;">
			<div class="container-fluid">
				<div class="row hidden-sm hidden-xs">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-id" data-slide-to="1"></li>
						    <li data-target="#carousel-id" data-slide-to="2"></li>
						</ol>
						 
						<div class="carousel-inner">
						    <div class="item active">
						      	<img src="<?php echo $pathToRoot; ?>assets/images/firstSliderPicture.jpg" alt="...">
								<div class="carousel-caption">
									<h2>Bringing education to the virtual world</h2>
								</div>
						    </div>
						    <div class="item">
						      	<img src="<?php echo $pathToRoot; ?>assets/images/secondSliderPicture.jpg" alt="...">
						      	<div class="carousel-caption">
									<h2>From understanding the brain to basic chemistry</h2>
								</div>
						    </div>
						    <div class="item">
						      	<img src="<?php echo $pathToRoot; ?>assets/images/thirdSliderPicture.jpg" alt="...">
						      	<div class="carousel-caption">
									<h2>And so much more...</h2>
								</div>
						    </div>
						</div>
						 
						<a class="left carousel-control" href="#carousel-id" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-id" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<div id="bottom-content-container" class="row">
					<div class="container-fluid">
						<div class="col-lg-8 col-lg-push-2">
							<div id="ourVision" class="row bottom-content-rows" style="visibility: hidden;">
								<div class="col-lg-8 col-xs-12">
									<h2 class="title">Our vision</h2>
									<font id="ourVisionText" class="bottom-content-descriptions">
										With the recent rise in Virtual Reality and Gesture Sensors we saw our opportunity to create something that can affect students around the globe. 
										With technologies like the Oculus Rift and Leap Motion available in the market we thought up an idea which has been recently gaining traction: online collaboration. 
										We hope that in the future people can use our product and learn something new, if that happens then we have accomplished our mission.
									</font>
								</div>
								<div class="col-lg-3 col-lg-push-1 col-xs-6 col-xs-push-3" id="ourVisionHolder">
									<img src="<?php echo $pathToRoot; ?>assets/images/ourVision.png" style="width: 100%;"></img>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid even-row">
						<div class="col-lg-8 col-lg-push-2">
							<div id="whatWeDo" class="row bottom-content-rows" style="visiblity: hidden;">
								<div class="col-lg-8 col-lg-push-4 col-xs-12 col-xs-push-0">
									<h2 class="title">What we do</h2>
									<font id="whatWeDoText" class="bottom-content-descriptions">
										MotionLab is a software which allows users to interact with 3D models. 
										Our website currently lets users upload 3D models which other users can download for educational purposes. 
										These 3D models also come with tags that the user can place on the model, 
										this can help students learn about the structure of objects.
									</font>
								</div>
								<div id="modelingHolder" class="col-lg-3 col-lg-pull-8 col-lg-push-0 col-xs-6 col-xs-pull-0 col-xs-push-3">
									<img src="<?php echo $pathToRoot; ?>assets/images/3DModeling.png" style="width: 100%;"></img>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="col-lg-8 col-lg-push-2">
							<div id="whatWeUse" class="row bottom-content-rows" style="visiblity: hidden;">
								<div class="col-lg-8 col-xs-12">
									<h2 class="title">What we use</h2>
									<font id="whatWeUserText" class="bottom-content-descriptions">
										We use Oculus rift and Leap motion to interact with the 3D models inside of Unity. 
										Our application uses gestures and physics so that the user can interact with objects.
										For example, poking the object will allow the user to place a tag on a certain part of the object.
									</font>
								</div>
								<div id="oculusRiftHolder" class="col-lg-3 col-lg-push-1 col-xs-8 col-xs-push-2">
									<img src="<?php echo $pathToRoot; ?>assets/images/oculusRift.png" style="width: 100%;"></img>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid even-row">
						<div class="col-lg-10 col-lg-push-1">
							<div id="whatWeArePlanning" class="row bottom-content-rows" style="visiblity: hidden;">
								<div id="whatWeArePlanningCont" class="col-lg-6 col-lg-push-5 col-xs-12 col-xs-push-0">
									<h2 class="title">Our plans for the future</h2>
									<font id="whatWeArePlanningText" class="bottom-content-descriptions">
										We are planning to provide an affordable way for students to improve the way they learn. 
										Our product can also help experts in the field with their research or work. Finally we are also
										hoping to make our application accessible via the internet which means people will be able
										to collaborate with friends and colleagues online.
									</font>
								</div>
								<div class="col-lg-3 col-lg-pull-5 col-lg-push-0 col-xs-6 col-xs-pull-0 col-xs-push-3">
									<img src="<?php echo $pathToRoot; ?>assets/images/collaboration.png" style="width: 100%;"></img>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>
