<?php 
	$thisPage = "uploads";
	$pathToRoot = "./";
	require_once($pathToRoot."aws/vendor/autoload.php");

	// Add to S3Bucket
    use Aws\S3\S3Client;

    require_once($pathToRoot."classes/Model.php");
	require_once($pathToRoot."scripts/common.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MotionLab</title>
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
									// Instantiate the S3 client with your AWS credentials
									$S3Client = S3Client::factory(array(
									    'credentials' => array(
									        'key'    => 'AKIAIO46DECE4HEKKDIQ',
									        'secret' => 'zf3UESxNffNQgJPGyNkw7uhR0YbHFSTBH1d77X0l',
									    )
									));

									$models = getUploadedModels($S3Client);

									if(count($models) <= 0){
								?>
									<td>No information available</td>
									<td>No information available</td>
								<?php
									}else{
										foreach($models as $model){
								?>
											<td><a href="<?php echo $model->getLink(); ?>"><?php echo $model->getName(); ?></a></td>
											<td><?php echo $model->getUploadDate(); ?></td>				
								<?php
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