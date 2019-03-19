<?php
include_once "../class/userValuesClass.php";
$input= $_POST["choice"];
$id= $_GET["ID"];
echo $id;
echo $input;
$object = new userValue($id);

$object->Update($id,$input);

header('location:uservalues.php');

?>