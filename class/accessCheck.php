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
            $linkUserTypeID = $this->DB->selectFetchArray("userTypeID","permission","linkID = ".$_SESSION["pageID"]);
            $sessionUserTypeID = $this->DB->selectFetchArray("userType","user","ID = ". $_SESSION["userID"]);
            
            if($linkUserTypeID["userTypeID"]!=$sessionUserTypeID["userType"])
            {
                header('location:denied.php');
            }
        }
    }

?>