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

		<script>
			var thisPage = "uploads";
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