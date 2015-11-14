<?php 
	$thisPage = "uploads";
	$pathToRoot = "./";

	require_once($pathToRoot."scripts/common.php");
?>
<!DOCTYPE html>
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
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 bottom-content">
						<h2 class="text-center" style="margin-bottom: 1em;">Currently available models</h2>
						<table class="table table-bordered table-striped upload-table">
							<thead>
								<tr>
									<th>File Name</th>
									<th>Upload Date</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$models = getUploadedModels();

									if(count($models) <= 0){
								?>
									<td>No information available</td>
									<td>No information available</td>
								<?php
									}else{
										$i = 0;
										foreach($models as $model){
											if($i >= 10){
												break;
											}
								?>
												<td><a href="<?php echo $model->getLink(); ?>"><?php echo $model->getName(); ?></a></td>
												<td><?php echo $modal->getUploadDate(); ?></td>
								<?php
											$i++;
										}
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php require_once($pathToRoot."templates/footer.php"); ?>
	</body>
</html>