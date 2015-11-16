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
										<h2 class="title team-member-title">Darrin Fong</h2><a class="team-member-linkedin" href="https://ca.linkedin.com/in/darrinfong"><i class="fa fa-linkedin-square"></i></a>
										<font class="bottom-content-descriptions">
											I have always been into DIY projects since it's always satisfying to realize you created something. 
											I got into coding when I realize I can create something without even paying for the material...
											I was actually inspired by one of my friend during high school when he got over fifty thousand downloads from Google Play Store with one of his app. 
											My dream is to have my own company... so I can stay home and read dank memes.
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
										<h2 class="title team-member-title">Benjamin-Marco Barault</h2><a class="team-member-linkedin" href="https://www.linkedin.com/in/benjaminbarault"><i class="fa fa-linkedin-square "></i></a>
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
										<h2 class="title team-member-title">Jacob Gagne</h2><a class="team-member-linkedin" href="https://ca.linkedin.com/in/jacob-gagne-b2609247"><i class="fa fa-linkedin-square "></i></a>
										<font class="bottom-content-descriptions">
											I am a 
											<?php 
												$birthday = new DateTime("1995-05-18");
												$birthdayTime = strtotime($birthday->format("Y"));
												$nowTime      = strtotime((new DateTime())->format("Y"));
												echo floor((($nowTime-$birthdayTime)/(60*60*24*365)));
											?> 
											year old programmer from Montreal, Quebec that has about 5 years of experience in the field. I am currently studying at Concordia University in Software Engineering and 
											I am enjoying it. At the moment I am working on several personal projects, one of them which will be released soon is a company that I co-own. My goal in life: going to 
											space.
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
										<h2 class="title team-member-title">Dylan Fernandes</h2><a class="team-member-linkedin" href="https://ca.linkedin.com/in/dylan-fernandes-a608a6b1"><i class="fa fa-linkedin-square"></i></a>
										<font class="bottom-content-descriptions">
											I am a 
											<?php 
												$birthday = new DateTime("1995-05-10");
												$birthdayTime = strtotime($birthday->format("Y"));
												$nowTime      = strtotime((new DateTime())->format("Y"));
												echo floor((($nowTime-$birthdayTime)/(60*60*24*365)));
											?> 
											year old programmer that was born in Montreal. I first encountered programming while studying Computer Science in CEGEP. 
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