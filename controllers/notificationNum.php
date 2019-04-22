<?php 
include_once "../class/userClass.php";
include_once "../class/notificationClass.php";
$recID=2;



$variable=notification::readNew($recID);
$entry=array();
foreach ($variable as $key) {
	$user=new User($key['senderID']);

	$entry[]= array('id'=>$key['id'],'recID'=>$key['recID'],'senderID'=>$user->getfName());
}
$data=json_encode($entry);
echo $data;
// echo json_encode( 1 );
// echo 1;
 ?>