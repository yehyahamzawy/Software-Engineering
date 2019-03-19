<?php 	
include_once '../class/userClass.php';
$userID=$_GET['ID'];
// echo $userID;
$user=new User($userID);
$user->delete($userID);
header('location:userstable.php');


 ?>