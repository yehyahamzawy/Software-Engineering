<?php 
class donationGenerator {
  private $donation;
  
  // Get only objects that belong to the interface.  
  public function __construct(iDonationGenerator $don)
  {
    $this->donation = $don;
  }
   
  // Use the object's methods to generate the coupon. 
  public function getDonation()
  {
    $discount = $this->donation->createDonation();
    $discount = $this->donation->reportDonation();
    
    
  }
}
 ?>