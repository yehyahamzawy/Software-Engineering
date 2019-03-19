<?php 
/**
 * 
 */
include_once "userTypeClass.php";
include_once "attributeClass.php";
include_once "CRUDinterface.php";

// include "db.php";
class userTypeAttribute implements CRUD
{
	private $ID;
	private $userTypeID;
	private $attributeID;
	private $userType;
	private $attribute;
	private $DB;		
	private $output;
	function __construct($ID)
	{	$this->output=array();
		$this->DB= new database();
		$sql="SELECT * FROM usertypeattributes WHERE ID=".$ID;
		$Row=$this->DB->db_query_row($sql);
		array_push($this->output, $Row);
		$this->ID=$Row["ID"];
		$this->userTypeID=$Row["userTypeID"];
		$this->attributeID=$Row['attributeID'];
		
		
	}
	function Create($typeid,$attid){
		$sql="INSERT INTO `usertypeattributes` (`userTypeID`,`attributeID`) VALUES ($typeid,$attid)";
		$this->DB->db_query($sql);

	}
	function getuserTypeID(){
		return $this->userTypeID;
	}
	function getattributeID(){
		return $this->attributeID;
	}
	function getattributeName(){
		$this->output=array();
		$this->attribute=new attribute($this->attributeID);
		$x=$this->attribute->Read();
			foreach ($x as $key ) {
					array_push($this->output, $key);
			}
			return $this->output;
	}
	
	function Read(){
		$this->userType= new userType($this->userTypeID);
		$x=$this->userType->Read();
			foreach ($x as $key ) {
					echo $key['type'];
			}
		$this->attribute=new attribute($this->attributeID);
		$x=$this->attribute->Read();
			foreach ($x as $key ) {
					echo $key['attributeName'];
			}
	}
	function ReadInSelect(){}
	function Delete($id){
	$sql="UPDATE `usertypeattributes` SET isDeleted=1 WHERE ID=".$id;

	$result=$this->DB->db_query($sql);
	// return $result;
}
	// function Delete($id){
	// 	$this->updatedAt=date("Y-m-d H:i:s");}
	function ReadAll(){}
	function Update(){
		$this->updatedAt=date("Y-m-d H:i:s");
	}
		function ReadSpecific($Type){

		$this->userType= new userType($Type);
		$x=$this->userType->Read();
		foreach ($x as $key ) {
			# code...
			echo $key['type'];
		}
		$sql="SELECT * FROM userTypeAttributes WHERE isDeleted=0 AND userTypeID=".$Type;
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{

		$this->attribute=new attribute($Row['attributeID']);
		$x=$this->attribute->Read();
		foreach ($x as $key ) {
			# code...
			echo $key['attributeName'];
		}
	}
	

	
	}
// 	function ReadAll(){
// 		$sql="SELECT * FROM userType";
// 		$result=$this->DB->db_query($sql);
// 		echo "<table>";
// 		while($Row = mysqli_fetch_array($result))
// 	{
// 		$this->userType= new userType($Row["ID"]);
// 		$this->userType->Read();
// 		echo "<tr>";

// 		echo "<td>ID: ".$Row["ID"]."</td>";
// 		echo "<td>Type: ".$Row["type"]."</td>";
// 		echo "</tr>";

// 	}
// 	echo "</table>";
// }
// 	function Update($newType){
// 		$sql="UPDATE usertype SET Type='$newType' WHERE ID=".$this->ID;
// 		$query=$this->DB->db_query($sql);
				

// 	}
}

 ?>