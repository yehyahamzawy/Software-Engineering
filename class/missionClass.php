<?php 
include "EventInterface.php";
include_once "db.php";
include_once "CRUDinterface.php";
include_once "notificationClass.php";
/**
  * 
  */
 class Mission implements iEvent,CRUD
 {private $makerID;
  private $id;	
  private $name;
 	private $date;
  private $description;
  private $doctor;
  private $assistant;
  private $driver;
  private $psychologist;
 	private $observers;
  private $DB;
 	
 	function __construct($name,$date,$makerID,$description)
 	{
 		$this->DB=new Database();
    $this->makerID=$makerID;
    $this->name=$name;
    $this->date=$date;
    $this->description=$description;
    $sql="INSERT INTO mission(name,missionDate,Description) VALUES ('$this->name','$this->date','$this->description')";
    $this->DB->db_query($sql);
    echo "zzz";
    $this->ID= mysqli_insert_id($this->DB->getConn());
 		// $this->date=$date;
 	}
  function getMakerID(){
    return $this->makerID;
  }
  function Read(){}
  function ReadAll(){}
  function ReadInSelect(){}
  function Delete($id){}
   function create( $doctor, $assistant, $driver, $psych){
    
    
    $this->doctor=$doctor;
    $this->assistant=$assistant;
    $this->driver=$driver;
    $this->psychologist=$psych;
    $this->attachAll(); 
    

    $sql1="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$doctor->getID().",".$doctor->getUserType().",$this->ID)";
    $sql2="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$assistant->getID().",".$assistant->getUserType().",$this->ID)";
    $sql3="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$driver->getID().",".$driver->getUserType().",$this->ID)";
    $sql4="INSERT INTO missionParticipants(userID,roleID,missionID) VALUES (".$psych->getID().",".$psych->getUserType().",$this->ID)";
    
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
 	function attachDoctor(User $doctor){
 		 $this->observers[] = $doctor;

 	}
  function attachAssistant(User $assistant){
     $this->observers[] = $assistant;

  }
  function attachPsychologist(User $psych){
     $this->observers[] = $psych;

  }
  function attachDriver(User $driver){
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
    static function ReadAllUnconfirmed(){
      $DB=new database();
      $output=array();
      $sql="SELECT * FROM mission where isConfirmed=0 and isDeleted=0";
      $result=$DB->static_query($sql);
    while($Row = mysqli_fetch_array($result))
    {
      array_push($output, $Row);

    } 
    return $output;
    }

    static function confirmMission($ID){
      $DB=new database();
      $sql="UPDATE `mission` SET `isConfirmed`=1 WHERE id=".$ID;
      $DB->static_query($sql);

    }
    static function deleteMission($ID){
      $DB=new database();
      $sql="UPDATE `mission` SET `isDeleted`=1 WHERE id=".$ID;
      $DB->static_query($sql);

    }

 } ?>