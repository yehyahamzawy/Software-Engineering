<?php 
// include_once "../controllers/chooseDonation.php";
// include_once "clothDonation.php";
// include_once "moneyDonation.php";
// include_once "donationGeneratorClass.php";
// $don = "money";
// $donObj = donationObjectGenerator($don);
// $donationGenerator = new donationGenerator($donObj);
//  $donationGenerator->getDonation();
  
// echo "<hr />";
    
// $don = "cloth";
// $donObj = donationObjectGenerator($don);
// $donationGenerator = new donationGenerator($donObj);
//  $donationGenerator->getDonation();
include_once "userClass.php";
include "missionClass.php";
include "doctorClass.php";
include "assistantClass.php";
include "psychologistClass.php";
include "driverClass.php";
$driverID=sha1(224);
$doctorID=sha1(221);
$assistantID=sha1(222);
$psychID=sha1(223);

// echo $driver->getlName();
// echo $driver->getUserType(); 	
// $user=new User(sha1(72));
// echo $user->getfName();
// echo $user->getlName();
// echo sha1(1);
// echo sha1(1);
// echo sha1(19);
$doctor=new Doctor($doctorID);

// $doctor->Create("kareeem","doctor");
echo $doctor->getfName();
echo "<br>";

// echo 'x';
$assistant=new Assistant($assistantID);

// $assistant->Create("kareem","assistant");
echo $assistant->getfName();
echo "<br>";

$psych=new Psychologist($psychID);

	echo $psych->getfName();
echo "<br>";

$driver=new Driver($driverID );
echo $driver->getfName();
echo "<br>";
$mission=new Mission('Enkaz','25-5-2019',2,'Saving dem boyz');
$mission->create($doctor,$assistant,$driver,$psych)
// echo 'doctor :'.$doctor->get;
  // $event->create(13,'kenz','25-4-2019', $doctor, $assistant,  $driver, $psych,'wtf')

// $result=daysOff::daysOffLeft(2);
// echo $result;
// daysOff::Decrement(2);
// $x=daysOff::daysOffLeft(2);
// echo $x;
 ?>