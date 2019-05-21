<?php 
/**
 * 
 */
include_once "db.php";
include_once "pdfClass.php";
include "CRUDinterface.php";
class candidate 
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
function Create($candName,$job,$email,$phoneNum,$recName,$recPos,$exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$curiosityComm,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall){
	$sql="INSERT INTO `candidates`(`fullname`,`email`,`phoneNum`) VALUES ('$candName','$email','$phoneNum')";
	database::static_query($sql);
	
	$pdf=new PDF();
	$pdf->addCandidateReport($candName,$job,$exp,$expComm,$tech,$techComm,$analyze,$analyzeComm,$planning,$planningComm,$flexibility,$flexibilityComm,$curiosity,$curiosityComm,$interest,$interestComm,$auth,$authComm,$resp,$respComm,$spirit,$spiritComm,$interpersonal,$interpersonalComm,$attitude,$attitudeComm,$express,$expressComm,$overall);

}

}
 ?>