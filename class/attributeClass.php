<?php 
/**
 * 
 */
include_once "db.php";

include_once "CRUDinterface.php";
class attribute implements CRUD
{
	private $ID;
	private $attributeName;
	private $attributeType;
	private $DB;
	private $output;
	private $updatedAt;
	function __construct($ID)
	{	
		$this->output=array();
		$this->DB= new database();
		$sql="SELECT * FROM attribute WHERE ID=".$ID;
		if($Row=$this->DB->db_query_row($sql)){
			// $Row = mysqli_fetch_array($result);
            array_push($this->output, $Row);
			$this->ID=$Row["ID"];
			$this->attributeName=$Row["attributeName"];
		}
		
	}
	function Create($name,$typeID){	
		$sql="INSERT INTO `attribute` ( `attributeName`, `type`) VALUES ('$name',$typeID)";
		$this->DB->db_query($sql);
		$this->attributeName=$name;
		$this->attributeType=$typeID;
		
	}
	function Read(){
		// unset($this->output);
	    // echo "ID: ".$this->ID."<br>";
		
		return $this->output;	
	}
	function ReadAll(){
		$this->output=array();
		$sql="SELECT * FROM attribute WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;
}
	function Update($id,$newName,$newTypeID){
		$this->updatedAt=date("Y-m-d H:i:s");
		$sql="UPDATE attribute SET attributeName='$newName',updatedAt='$this->updatedAt' WHERE ID=".$id;
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
		$this->updatedAt=date("Y-m-d H:i:s");
		$sql="UPDATE attribute SET isDeleted=1,updatedAt='$this->updatedAt' WHERE ID=".$ID;
		$this->DB->db_query($sql);

	}
	function ReadTypeAttributes($typeID){
		$this->output=new array();
		$sql="SELECT * FROM  attribute WHERE ID in (SELECT * FROM usertypeattributes WHERE userTypeID=".$typeID.")";
		$result=$this->DB->db_query($sql);
		while($Row=mysqli_fetch_array($result))
		array_push($this->output, $Row);
	}
}

 ?>