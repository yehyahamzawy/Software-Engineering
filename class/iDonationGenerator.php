<?php 
/**
 * 
 */
interface iDonationGenerator 
{
	
	function createDonation($amount,$donor);
	function reportDonation();
}


 ?>