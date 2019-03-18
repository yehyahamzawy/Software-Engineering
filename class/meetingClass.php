<?php 

class meeting 
    {
        private $id;
        public $meetings  = array();
        public $attendees = array();

        public function __construct($id)
        {
            $this->id = $id;
        }
        function allMeetings()
        {
            $this->meetings = array();
            
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT * FROM meeting";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->meetings, $Row);

            
            $sql = "SELECT * FROM meetingattendees";
            $result = mysqli_query($Connection, $sql);

            while($Row = mysqli_fetch_array($result))
            array_push($this->attendees, $Row);
        }

        function createMeeting($creatorID,$title,$room,$date,$time)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "INSERT INTO meetingattendees (userID, pID) VALUES (".$creatorID.",1)";
            mysqli_query($Connection, $sql);
            $sql = "SELECT MAX(ID) from meetingattendees where userID = ".$creatorID;
            //echo $sql
            $result = mysqli_query($Connection, $sql);
            $attendees = mysqli_fetch_array($result);
            //var_dump($attendees);
            $sql = "INSERT INTO meeting (creatorID, attendeesID, title, room, date, time) VALUES (".$creatorID.",".$attendees["MAX(ID)"].",'".$title."','".$room."','".$date."','".$time."')";
            mysqli_query($Connection, $sql);
        }


        function returnUser($userID)
        {
            $Connection= new mysqli("localhost", "root", "", "olddb");
            $sql = "SELECT * FROM user where ID = ".$userID;
            //echo $sql;
            $result = mysqli_query($Connection, $sql);
            $user = mysqli_fetch_array($result);
            return $user;
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