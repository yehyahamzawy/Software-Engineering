<?php
include_once "../class/userValuesClass.php";
$object = new userVal();
$object->add($_POST["uniqueUserAttributeID"],$_POST["value"],$_POST["userID"]);

header('location:uservalues.php');

?>