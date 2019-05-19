<?php 
include_once "missionMember.php";
include_once 'userClass.php';

class Driver extends User implements iMissionMember{
	function __construct($ID){
		parent::__construct($ID);
	}

	 function create($fname,$lname,$x=1){
		parent::create($fname,$lname,$x);
		// echo "x";
	}
	// function getfName(){
	// 	return parent::getfName();
	// }
	
	// function updateMission(Mission $event){
	// 	// echo $event->getName();
	// }
}


  ?>