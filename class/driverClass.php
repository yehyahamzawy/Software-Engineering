<?php 
include_once "missionMember.php";
class Driver extends User implements iMissionMember{

	 function create($fname,$lname,$x=1){
		parent::create($fname,$lname,$x);
		// echo "x";
	}
	
	function updateMission(Mission $event){
		echo $event->getName();
	}
}


  ?>