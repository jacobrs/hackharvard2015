<?php
	class Model{
		private $name;
		private $uploadDate;
		private $link;

		function __construct($name, $postLink, $uploadDate){
			$this->name        = $name;
			$this->uploadDate  = new DateTime($uploadDate);
			$this->link        = "https://s3-us-west-2.amazonaws.com/harvardhackathon/".$postLink; 
		}

		function getName(){
			return $this->name;
		}

		function getUploadDate(){
			return $this->uploadDate->format("Y-m-d H:i:s");
		}

		function getLink(){
			return $this->link;
		}
	}
?>