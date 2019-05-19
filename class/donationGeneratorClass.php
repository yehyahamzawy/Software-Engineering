<?php 
class donationGenerator {
  private $donation;
  
  // Get only objects that belong to the interface.  
  public function __construct(iDonationGenerator $don)
  {
    $this->donation = $don;
  }
   
  // Use the object's methods to generate the coupon. 
  public function makeDonation($amount,$donor)
  {
    $discount = $this->donation->createDonation($amount,$donor);
    $discount = $this->donation->reportDonation();
    
    
  }
}
 ?>