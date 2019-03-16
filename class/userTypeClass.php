<?php 
/**
 * 
 */
class userType 
{
	private $ID;
	private $typeName;
	private $DB;
	private $output;
	function __construct($ID)
	{
		$this->DB= new database();
		$sql="SELECT * FROM userType WHERE ID=".$ID;

		$Row=$this->DB->db_query_row($sql);
		
		$this->ID=$Row["ID"];
		$this->typeName=$Row["type"];
		
		
	}
	function Read(){
		unset($this->output);
		// echo "ID: ".$this->ID."<br>";
		$this->output[]= "Type: ".$this->typeName."<br>";	
		return $this->output;
	}
	function ReadAll(){
		unset($this->output);
		$sql="SELECT * FROM userType WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		$this->output[]= "<table>";
		while($Row = mysqli_fetch_array($result))
	{
		$this->output[]= "<tr>";
		$this->output[]= "<td>ID: ".$Row["ID"]."</td>";
		$this->output[]= "<td>Type: ".$Row["type"]."</td>";
		$this->output[]= "</tr>";

	}
	$this->output[]= "</table>";
	return $this->output;
}
	function Update($newType){
		$sql="UPDATE usertype SET Type='$newType' WHERE ID=".$this->ID;
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
	$sql="UPDATE usertype SET isDeleted=1 WHERE ID=".$ID;
	$result=$this->DB->db_query($sql);
}

}

 ?>