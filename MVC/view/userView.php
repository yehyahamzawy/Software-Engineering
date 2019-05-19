<?php 
include '../class/userClass.php';
/**
 * 
 */
class userView
{
	private $title;
	function __construct($title){
		$this->title=$title;
	}
	function showTitle($int){
		echo "<h".$int.">".$this->title."</h".$int.">";
	}
	function showDoctorDropDown(){
		$data=User::readType(3);
		echo '<select name="doctor">';
			foreach ($data as $doctor) {
				echo '<option value='.$doctor['ID'].'>'.$doctor['fName'].' '.$doctor['lName'].'</option>';
			}
			echo '</select>';

	}
	function showDriverDropDown(){
		$data=User::readType(1);

		echo '<select name="driver">';
			foreach ($data as $driver) {
				echo '<option value='.$driver['ID'].'>'.$driver['fName'].' '.$driver['lName'].'</option>';
			}
			echo '</select>';

	}
	function showPsychDropDown(){
		$data=User::readType(4);

		echo '<select name="psych">';
			foreach ($data as $psych) {
				echo '<option value='.$psych['ID'].'>'.$psych['fName'].' '.$psych['lName'].'</option>';
			}
			echo '</select>';

}	

	function showAssistantDropDown(){
		$data=User::readType(2);

		echo '<select name="assistant">';
			foreach ($data as $assistant) {
				echo '<option value='.$assistant['ID'].'>'.$assistant['fName'].' '.$assistant['lName'].'</option>';
			}
			echo '</select>';

	}

	function showMissionForm(){
		echo "<div  id='missionForm'><form action='../controllers/createMission.php' method='POST'>";

		echo "<h4>Mission name:</h4>";
		echo "<input type='text'  name='name'><br>";
		echo "<h4>Mission date:</h4>";
		echo "<input type='text'  name='date'>";
		echo "<h4>Doctor:</h4>";
		$this->showDoctorDropDown();
		echo "<br>";
		echo "<br>";
		echo "<h4>Driver</h4>";
		$this->showDriverDropDown();
		echo "<br>";
		echo "<br>";
		echo "<h4>Psychologist</h4>";
		$this->showPsychDropDown();
		echo "<br>";
		echo "<br>";
		echo "<h4>Assistant</h4>";
		$this->showAssistantDropDown();
		echo "<br>";
		echo "<br>";
		echo "<h4>Description and Location</h4>";	
		echo "<input type='textarea' style='width: 300px; height: 200px' name='info'><br><br>";
		echo "<input type='submit' ></form></div>";
	}







}


 ?>