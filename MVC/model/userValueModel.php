<?php 
require_once "../class/DBHelper.php"
require_once "../class/CRUDinterface.php"

class userValue implements CRUD
{
	public $ID;
	
	public $relationID;
	public $userID;
	public $value;
	public $DB = new helper("localhost", "root", "","newdb");
	public $output = array();
    public $updatedAt;
	function __construct($ID)
	{
		
		

		$Row=$this->DB->selectIndexedArray("*", "uservalues", "WHERE ID = $ID" )
		
		$this->ID=$Row["ID"];
		
		$this->userID=$Row['userID'];
		$this->value=$Row['value'];
		$this->relationID=$Row['userTypeOptionID'];
		
	}

    function create($dataArray)
    {
        $this->DB->insert("uservalues", $dataArray);
		
	}
    
	function readAll(){
		$output = $this->DB->selectFetchArray("*", "uservalues", NULL);
		$attribute = $this->DB->selectFetchArray("attribute", "attribute", NULL);
		$users = $this->DB->selectFetchArray("*", "users", NULL);
	}
    function readInSelect($selection)
    {
        $output = $this->DB->selectIndexedArray($selection, "uservalues", NULL);
    }


	function update($ID,$dataArray){
		$this->DB->update("uservalues", $dataArray, $ID);
		
	}
	function delete($ID){
		$this->DB->delete("uservalues", $ID)
	
}



?>