<?php 
	
	/**
	 * 
	 */
	include_once "db.php";
	include_once "CRUDinterface.php";
	class Child implements CRUD
	{
		private $updatedAt;
		private $ID;
		function __construct($id){
			# code...
		}

		function Create(){}
		function Update(){
			$this->updatedAt=date("Y-m-d H:i:s");
		}
		function Read(){}
		function ReadAll(){}
		function ReadInSelect(){}
		function Delete($id){
			$this->updatedAt=date("Y-m-d H:i:s");
		}

	}

 ?>