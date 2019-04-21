 <?php 
/**
 * 
 */
include "missionMember.php";
class Doctor  extends User implements iMissionMember
{
	
	 function create($fname,$lname,$x=3){
		parent::create($fname,$lname,$x);
	}
	public function medicalReport()
	{
		# code...
	}
	function updateMission(Mission $event){

		echo $event->getName();
	}
}

 ?>