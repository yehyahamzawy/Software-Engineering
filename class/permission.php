<?php
    class permission 
    {
        private $id;
        public $linkconnection  = array();
        public $link = array();

        public function __construct($id)
        {
            $this->id = $id;
        }
        function allData()
        {
            $this->link = array();
            $this->linkconnection = array();
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT * FROM links";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->link, $Row);

            $sql = "SELECT * FROM linkconnection";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->linkconnection, $Row);
        }

        function addPerm($userTypeID, $linkID)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "INSERT INTO linkconnection (userTypeID, linkID) VALUES (".$userTypeID.",".$linkID.")";
            mysqli_query($Connection, $sql);
        }

        function returnUserTypeID($type)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT ID FROM usertype where type = '".$type."'";
            //echo $sql;
            $result = mysqli_query($Connection, $sql);
            $typeID = mysqli_fetch_array($result);
            return $typeID["ID"];
        }

        function returnLinkID($link)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT ID FROM links where link = '".$link."'";
            //echo $sql;
            $result = mysqli_query($Connection, $sql);
            $linkID = mysqli_fetch_array($result);
            return $linkID["ID"];
        }

        function delPerm($connectionID)
        {   
            
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