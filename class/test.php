<?php 
include_once "../controllers/chooseDonation.php";
include_once "clothDonation.php";
include_once "eventDonation.php";
include_once "donationGeneratorClass.php";
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