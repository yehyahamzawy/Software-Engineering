<?php 
// include_once "Event.php";
// include_once "userClass.php";
// include "missionClass.php";
// include "doctorClass.php";
// include "assistantClass.php";
// include "psychologistClass.php";
// include "driverClass.php";
// $
// $driver=new Driver(0);

// $driver->Create("kareem","sawa2");
// $doctor=new Doctor(0);
// $doctor->Create("kareeem","doctor");
// $assistant=new Assistant(0);
// $assistant->Create("kareem","assistant");
// $psych=new Psychologist(0);
// $psych->Create("kareem","psycho");
// $mission=new Mission();
// $mission->Create("demo1","23-5-2019",$doctor,$assistant,$driver,$psych);


include "notificationClass.php";
$variable=notification::readNew(2);
$entry=array();
foreach ($variable as $key) {
	$entry= $key;
}
$data=json_encode($entry);
echo $data;
// notification::create(2,1);
// notification::setIsRead(1);
// notification::setIsDeleted(1);

 ?>