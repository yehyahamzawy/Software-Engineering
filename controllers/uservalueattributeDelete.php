	<?php
include_once "../class/userTypeAttributeClass.php";
$object = new userTypeAttribute($_GET["ID"]);

$object->Delete();

header('location:uservalueattribute.php');

?>