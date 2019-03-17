
<?php 
/**
 * 
 */
include_once "db.php";

include_once "CRUDinterface.php";
class attributeType implements CRUD
{
	private $ID;
	private $Name;
	
	private $DB;
	private $output;
	
	function __construct($ID)
	{	
		$this->output=array();
		$this->DB= new database();
		$sql="SELECT * FROM attributetypes WHERE ID=".$ID;
		if($Row=$this->DB->db_query_row($sql)){
			// $Row = mysqli_fetch_array($result);
            array_push($this->output, $Row);
			$this->ID=$Row["ID"];
			$this->attributeName=$Row["name"];
		}
		
	}
	function Read(){
		// unset($this->output);
	    // echo "ID: ".$this->ID."<br>";
		
		return $this->output;	
	}
	function ReadAll(){
		$this->output=array();
		$sql="SELECT * FROM attributetypes";
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;
}
	function Update($newName){
		// $this->updatedAt=date("Y-m-d H:i:s");
		// $sql="UPDATE attribute SET attributeName='$newName',updatedAt='$this->updatedAt' WHERE ID=".$this->ID;
		// $query=$this->DB->db_query($sql);
				

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
	// function addAttributeSelect($typeID){
	// 	unset($this->output);
	// 	$this->output[]= "<select name='selectNewAttribute'>";
	// 	$sql="SELECT * FROM attribute WHERE ID NOT IN (SELECT attributeID FROM usertypeattributes WHERE usertypeID=".$typeID.") ";
	// 	$result=$this->DB->db_query($sql);
	// 	while($Row = mysqli_fetch_array($result)){
	// 		$this->output[]= "<option value=".$Row['ID'].">".$Row['attributeName']." </option>";
	// 	}
	// 	$this->output[]= "</select>";
	// 	return $this->output;
	// }

	// function removeAttributeSelect($typeID){
	// 	unset($this->output);
	// 	$this->output[]= "<select name='selectNewAttribute'>";
	// 	$sql="SELECT * FROM attribute WHERE ID  IN (SELECT attributeID FROM usertypeattributes WHERE usertypeID=".$typeID.") ";
	// 	$result=$this->DB->db_query($sql);
	// 	while($Row = mysqli_fetch_array($result)){
	// 		$this->output[]= "<option value=".$Row['ID'].">".$Row['attributeName']." </option>";
	// 	}
	// 	$this->output[]= "</select>";
	// 	return $this->output;
	// }
	function Delete($ID){
		// $this->updatedAt=date("Y-m-d H:i:s");
		// $sql="UPDATE attributetypes SET isDeleted=1,updatedAt='$this->updatedAt' WHERE ID=".$ID;
		// $this->DB->db_query($sql);

	}
}

 ?>


 