<?php 	
include_once '../class/userClass.php';

$fname=$_POST['fname'];
// echo $fname;

$lname=$_POST['lname'];
// echo $lname;
$type=$_POST['type'];
// echo $type;
$userID= $_POST['userID'];

// echo $userID;
$user=new User($userID);


$user->Update($fname,$lname,$type,$userID);
// echo "x";
header('location:userstable.php');

 ?>