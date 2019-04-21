<?php 
// include "userClass.php";
/**
 * 
 */
class Psychologist extends User implements iMissionMember
{
	
	
	 function create($fname,$lname,$x=4){
		parent::create($fname,$lname,$x);
	}

	function updateMission(Mission $event){
		echo $event->getName();

	}	
}
 ?>