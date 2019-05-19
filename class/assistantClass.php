<?php 
// include "userClass.php";
include_once "missionMember.php";
include_once 'userClass.php';
/**
 * 
 */
class assistant extends User implements iMissionMember
{
	
	 function __construct($ID){
		parent::__construct($ID);
	}

	 function create($fname,$lname,$x=2){
		parent::create($fname,$lname,$x);
	}
	// function updateMission(Mission $event){
	// 	echo $event->getName();

	// }	
}
 ?>