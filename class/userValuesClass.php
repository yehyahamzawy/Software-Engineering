
<?php 
/**
 * 
 */
class userValue
{
	private $ID;
	private $attributeID;
	private $relationID;
	private $userID;
	private $value;
	private $DB;
	private $output;
	function __construct($ID)
	{
		$this->DB= new database();
		$sql="SELECT * FROM uservalues WHERE ID=".$ID;

		$Row=$this->DB->db_query_row($sql);
		
		$this->ID=$Row["ID"];
		$this->attributeID=$Row["attributeID"];
		$this->userID=$Row['userID'];
		$this->value=$Row['value'];
		$this->relationID=$Row['userTypeOptionID'];
		
	}

	function Create($attributeID,$userID,$value,$relationID){
		$sql="INSERT INTO `uservalues`( `attributeID`,`userID`, `value`,`userTypeOptionID`) VALUES ('$attributeID','$userID','$value','$relationID') ";
		$this->DB->db_query($sql);
	}
	function Delete($ID){
	$sql="UPDATE uservalues SET isDeleted=1 WHERE ID=".$ID;
	$result=$this->DB->db_query($sql);
}

// 	function Read(){
// 		// echo "ID: ".$this->ID."<br>";
// 		echo "Type: ".$this->."<br>";	
// 	}
// 	function ReadAll(){
// 		$sql="SELECT * FROM userType";
// 		$result=$this->DB->db_query($sql);
// 		echo "<table>";
// 		while($Row = mysqli_fetch_array($result))
// 	{
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
// 	function readInSelect(){
// 		echo "<select name='selectType'>";
// 		$sql="SELECT * FROM usertype";
// 		$result=$this->DB->db_query($sql);
// 		while($Row = mysqli_fetch_array($result)){
// 			echo "<option value=".$Row['ID'].">".$Row['type']." </option>";
// 		}
// 		echo "</select>";
// 	}
}

 

 ?>