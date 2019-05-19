<?php 
include_once "iDonationGenerator.php";
include_once 'db.php';
/**
 * 
 */
class eventDonation implements iDonationGenerator 
{
	
	function createDonation($amount,$donor)
	{	
	$sql="INSERT INTO `donations`(`amount`,`type`,`donorName`) VALUES ($amount,3,'$donor')";
		database::static_query($sql);

		echo "create Event Donation";
	}
	function reportDonation(){
		echo "report event donation";
	}
}

 ?>