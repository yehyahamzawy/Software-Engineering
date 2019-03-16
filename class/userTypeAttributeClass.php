<?php 
/**
 * 
 */
include "userTypeClass.php";
include "attributeClass.php";

// include "db.php";
class userTypeAttribute
{
	private $ID;
	private $userTypeID;
	private $attributeID;
	private $userType;
	private $attribute;
	private $DB;
	function __construct($ID)
	{
		$this->DB= new database();
		$sql="SELECT * FROM usertypeattributes WHERE ID=".$ID;
		$Row=$this->DB->db_query_row($sql);
		
		$this->ID=$Row["ID"];
		$this->userTypeID=$Row["userTypeID"];
		$this->attributeID=$Row['attributeID'];
		
		
	}
	function getuserTypeID(){
		return $this->userTypeID;
	}
	function getattributeID(){
		return $this->attributeID;
	}
	
	function Read(){
		$this->userType= new userType($this->userTypeID);
		$this->userType->Read();
		$this->attribute=new attribute($this->attributeID);
		$this->attribute->Read();
	}
	function ReadSpecific($Type){
		$this->userType= new userType($Type);
		$this->userType->Read();
		$sql="SELECT * FROM userTypeAttributes WHERE isDeleted=0 AND userTypeID=".$Type;
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{

		$this->attribute=new attribute($Row['attributeID']);
		$this->attribute->Read();
	}
	function Delete($ID){
	$sql="UPDATE userTypeAttributes SET isDeleted=1 WHERE ID=".$ID;
	$result=$this->DB->db_query($sql);
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