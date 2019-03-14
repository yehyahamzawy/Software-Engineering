<?php 
class shifts
{   

    static function showShifts()
    {
        $connect= new mysqli("localhost", "root", "", "se");
        $sql = "SELECT * FROM shifts";
        $result = mysqli_query($connect, $sql);

        while($Row = mysqli_fetch_array($result))
        {
            $sql2 = "SELECT * FROM user WHERE ID = ".$Row["userID"];
            $result2 = mysqli_query($connect, $sql2);
            $user = mysqli_fetch_array($result2);
            echo $user["firstName"]." ".$user["lastName"]." has: ".$Row["frequancy"]." ".$Row["day"]."(s) shifts, from: ".$Row["shiftStart"]." to: ".$Row["shiftEnd"]."<br>";
            
            $sql3 = "SELECT date FROM day WHERE ID = ".$Row["dayCellID"];
            $result3 = mysqli_query($connect, $sql3);
            $day = mysqli_fetch_array($result3);
            echo $user["firstName"]." ".$user["lastName"]." started working in: ".$day["date"];
        }

    }

    static function addForm()
    {
        $connect= new mysqli("localhost", "root", "", "se");

    }

}



?>