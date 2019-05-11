<?php
include_once "../class/attributeClass.php";
$object = new Attribute(1);
$object->Update($_POST['attributeID'],$_POST["attributeName"],$_POST["attributeDType"]);

?>