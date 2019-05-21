<?php 
	
	/**
	 * 
	 */
	include_once "db.php";
	include_once "CRUDinterface.php";
	class Child extends User implements CRUD
	{
		private $updatedAt;
		private $ID;
		private $DB;
		private $output;
		function __construct(){
			$this->DB= new database();
		}

		 function create($fname,$lname,$x=5){
		parent::create($fname,$lname,$x);
		
			}
		
		function Update(){
			$this->updatedAt=date("Y-m-d H:i:s");
		}
		function Read(){}
		function ReadAll(){}
		function ReadInSelect(){}
		function Delete($id){
			$this->updatedAt=date("Y-m-d H:i:s");
		}
		function getTypeAttributes($typeID){
		$this->output=array();
		$sql="SELECT attribute.attributeName as aName,uservalues.value,usertypeattributes.attributeID,user.fName,user.lName, user.ID FROM user INNER JOIN uservalues ON user.ID=uservalues.userID INNER JOIN usertypeattributes ON uservalues.userTypeOptionID=usertypeattributes.ID INNER JOIN attribute ON attribute.ID=usertypeattributes.attributeID WHERE usertypeattributes.userTypeID=".$typeID;
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;

	}
	

	}

 ?>