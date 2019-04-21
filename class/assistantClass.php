<?php 
// include "userClass.php";
include_once "missionMember.php";
/**
 * 
 */
class assistant extends User implements iMissionMember
{
	
	
	 function create($fname,$lname,$x=2){
		parent::create($fname,$lname,$x);
	}
	function updateMission(Mission $event){
		echo $event->getName();

	}	
}
 ?>