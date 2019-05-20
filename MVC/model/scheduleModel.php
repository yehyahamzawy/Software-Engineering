<?php
require_once "../class/DBHelper.php";
require_once "../class/CRUDinterface.php";
    class scheduleModel implements CRUD
    {
        public function __construct($id)
        {
            
            $this->DB = new helper("localhost", "root", "","newdb");
            $object = $this->DB->selectIndexedArray("*", "shifts", "ID = $id" );
        }

        function create($dataArray)
    {
        $this->DB->insert("shifts", $dataArray);
		
	}
    
	function readAllTable(){
		$indexedArray = array();
		$innerJoinSelection = "SELECT permission.ID, permission.userTypeID, permission.linkID, links.friendlyName, usertype.type FROM permission INNER JOIN links ON links.ID=permission.linkID INNER JOIN usertype ON permission.userTypeID=usertype.ID WHERE permission.isDeleted = 0";
		
		//echo $innerJoinSelection;
		
		$result = $this->DB->db_query($innerJoinSelection);
    
    
    while($Row = mysqli_fetch_array($result))
    {
      array_push($indexedArray, $Row);
  
    }
    return $indexedArray;
		
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
    
    function getUserShifts($userID)
	{
		
		$shifts = $this->DB->selectIndexedArray("*", "shifts", "userID = $userID");

		return $shifts;
	}



 

    }

?>