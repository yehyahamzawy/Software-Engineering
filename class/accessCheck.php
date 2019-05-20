<?php
session_start();
require_once "../class/DBHelper.php";


class accessCheck
    {
        public $DB;
        public function __construct()
        {
            $this->DB = new helper("localhost", "root", "","newdb");

        }
        function checkAccess()
        {
            $linkUserTypeID = $this->DB->selectFetchArray("userTypeID","permission","linkID = ".$_SESSION["pageID"]);
            $sessionUserTypeID = $this->DB->selectFetchArray("userTypeID","user","ID = ". $_SESSION["userID"]);

            if($linkUserTypeID["userTypeID"]!=$sessionUserTypeID["userTypeID"])
            {
                header('location:denied.php');
            }
        }
    }

?>