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

        function addPerm($linkID,$userTypeID)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "INSERT INTO linkconnection (userTypeID, linkID) VALUES (".$userTypeID.",".$linkID.")";
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

    }
?>