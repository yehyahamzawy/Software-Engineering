	<?php
include_once "../class/userTypeAttributeClass.php";
$object = new userTypeAttribute($_GET["ID"]);
$object->update($_GET["ID"],$_POST["typeId"],$_POST["attributeId"]);
echo $_POST["typeId"],$_POST["attributeId"];
header('location:uservalueattribute.php');

?>