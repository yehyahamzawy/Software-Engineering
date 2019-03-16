<?php 
/**
 * 
 */
include "db.php";
class attribute
{
	private $ID;
	private $attributeName;
	private $attributeType;
	private $DB;
	private $output;
	function __construct($ID)
	{
		$this->DB= new database();
		$sql="SELECT * FROM attribute WHERE ID=".$ID;
		$Row=$this->DB->db_query_row($sql);
		
		$this->ID=$Row["ID"];
		$this->attributeName=$Row["attributeName"];
		
		
	}
	function Read(){
		unset($this->output);
	    // echo "ID: ".$this->ID."<br>";
		$this->output[]= "Attribute: ".$this->attributeName."<br>";
		return $this->output;	
	}
	function ReadAll(){
		unset($this->output);
		$sql="SELECT * FROM attribute";
		$result=$this->DB->db_query($sql);
		$this->output[]= "<table>";
		while($Row = mysqli_fetch_array($result))
	{
		$this->output[]= "<tr>";
		$this->output[]= "<td>ID: ".$Row["ID"]."</td>";
		$this->output[]= "<td>Type: ".$Row["attributeName"]."</td>";
		$this->output[]= "</tr>";

	}
	$this->output[]= "</table>";
	return $this->output;
}
	function Update($newName){
		$sql="UPDATE attribute SET attributeName='$newName' WHERE ID=".$this->ID;
		$query=$this->DB->db_query($sql);
				

	}

	function readInSelect(){
		unset($this->output);
		$this->output[]= "<select name='selectAttribute'>";
		$sql="SELECT * FROM attribute WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result)){
			$this->output[]= "<option value=".$Row['ID'].">".$Row['attributeName']." </option>";
		}
		$this->output[]= "</select>";
		return $this->output;
	}
	function addAttributeSelect($typeID){
		unset($this->output);
		$this->output[]= "<select name='selectNewAttribute'>";
		$sql="SELECT * FROM attribute WHERE ID NOT IN (SELECT attributeID FROM usertypeattributes WHERE usertypeID=".$typeID.") ";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result)){
			$this->output[]= "<option value=".$Row['ID'].">".$Row['attributeName']." </option>";
		}
		$this->output[]= "</select>";
		return $this->output;
	}

	function removeAttributeSelect($typeID){
		unset($this->output);
		$this->output[]= "<select name='selectNewAttribute'>";
		$sql="SELECT * FROM attribute WHERE ID  IN (SELECT attributeID FROM usertypeattributes WHERE usertypeID=".$typeID.") ";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result)){
			$this->output[]= "<option value=".$Row['ID'].">".$Row['attributeName']." </option>";
		}
		$this->output[]= "</select>";
		return $this->output;
	}
	function Delete($ID){
		$sql="UPDATE attribute SET isDeleted=1 WHERE ID=".$ID;
		$this->DB->db_query($sql);

	}
}

 ?>