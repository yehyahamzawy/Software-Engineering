<?php 

include_once '../class/reportClass.php';
$type=$_POST['type'];
$childID=$_POST['childID'];
$report=$_POST['report'];
report::createReport($type,$childID,$report);

 ?>