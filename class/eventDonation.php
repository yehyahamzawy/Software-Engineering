<?php 
include_once "iDonationGenerator.php";
/**
 * 
 */
class eventDonation implements iDonationGenerator 
{
	
	function createDonation()
	{
		echo "create Event Donation";
	}
	function reportDonation(){
		echo "report event donation";
	}
}

 ?>