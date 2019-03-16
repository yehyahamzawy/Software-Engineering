<?php
include_once "../class/userTypeAttributeClass.php";
$object = new userTypeAttribute(1);
$object->Create($_POST["typeId"],$_POST["attributeId"]);
echo $_POST["typeId"],$_POST["attributeId"];
header('location:uservalueattribute.php');

?>