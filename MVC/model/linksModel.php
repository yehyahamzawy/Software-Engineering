<?php
require_once "../class/DBHelper.php";
require_once "../class/CRUDinterface.php";
    class linksModel implements CRUD
    {
        public function __construct($id)
        {
            
            $this->DB = new helper("localhost", "root", "","newdb");
            $object = $this->DB->selectIndexedArray("*", "links", "ID = $id" );
        }

        function create($dataArray)
    {
        $this->DB->insert("links", $dataArray);
		
	}
    
	function readAllTable(){
		
        return $this->DB->selectIndexedArray("*", "links", NULL);

		
	}

	function readAll()
	{

	}
	
	

	

    function readInSelect($selection)
    {
        $output = $this->DB->selectIndexedArray($selection, "links", NULL);
    }

	function update($ID,$dataArray)
	{
		$this->DB->update("links", $dataArray, $ID);
		
	}

	function delete($ID)
	{
		$this->DB->delete("links", $ID);
	
	}



 

    }

?>