<?php 
include_once '../class/userClass.php';
$id=$_GET['ID'];
$user=new User($id);
$user->Delete($user->getID());
header('location:../pages/usertable.php');
 ?>