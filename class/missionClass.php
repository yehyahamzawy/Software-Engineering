<?php 
include "EventInterface.php";
include_once "db.php";
include_once "CRUDinterface.php";
include_once "notificationClass.php";
/**
  * 
  */
 class Mission implements iEvent,CRUD
 {private $id;	
  private $name;
 	private $date;
  private $description;
  private $doctor;
  private $assistant;
  private $driver;
  private $psychologist;
 	private $observers;
  private $DB;
 	
 	function __construct()
 	{
 		$this->DB=new Database();
 		// $this->date=$date;
 	}
  function Read(){}
  function ReadAll(){}
  function ReadInSelect(){}
  function Delete($id){}
   function create($makerID,$name,$date,Doctor $doctor,Assistant $assistant, Driver $driver,psychologist $psych,$description){
    $this->name=$name;
    $this->date=$date;
    $this->description=$description;
    $this->doctor=$doctor;
    $this->assistant=$assistant;
    $this->driver=$driver;
    $this->psychologist=$psych;
    $this->attachAll(); 
    $sql="INSERT INTO mission(name,missionDate,Description) VALUES ('$this->name','$this->date','$this->description')";
    $this->DB->db_query($sql);
    echo "x";
    $this->ID= mysqli_insert_id($this->DB->connect);

    $sql1="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$doctor->getID().",1,$this->ID)";
    $sql2="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$assistant->getID().",2,$this->ID)";
    $sql3="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$driver->getID().",3,$this->ID)";
    $sql4="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$psych->getID().",4,$this->ID)";
    notification::create($doctor->getID(),$makerID,1);
    notification::create($assistant->getID(),$makerID,3);
    notification::create($driver->getID(),$makerID,2);
    notification::create($psych->getID(),$makerID,4);
    $this->DB->db_query($sql1);
    $this->DB->db_query($sql2);
    $this->DB->db_query($sql3);
    $this->DB->db_query($sql4);

  }
 	function getName(){
 		return $this->name;
 	}
 	function setName($x){
 		$this->name=$x;
 		$this->notify();
 	}
 	function getDate(){
 		return $this->date;
 	}
 function attach(User $user){}
 	function attachDoctor(Doctor $doctor){
 		 $this->observers[] = $doctor;

 	}
  function attachAssistant(Assistant $assistant){
     $this->observers[] = $assistant;

  }
  function attachPsychologist(psychologist $psych){
     $this->observers[] = $psych;

  }
  function attachDriver(Driver $driver){
     $this->observers[] = $driver;

  }
  function attachAll(){
    $this->attachDoctor($this->doctor);
    $this->attachAssistant($this->assistant);
    $this->attachDriver($this->driver);
    $this->attachPsychologist($this->psychologist);
    $this->notify();
  }
    function detach(User $observer_in){
    	 foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }
    function notify(){
    	foreach($this->observers as $obs) {
        $obs->updateMission($this);
      }
    }
 } ?>