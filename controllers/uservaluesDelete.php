<?php
include_once "../class/userValuesClass.php";
$object = new userValue($_GET["ID"]);
$object->Delete($_GET["ID"]);

header('location:uservalues.php');

?>