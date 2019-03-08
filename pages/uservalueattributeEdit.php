<?php
include_once "../class/userTypeAttrClass.php";
$object = new userTypeAttr();
$object->update($_GET["ID"],$_POST["typeId"],$_POST["attributeId"]);
echo $_POST["typeId"],$_POST["attributeId"];
header('location:uservalueattribute.php');

?>