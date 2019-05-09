<?php 
require_once "../../class/DBHelper.php";
require_once "../../class/CRUDinterface.php";

class attributes implements CRUD
{
	public $ID;
	
	public $attributeName;
	public $type;
	public $DB ;
	public $output = array();
	public $updatedAt;
	public $Row;
	function __construct($ID)
	{
		
	
		$this->DB = new helper("localhost", "root", "","newdb");
		$Row=$this->DB->selectIndexedArray("*", "attribute", "WHERE ID = $ID" );
		$this->Row=$Row;
		$this->ID=$Row["ID"];
		$this->attributename=$Row['attributename'];
		$this->type=$Row['type'];
		
	}

    function create($dataArray)
    {
        $this->DB->insert("attribute", $dataArray);
		
	}
    
	function readAll(){
		$output = $this->DB->selectFetchArray("*", "attribute", NULL);
	}
    function readInSelect($selection)
    {
        $output = $this->DB->selectIndexedArray($selection, "attribute", NULL);
    }


	function update($ID,$dataArray){
		$this->DB->update("attribute", $dataArray, $ID);
		
	}
	function delete($ID){
		$this->DB->delete("attribute", $ID);
	}
}