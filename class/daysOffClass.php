<?php 
/**
 * 
 */
include_once "db.php";
class daysOff
{
	static function requestDayOff($userID,$date,$type,$reason){
		$sql="INSERT into dayOffrequests(userID,date,type,text) VALUES ($userID,'$date',$type,'$reason')";
		database::static_query($sql);
	}
	
	static function newRecord($userID){
		$sql="INSERT into daysOff(userID,daysOffLeft) VALUES ($userID,30)";
		database::static_query($sql);
	}
	static function Decrement($userID){
		$count=daysOff::daysOffLeft($userID);
		
		$sql="UPDATE `daysoff` SET `daysOffLeft`=$count-1 WHERE userID=".$userID;
		database::static_query($sql);
	}
	static function daysOffLeft($userID){
		$sql="SELECT daysOffLeft from daysOff WHERE userID=".$userID;
		$result=database::static_query($sql);
		$row=mysqli_fetch_assoc($result);
		return $row['daysOffLeft'];
		
	}
	static function showRequests(){
			$output=[];

		$sql="SELECT * FROM dayOffRequests WHERE isApproved=0 AND isDeleted=0";
		$result=database::static_query($sql);
		while($Row = mysqli_fetch_array($result)){
    			array_push($output, $Row);

    }
    return $output;
	}
	static function approve($ID){
		$sql="UPDATE `dayOffRequests` SET `isApproved`=1 WHERE ID=".$ID;
		database::static_query($sql);
		$sql="SELECT * FROM dayOffRequests WHERE ID=".$ID;
		$result=database::static_query($sql);
		$row=mysqli_fetch_assoc($result);
		daysOff::Decrement($row['userID']);

	}
	static function delete($ID){
		$sql="UPDATE `dayOffRequests` SET `isDeleted`=1 WHERE ID=".$ID;
		database::static_query($sql);
		

	}

}


 ?>