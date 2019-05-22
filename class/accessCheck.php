<?php
session_start();
require_once "../class/DBHelper.php";


class accessCheck
    {
        public $DB;
        
        public function __construct()
        {
            $this->DB = new helper("localhost", "root", "","se1");

        }
        function checkAccess()
        {
            
            $access = 0;
            $linkUserTypeID = $this->DB->selectIndexedArray("userTypeID","permission","linkID = ".$_SESSION["pageID"]);
            $sessionUserTypeID = $this->DB->selectFetchArray("userType","user","ID = ". $_SESSION["userID"]);
           
            foreach($linkUserTypeID as $row){
            if($row["userTypeID"]==$sessionUserTypeID["userType"])
            {
                $access = 1;
            }
        }
        if($access == 0)
        {
            header("location:../pages/denied.php");
        }
        }
    }

?>