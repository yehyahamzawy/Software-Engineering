<?php 
include_once'db.php';
include_once'iDonationGenerator.php';
/**
 * 
 */
class clothDonation implements iDonationGenerator
{
	
	function createDonation($amount,$donor)
	{	
	$sql="INSERT INTO `donations`(`amount`,`type`,`donorName`) VALUES ($amount,2,'$donor')";
		database::static_query($sql);
}

	function reportDonation(){
		echo "report Cloth Donation";
	}
}

 ?>