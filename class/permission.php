<?php
require_once "DBHelper.php";
    class permission 
    {
        private $id;
        public $linkconnection  = array();
        public $link = array();
        public $userTypes = array();
        public $DB;

        public function __construct($id)
        {
            
            $this->DB = new helper("localhost", "root", "","newdb");
            $Row=$this->DB->selectIndexedArray("*", "uservalues", " ID = $ID" );
        }
        function allData()
        {
            $this->link = array();
            $this->linkconnection = array();
            $this->userTypes = array();
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT * FROM links";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->link, $Row);

            $sql = "SELECT * FROM linkconnection";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->linkconnection, $Row);

            $sql = "SELECT * FROM usertype";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->userTypes, $Row);
        }

        function addPerm($userTypeID, $linkID)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "INSERT INTO linkconnection (userTypeID, linkID) VALUES (".$userTypeID.",".$linkID.")";
            mysqli_query($Connection, $sql);
        }

        function returnUserType($id)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT type FROM usertype where ID = '".$id."'";
            //echo $sql;
            $result = mysqli_query($Connection, $sql);
            $typeID = mysqli_fetch_array($result);
            return $typeID["type"];
        }

        function returnLink($id)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT link FROM links where ID = '".$id."'";
            //echo $sql;
            $result = mysqli_query($Connection, $sql);
            $linkID = mysqli_fetch_array($result);
            return $linkID["link"];
        }

        function delPerm($connectionID)
        {   
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "DELETE FROM linkconnection WHERE ID = ".$connectionID;
            mysqli_query($Connection, $sql);
        }

        function editPerm($connectionID, $userTypeID, $linkID )
        {   $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "UPDATE linkconnection SET userTypeID = ".$userTypeID.", `linkID` = ".$linkID." WHERE ID = ".$connectionID;
            mysqli_query($Connection, $sql);
        }

    }
?>