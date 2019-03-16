<?php
    class permission 
    {
        private $id;
        public $linkconnection;
        public $link = array();

        public function __construct($id)
        {
            $this->id = $id;
        }
        function allData()
        {
            $Connection= new mysqli("localhost", "root", "", "se");
            $sql = "SELECT * FROM links";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->link, $Row);
            
            
      
        }
    }
?>