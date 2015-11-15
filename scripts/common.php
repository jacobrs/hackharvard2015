<?php
	/* Requires you to autoload aws sdk if you use aws functions */

	function getUploadedModels($client){
		$return = array();

		try{
			$result = $client->listObjects([
			    'Bucket' => 'harvardhackathon'
			]);
		}catch(Exception $e){
			return array();
		}

		foreach($result as $object){
			foreach($object as $childObject){
				if(substr($childObject['Key'], - 1) != "/"){
					$file = explode("/", $childObject['Key']);
					$file = $file[count($file) - 1];
					$return[] = new Model($file, $childObject['Key'], $childObject['LastModified']);
				}
			}
		}

		return $return;
	}
?>