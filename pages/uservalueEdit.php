<?php
include_once "../class/userValuesClass.php";
$object = new userVal();
$object->update($_GET["ID"],$_POST["uniqueuserattributeID"],$_POST["value"],$_POST["userID"]);

header('location:uservalues.php');

?>