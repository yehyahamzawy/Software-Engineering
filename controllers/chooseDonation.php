<?php 
include_once "../class/eventDonation.php";
include_once "../class/clothDonation.php";
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
      
  return $donObj;
}
 ?>