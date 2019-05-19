<?php 
// include "userClass.php";
/**
 * 
 */
class Psychologist extends User implements iMissionMember
{
	
	function __construct($ID){
		parent::__construct($ID);
	}

	 function create($fname,$lname,$x=4){
		parent::create($fname,$lname,$x);
	}

	// function updateMission(Mission $event){
	// 	echo $event->getName();

	// }	
}
 ?>