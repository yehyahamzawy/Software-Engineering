
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
		$result=$this->DB->db_query($sql);
		if($Row=mysqli_fetch_array($result)){
			// $Row = mysqli_fetch_array($result);
            array_push($this->output, $Row);
			$this->ID=$Row["ID"];
			$this->Name=$Row["name"];
		}
		
	}
	function create($dataArray){

		
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
	function Update($ID,$newName){
		// $this->updatedAt=date("Y-m-d H:i:s");
		// $sql="UPDATE attribute SET attributeName='$newName',updatedAt='$this->updatedAt' WHERE ID=".$this->ID;
		// $query=$this->DB->db_query($sql);
				

	}
	function showSelect($id,$att){

		$sql="SELECT uservalues.value as value, usertypeattributes.attributeID FROM userValues INNER JOIN usertypeattributes ON usertypeattributes.ID=uservalues.userTypeOptionID WHERE usertypeattributes.attributeID=".$att;
		$result=$this->DB-db_query($sql);
		echo "<select id=".$id.">";
		while ($row=mysqli_fetch_array($result)) {
			echo "<option value=".$row['value'].">".$row['value']."</option>";
		}
		echo "</select>";
	}

	function showInput($type,$id,$attID){
		// unsert($this->output);
		if($type==1)
			echo "<input type='email' name=".$id.">";
		elseif($type==2)
			echo "<input type='text' name=".$id.">";
		elseif($type==3)
			echo "<input type='number' name=".$id.">";
		elseif($type==4)
			showSelect($id,$attID);
		elseif($type==5)
			echo  "Male Female";

		// return $this->output;

	}

	function readInSelect($selection){
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


 