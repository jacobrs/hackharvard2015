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
				<h2 id="guideHeader" class="text-center">Our current features</h2>
				<div class="col-lg-8 col-lg-push-2">
					<ul id="tutorialTabs" class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#tutorialOne">General Interactions</a></li>
						<li><a data-toggle="tab" href="#tutorialTwo">Zooming</a></li>
						<li><a data-toggle="tab" href="#tutorialThree">Tagging</a></li>
						<li><a data-toggle="tab" href="#tutorialFour">Erasing</a></li>
					</ul>

					<div class="tab-content tab-content-text">
						<div id="tutorialOne" class="tab-pane fade in active">
							<p>
								MotionLab works by having the user interact with a virtual enivornment using Oculus Rift and also Leap Motion.
							 	Oculus Rift will allow you to see the 3D models that we have created for you, while on the other hand Leap motion allows you to directly 
							 	"touch" the 3D models, together they allow you to interact with objects that vary from molecules to just about anything
							 	you can think of.
							</p>
						</div>
						<div id="tutorialTwo" class="tab-pane fade">
							<p>
								MotionLab has gesture based commands which can be executed but can be quite tricky at times. Zooming working by pinching
							 	both of your fingers together and depending on if you want to zoom in then you will pull your fingers apart, the opposite
							 	is true if you want to zoom out.
							</p>
						</div>
						<div id="tutorialThree" class="tab-pane fade">
							<h4>Creating</h4>
							<p>
								Tagging is feature that can be used for marking 3D models and either used for leaving yourself or somebody else
							 	a note, this note can be about anything. For example if we had a 3D model of a human skeleton then we would
							 	use tagging to study the skeletal structure. Tagging will become more useful when you share your 3D models 
							 	with your colleagues because tags will be saved alongside the models.
							</p>
							<br>
							<h4>Cancelling</h4>
							<p>
								If the app accidentally thinks you wanted to create a tag when you did not, then simply click enter while leaving the tag
								name empty and it will stop prompting you for a tag name.
						</div>
						<div id="tutorialFour" class="tab-pane fade">
							<p>
								(<b>Note this has not been implemented yet but will be implemented soon after the hackathon</b>)
								At the moment we only give you the option to delete all your tags, further down the line you will be given the option
								to delete one at a time. To delete all of the current tags on your 3D model you must spin your index finger clockwise.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-lg-push-2">
					<p class="text-center" style="margin-top: 1em;"><small style="padding-bottom: 1em;display: inline-block;">Feel free to ask Jacob, Dylan, Darrin or Ben any questions if you are still confused with something</small></p>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>