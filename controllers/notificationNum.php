<?php 
include_once "../class/userClass.php";
include_once "../class/notificationClass.php";
include_once "../class/notifyTypeClass.php";
$recID=224;



$variable=notification::readNew($recID);
$entry=array();
foreach ($variable as $key) {
	$type=notificationType::read($key['notificationType']);
	$user=new User(sha1($key['senderID']));
	$fname=$user->getfName();
	$lname=$user->getlName();
	$entry[]= array("id"=>$key['id'],"recID"=>$key['recID'],"senderFname"=>$fname,"senderLname"=>$lname,"type"=>$type);
}
$data=json_encode($entry);
echo $data;
// echo json_encode( 1 );
// echo 1;
 ?>