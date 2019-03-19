<?php 
/**
 * 
 */
include_once 'db.php';
include_once "CRUDinterface.php";
class userType implements CRUD
{
	private $ID;
	private $typeName;
	private $DB;
	private $output;
	private $updatedAt;

	function __construct($ID)
	{	$this->output=array();
		$this->DB= new database();
		$sql="SELECT * FROM userType WHERE ID=".$ID;

		$Row=$this->DB->db_query_row($sql);
		array_push($this->output, $Row);
		$this->ID=$Row["ID"];
		$this->typeName=$Row["type"];
		
		
	}
	function Read(){
		// unset($this->output);
		// // echo "ID: ".$this->ID."<br>";
		// $this->output[]= "Type: ".$this->typeName."<br>";	
		return $this->output;
	}
	function ReadAll(){
		$this->output=array();

		$sql="SELECT * FROM userType WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;
}
	function Update($newType){
		$this->updatedAt=date("Y-m-d H:i:s");
		$sql="UPDATE usertype SET Type='$newType',updatedAt='$this->updatedAt' WHERE ID=".$this->ID;
		$query=$this->DB->db_query($sql);
				

	}
	function readInSelect(){
		unset($this->output);
		$this->output[]= "<select name='selectType'>";
		$sql="SELECT * FROM usertype WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result)){
			$this->output[]= "<option value=".$Row['ID'].">".$Row['type']." </option>";
		}
		$this->output[]= "</select>";
		return $this->output;
	}
	function Delete($ID){
		$this->updatedAt=date("Y-m-d H:i:s");
	$sql="UPDATE usertype SET isDeleted=1,updatedAt='$this->updatedAt' WHERE ID=".$ID;
	$result=$this->DB->db_query($sql);
}

}

 ?>