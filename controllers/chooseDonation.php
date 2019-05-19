<?php 
include_once "../class/eventDonation.php";
include_once "../class/clothDonation.php";
include_once "../class/moneyDonation.php";
include_once "../class/donationGeneratorClass.php";

$don=$_POST['donationType'];
$amount=$_POST['amount'];
$donor=$_POST['name'];
function donationObjectGenerator($don)
{
  if($don == "event")
  {
    $donObj = new eventDonation;
  }
  else if($don == "cloth")
  {
    $donObj = new clothDonation;
  }
  else if($don=="money"){
  	$donObj=new moneyDonation;
  }
  return $donObj;
}

$donObj = donationObjectGenerator($don);
$donationGenerator = new donationGenerator($donObj);
 $donationGenerator->makeDonation($amount,$donor);
 header('location:../pages/donationForm.php');
 ?>