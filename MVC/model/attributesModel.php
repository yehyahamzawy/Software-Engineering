<?php 
require_once "../class/DBHelper.php";
require_once "../class/CRUDinterface.php";

class attributesModel implements CRUD
{
	public $ID;
	
	public $attributeName;
	public $type;
	public $DB ;
	public $output = array();
	public $updatedAt;
	public $Row=array();
	function __construct($ID)
	{
		
	
		$this->DB = new helper("localhost", "root", "" ,"se1");
		$this->Row=$this->DB->selectIndexedArray("*", "attribute", " ID = $ID" );
		
		
	}

    function create($dataArray)
    {
        $this->DB->insert("attribute", $dataArray);
		
	}
    
	function readAll(){
		$output = $this->DB->selectIndexedArray("*", "attribute", NULL);
		return $output;
	}
	function readAllTable(){
		$indexedArray = array();
		$innerJoinSelection = "SELECT attribute.ID, attribute.attributeName, attribute.type, attributetypes.name FROM `attribute` INNER JOIN attributetypes ON attribute.type=attributetypes.ID WHERE attribute.isDeleted=0";
		
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
        $output = $this->DB->selectIndexedArray($selection, "attribute", NULL);
    }


	function update($ID,$dataArray){
		$this->DB->update("attribute", $dataArray, $ID);
		
	}
	function delete($ID){
		$this->DB->delete("attribute", $ID);
	}

	function getTypes(){
		$output = $this->DB->selectIndexedArray("*", "attributetypes", NULL);
		return $output;
	}
}