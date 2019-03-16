	<?php
include_once "../class/userTypeAttributeClass.php";
$object = new userTypeAttribute(34);

$object->Delete($_GET["ID"]);

header('location:uservalueattribute.php');

?>