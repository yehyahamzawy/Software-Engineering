<?php 
include '../MVC/controller\validations.php';
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




$doctor=new User($doctorID);


$assistant=new User($assistantID);

echo $assistant->getfName();

$psych=new User($psychID);

$driver=new User($driverID );

$mission=new Mission($missionName,$date,$makerID,$desc);
$mission->create($doctor,$assistant,$driver,$psych);
header('location:../pages/missionForm.php');
 ?>