<?php
	class Model{
		private $name;
		private $uploadDate;
		private $link;

		function __construct(){

		}

		function getName(){
			return $this->name;
		}

		function getUploadDate(){
			return $this->uploadDate;
		}

		function getLink(){
			return $this->link;
		}
	}
?>