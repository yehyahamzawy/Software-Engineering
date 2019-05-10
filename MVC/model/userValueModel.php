<?php 
require_once "../class/DBHelper.php";
require_once "../class/CRUDinterface.php";

class userValueModel implements CRUD
{
	public $ID;
	
	public $relationID;
	public $userID;
	public $value;
	public $DB;
	public $output = array();
    public $updatedAt;
	function __construct($ID)
	{
		
		$this->DB = new helper("localhost", "root", "","newdb");

		$Row=$this->DB->selectIndexedArray("*", "uservalues", " ID = $ID" );
		
		
		
	}

    function create($dataArray)
    {
        $this->DB->insert("uservalues", $dataArray);
		
	}
    
	function readAll(){
		$indexedArray = array();
		$innerJoinSelection = "SELECT uservalues.ID, uservalues.userTypeAttributeID, uservalues.value, uservalues.userID, usertypeattributes.attributeID, attribute.attributeName,user.fName, user.lName FROM uservalues INNER JOIN usertypeattributes ON uservalues.userTypeAttributeID=usertypeattributes.ID INNER JOIN attribute ON usertypeattributes.attributeID=attribute.ID INNER JOIN user ON uservalues.userID=user.ID WHERE uservalues.isDeleted = 0";
		
		//echo $innerJoinSelection;
		
		$result = $this->DB->db_query($innerJoinSelection);
    
    
    while($Row = mysqli_fetch_array($result))
    {
      array_push($indexedArray, $Row);
  
    }
    return $indexedArray;
		
	}

    function readInSelect($selection)
    {
        $output = $this->DB->selectIndexedArray($selection, "uservalues", NULL);
    }

	function update($ID,$dataArray)
	{
		$this->DB->update("uservalues", $dataArray, $ID);
		
	}

	function delete($ID)
	{
		$this->DB->delete("uservalues", $ID);
	
	}

	function getAttributeName($userTypeAttributeID)
	{
		$attributeID = $this->DB->selectIndexedArray("attributeID", "usertypeattributes", "ID = $userTypeAttributeID");
		$attributeName = $this->DB->selectIndexedArray("attributeName", "attribute", "ID = ". $attributeID["attributeID"]);
		return $attributeName;
	}
	
	function getUserName($userID)
	{
		$userName = $this->DB->selectIndexedArray("fName, lName", "user", "ID = $userID");
		return $userName;
	}

	function getUserType($userTypeAttributeID)
	{
		$userTypeID = $this->DB->selectIndexedArray("userTypeID", "usertypeattributes", "ID = $userTypeAttributeID");
		$userTypeName = $this->DB->selectIndexedArray("type", "usertype", "ID = ". $userTypeID["userTypeID"] );

		return $userTypeName;
	}

 

}

?>