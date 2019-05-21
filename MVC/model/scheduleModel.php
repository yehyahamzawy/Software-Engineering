<?php
require_once "../class/DBHelper.php";
require_once "../class/CRUDinterface.php";
    class scheduleModel implements CRUD
    {
        public function __construct()
        {
            
            $this->DB = new helper("localhost", "root", "","newdb");
            
        }

        function create($dataArray)
    {
        $this->DB->insert("shifts", $dataArray);
		
	}
    
	function readAllTable()
	{
		
	}

	function readAll()
	{

	}
	
	

	

    function readInSelect($selection)
    {
        $output = $this->DB->selectIndexedArray($selection, "shifts", NULL);
    }

	function update($ID,$dataArray)
	{
		$this->DB->update("shifts", $dataArray, $ID);
		
	}

	function delete($ID)
	{
		$this->DB->delete("shifts", $ID);
	
	}

	function getDays()
	{
		
		$days = $this->DB->selectIndexedArray("*", "days", NULL);
		return $days;
	}
	
	

	function getUser($ID)
	{
		
		$user = $this->DB->selectFetchArray("*", "user", "ID = $ID");

		return $user;
	}
	
    function getUsers()
    {
        return $this->DB->selectIndexedArray("*", "user", NULL);
	}
	
    function getUserShifts($userID)
	{
		
		$shifts = $this->DB->selectIndexedArray("*", "shifts", "userID = $userID");

		return $shifts;
	}



 

    }

?>