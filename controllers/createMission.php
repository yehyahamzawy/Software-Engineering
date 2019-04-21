<?php 
include_once "../class/userClass.php";
include "../class/missionClass.php";
include "../class/doctorClass.php";
include "../class/assistantClass.php";
include "../class/psychologistClass.php";
include "../class/driverClass.php";
$missionName=$_POST['name'];
$driverID=$_POST['driver'];
$doctorID=$_POST['doctor'];
$psychID=$_POST['psych'];
$assistantID=$_POST['assistant'];
$date=$_POST['date'];
$desc=$_POST['description'];
 $driver=new Driver($driverID);

// $driver->Create("kareem","sawa2");
$doctor=new Doctor($doctorID);
// $doctor->Create("kareeem","doctor");
$assistant=new Assistant($assistantID);
// $assistant->Create("kareem","assistant");
$psych=new Psychologist($psychID);
// $psych->Create("kareem","psycho");
$mission=new Mission();
$mission->Create("demo1","23-5-2019",$doctor,$assistant,$driver,$psych,$desc);

 ?>