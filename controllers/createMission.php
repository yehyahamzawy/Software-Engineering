<?php 
include_once "../class/userClass.php";
include "../class/missionClass.php";
include "../class/doctorClass.php";
include "../class/assistantClass.php";
include "../class/psychologistClass.php";
include "../class/driverClass.php";
$makerID=5;
$missionName=$_POST['name'];
$driverID=sha1($_POST['driver']);
$doctorID=sha1($_POST['doctor']);
$psychID=sha1($_POST['psych']);
$assistantID=sha1($_POST['assistant']);
$date=$_POST['date'];
$desc=$_POST['info'];




$doctor=new Doctor($doctorID);

// $doctor->Create("kareeem","doctor");
// echo $doctor->getfName();
// echo "<br>";

// echo 'x';
$assistant=new Assistant($assistantID);

// $assistant->Create("kareem","assistant");
echo $assistant->getfName();
// echo "<br>";

$psych=new Psychologist($psychID);

	// echo $psych->getfName();
// echo "<br>";

$driver=new Driver($driverID );
// echo $driver->getfName();
// echo "<br>";
$mission=new Mission($missionName,$date,$makerID,$desc);
$mission->create($doctor,$assistant,$driver,$psych);
header('location:../pages/missionForm.php');
 ?>