<?php 
include_once "iDonationGenerator.php";
include_once 'db.php';
/**
 * 
 */
class moneyDonation implements iDonationGenerator 
{
	
	function createDonation($amount,$donor)
	{	
	$sql="INSERT INTO `donations`(`amount`,`type`,`donorName`) VALUES ($amount,1,'$donor')";
		database::static_query($sql);
}

	function reportDonation(){
		echo "report Money donation";
	}
}

 ?>