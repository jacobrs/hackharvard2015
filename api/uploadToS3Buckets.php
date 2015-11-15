<?php
	$pathToRoot = "../";
	require_once($pathToRoot."aws/vendor/autoload.php");

	// Add to S3Bucket
    use Aws\S3\S3Client;
	
	$return = array();

	if(!isset($_FILES['upfile']['error']) || is_array($_FILES['upfile']['error'])){
		$return['error'] = "Invalid parameters";
	}

	switch($_FILES['upfile']['error']){
		case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            $return['error'] = "No file sent";
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $return['error'] = "Exceeded filesize limit";
        default:
            $return['error'] = "Unknown errors";
	}

	if ($_FILES['upfile']['size'] > 40000000) {
		var_dump($_FILES['upfile']['size']);
        $return['error'] = "Exceeded filesize limit";
    }

    if(!isset($return['error'])){
		try{
			// Instantiate the S3 client with your AWS credentials
			$S3Client = S3Client::factory(array(
			    'credentials' => array(
			        'key'    => 'AKIAIO46DECE4HEKKDIQ',
			        'secret' => 'zf3UESxNffNQgJPGyNkw7uhR0YbHFSTBH1d77X0l',
			    )
			));

			$S3Client->putObject([
			    'Bucket' => 'harvardhackathon',
				'Key' => "3DModels/{$_FILES['upfile']['name']}",
				'Body' => fopen($_FILES['upfile']["tmp_name"], 'rb'),
				'ACL' => 'public-read',
			]);
		}catch(Exception $e){
			$return['error'] = $e->getMessage();
			echo json_encode($return);
			exit;
		}

		$return['success'] = "Successfully pushed to S3Bucket";
    }

	echo json_encode($return);
	exit;
?>
?>