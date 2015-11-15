<?php
	$thisPage = "team";
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
			var thisPage = "team";
		</script>
		<?php 
			require_once($pathToRoot."templates/basic_html_imports.php");
		?>
	</head>
	<body>
		<?php require_once($pathToRoot."templates/nav_bar.php"); ?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div id="team-photo-holder" class="row">
						<div class="col-lg-6 col-lg-offset-3">
							<h1 class="title text-center" style="margin-top: 0.5em;margin-bottom: 1em;">The Team</h1>
							<img src="<?php echo $pathToRoot; ?>assets/images/teamRaidMotion.jpg" style="width: 100%; padding-bottom: 2em;">
						</div>
					</div>
					<hr>
					<div id="teamContentHolder" class="container-fluid">
						<h2 class="title text-center members-title">The Members</h2>
						<div class="container-fluid">
							<div class="col-lg-10 col-lg-push-1 memberHolder">
								<div id="darrinFong" class="row bottom-content-rows" style="visibility: hidden;">
									<div class="col-lg-7 col-lg-push-5 col-xs-12 col-xs-push-0">
										<h2 class="title">Darrin Fong</h2>
										<font class="bottom-content-descriptions">
											Usu eu unum omnium, usu at fabulas nominavi appareat, movet iriure consectetuer nec ei. Melius omnium adipiscing id vix, an duo tractatos ullamcorper. An qui inani phaedrum consetetur. Sed illud corpora te, amet esse at cum, quem ullamcorper et his. Quem choro definiebas sea ut, at quando delicata elaboraret eum, cu nec fastidii deleniti sapientem.
											Et alterum utroque scriptorem sea, lobortis iudicabit scriptorem ea vis. Et modus veniam quo, tation libris delicatissimi an usu, vix cibo populo eu. Sed ex nonumy mentitum iracundia. Sea ea equidem accusam, fuisset senserit sapientem eam te. Sed ea eripuit euripidis constituto, et suas legimus voluptua eos. Graeco nominati an vim. Iracundia aliquando theophrastus cu est, percipitur reprehendunt mei eu.
										</font>
									</div>
									<div class="col-lg-4 col-lg-pull-7 col-xs-12 col-xs-pull-0">
										<img src="<?php echo $pathToRoot; ?>assets/images/darrinFong.jpg" style="width: 100%;"></img>
									</div>
								</div>
							</div>
						</div>
						<div class="container-fluid even-row">
							<div class="col-lg-10 col-lg-push-1 memberHolder">
								<div id="benjaminBarault" class="row bottom-content-rows" style="visibility: hidden;">
									<div class="col-lg-7 col-xs-12">
										<h2 class="title">Benjamin-Marco Barault</h2>
										<font class="bottom-content-descriptions">
											I am a 
											<?php 
												$birthday = new DateTime("1994-09-26");
												$birthdayTime = strtotime($birthday->format("Y"));
												$nowTime      = strtotime((new DateTime())->format("Y"));
												echo floor((($nowTime-$birthdayTime)/(60*60*24*365)));
											?> 
											year old programmer who has been programming for approximately 4 years now. 
											Within these 4 years I worked on my most proud achievement which has yet to be released. 
											It's an app that I have been working on with my friends for the past 2 years. 
											My short term goals include passing all my University courses and getting a Masters degree in Software Engineering. 
											Finally I will leave you with one of my favorite quotes "Jack of all trades, master of none, though oftentimes better than the master of one".
										</font>
									</div>
									<div class="col-lg-4 col-lg-push-1 col-xs-12">
										<img src="<?php echo $pathToRoot; ?>assets/images/benjaminBarault.jpg" style="width: 100%;"></img>
									</div>
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="col-lg-10 col-lg-push-1 memberHolder">
								<div id="jacobGagne" class="row bottom-content-rows" style="visibility: hidden;">
									<div class="col-lg-7 col-lg-push-5 col-xs-12 col-xs-push-0">
										<h2 class="title">Jacob Gagne</h2>
										<font class="bottom-content-descriptions">
											Usu eu unum omnium, usu at fabulas nominavi appareat, movet iriure consectetuer nec ei. Melius omnium adipiscing id vix, an duo tractatos ullamcorper. An qui inani phaedrum consetetur. Sed illud corpora te, amet esse at cum, quem ullamcorper et his. Quem choro definiebas sea ut, at quando delicata elaboraret eum, cu nec fastidii deleniti sapientem.
											Et alterum utroque scriptorem sea, lobortis iudicabit scriptorem ea vis. Et modus veniam quo, tation libris delicatissimi an usu, vix cibo populo eu. Sed ex nonumy mentitum iracundia. Sea ea equidem accusam, fuisset senserit sapientem eam te. Sed ea eripuit euripidis constituto, et suas legimus voluptua eos. Graeco nominati an vim. Iracundia aliquando theophrastus cu est, percipitur reprehendunt mei eu.
										</font>
									</div>
									<div class="col-lg-4 col-lg-pull-7 col-xs-12 col-xs-pull-0">
										<img src="<?php echo $pathToRoot; ?>assets/images/jacobGagne.jpg" style="width: 100%;"></img>
									</div>
								</div>
							</div>
						</div>
						<div class="container-fluid even-row">
							<div class="col-lg-10 col-lg-push-1 memberHolder">
								<div id="dylanFernandes" class="row bottom-content-rows" style="visibility: hidden;">
									<div class="col-lg-7 col-xs-12">
										<h2 class="title">Dylan Fernandes</h2>
										<font class="bottom-content-descriptions">
											I am a 
											<?php 
												$birthday = new DateTime("1995-05-10");
												$birthdayTime = strtotime($birthday->format("Y"));
												$nowTime      = strtotime((new DateTime())->format("Y"));
												echo floor((($nowTime-$birthdayTime)/(60*60*24*365)));
											?> 
											programmer that was born in Montreal. I first encountered programming while studying Computer Science in CEGEP. 
											The endless possibilities that were available in this field greatly arose my interest in it. My greatest achievement to
											this day is graduating from John Abbott College in Computer Science. I am currently studying Software Engineering
											at Concordia University and I am looking forward to discover more about this field.
										</font>
									</div>
									<div class="col-lg-4 col-lg-push-1 col-xs-12">
										<img src="<?php echo $pathToRoot; ?>assets/images/dylanFernandes.jpg" style="width: 100%;"></img>
									</div>
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