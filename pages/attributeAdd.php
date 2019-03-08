<?php
include_once "../class/attributes.php";
$object = new attribute();
$object->add($_POST["attributeName"],$_POST["attributeDType"]);
header('location:uservalueattribute.php');

?>