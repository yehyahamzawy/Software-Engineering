<?php 
include_once "chooseDonation.php";
include_once "../class/clothDonation.php";
include_once "../class/eventDonation.php";
include_once "../class/donationGeneratorClass.php";
$don = "event";
$donObj = donationObjectGenerator($don);
$donationGenerator = new donationGenerator($donObj);
 $donationGenerator->getDonation();
  
echo "<hr />";
    
$don = "cloth";
$donObj = donationObjectGenerator($don);
$donationGenerator = new donationGenerator($donObj);
 $donationGenerator->getDonation();
  

 ?>