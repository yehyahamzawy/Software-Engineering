<?php
include '../class/userClass.php';
include '../class/validationClass.php';
$userID=$_SESSION['ID']; 
$date=Validation::test_input($_POST['date']);
$user=new User(sha1($userID));
$user->requestDayOff($date);

 ?>