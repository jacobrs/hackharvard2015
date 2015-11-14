<?php
	$thisPage = "home";
	$pathToRoot = "./";

	require_once($pathToRoot."scripts/common.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HackHarvard</title>
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
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 bottom-content">
						<div class="row bottom-content-rows">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
								    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								  </ol>
								 
								  <!-- Wrapper for slides -->
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
								 
								  <!-- Controls -->
								  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left"></span>
								  </a>
								  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right"></span>
								  </a>
								</div> <!-- Carousel -->
						</div>
						<div class="row bottom-content-rows">
							<div class="col-lg-7 col-xs-12">
								<h2 class="title">Our vision</h2>
								<font class="bottom-content-descriptions">
									Usu eu unum omnium, usu at fabulas nominavi appareat, movet iriure consectetuer nec ei. Melius omnium adipiscing id vix, an duo tractatos ullamcorper. An qui inani phaedrum consetetur. Sed illud corpora te, amet esse at cum, quem ullamcorper et his. Quem choro definiebas sea ut, at quando delicata elaboraret eum, cu nec fastidii deleniti sapientem.
									Et alterum utroque scriptorem sea, lobortis iudicabit scriptorem ea vis. Et modus veniam quo, tation libris delicatissimi an usu, vix cibo populo eu. Sed ex nonumy mentitum iracundia. Sea ea equidem accusam, fuisset senserit sapientem eam te. Sed ea eripuit euripidis constituto, et suas legimus voluptua eos. Graeco nominati an vim. Iracundia aliquando theophrastus cu est, percipitur reprehendunt mei eu.
								</font>
							</div>
							<div class="col-lg-5 col-xs-12">
								<img src="http://trafikaeurope.org/wp-content/uploads/2015/03/test_in_red.jpg" style="width: 100%;"></img>
							</div>
						</div>
						<div id="whatWeDo" class="row bottom-content-rows" style="visiblity: hidden;">
							<div class="col-lg-7 col-lg-push-5 col-xs-11 col-xs-push-0">
								<h2 class="title">What we do</h2>
								<font class="bottom-content-descriptions">
									Usu eu unum omnium, usu at fabulas nominavi appareat, movet iriure consectetuer nec ei. Melius omnium adipiscing id vix, an duo tractatos ullamcorper. An qui inani phaedrum consetetur. Sed illud corpora te, amet esse at cum, quem ullamcorper et his. Quem choro definiebas sea ut, at quando delicata elaboraret eum, cu nec fastidii deleniti sapientem.
									Et alterum utroque scriptorem sea, lobortis iudicabit scriptorem ea vis. Et modus veniam quo, tation libris delicatissimi an usu, vix cibo populo eu. Sed ex nonumy mentitum iracundia. Sea ea equidem accusam, fuisset senserit sapientem eam te. Sed ea eripuit euripidis constituto, et suas legimus voluptua eos. Graeco nominati an vim. Iracundia aliquando theophrastus cu est, percipitur reprehendunt mei eu.
								</font>
							</div>
							<div class="col-lg-5 col-lg-pull-7 col-xs-11 col-xs-pull-0">
								<img src="http://trafikaeurope.org/wp-content/uploads/2015/03/test_in_red.jpg" style="width: 100%;"></img>
							</div>
						</div>
						<div id="whatWeUse" class="row bottom-content-rows" style="visiblity: hidden;">
							<div class="col-lg-7 col-xs-12">
								<h2 class="title">What we use</h2>
								<font class="bottom-content-descriptions">
									Usu eu unum omnium, usu at fabulas nominavi appareat, movet iriure consectetuer nec ei. Melius omnium adipiscing id vix, an duo tractatos ullamcorper. An qui inani phaedrum consetetur. Sed illud corpora te, amet esse at cum, quem ullamcorper et his. Quem choro definiebas sea ut, at quando delicata elaboraret eum, cu nec fastidii deleniti sapientem.
									Et alterum utroque scriptorem sea, lobortis iudicabit scriptorem ea vis. Et modus veniam quo, tation libris delicatissimi an usu, vix cibo populo eu. Sed ex nonumy mentitum iracundia. Sea ea equidem accusam, fuisset senserit sapientem eam te. Sed ea eripuit euripidis constituto, et suas legimus voluptua eos. Graeco nominati an vim. Iracundia aliquando theophrastus cu est, percipitur reprehendunt mei eu.
								</font>
							</div>
							<div class="col-lg-5 col-xs-12">
								<img src="http://trafikaeurope.org/wp-content/uploads/2015/03/test_in_red.jpg" style="width: 100%;"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>
