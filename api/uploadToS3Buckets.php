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

	if ($_FILES['upfile']['size'] > 1000000) {
        $return['error'] = "Exceeded filesize limit";
    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search($finfo->file($_FILES['upfile']['tmp_name']), array(
			'obj' => 'text/plain'), true)) {
        $return['error'] = 'Invalid file format';
    }

    if(!isset($return['error'])){
		// Instantiate the S3 client with your AWS credentials
		$S3Client = S3Client::factory(array(
		    'credentials' => array(
		        'key'    => 'AKIAIO46DECE4HEKKDIQ',
		        'secret' => 'zf3UESxNffNQgJPGyNkw7uhR0YbHFSTBH1d77X0l',
		    )
		));

		$return['success'] = "Successfully pushed to S3Bucket";
    }

	echo json_encode($return);
	exit;
?>
?>