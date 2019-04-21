<?php 
include_once "EventInterface.php";
/**
  * 
  */
 class Event implements iEvent
 {	private $name;
 	private $date;
 	private $observers;
 	
 	function __construct($name,$date)
 	{
 		$this->name=$name;
 		$this->date=$date;
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

 	function attach(User $observer_in){
 		 $this->observers[] = $observer_in;

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
        $obs->updateEvent($this);
      }
    }
 } ?>