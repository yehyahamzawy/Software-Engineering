<?php
include_once "../class/userValuesClass.php";
$object = new userVal();
$object->delete($_GET["ID"]);

header('location:uservalues.php');

?>