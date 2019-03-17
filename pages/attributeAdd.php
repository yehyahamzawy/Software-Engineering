<?php
include_once "../class/attributeClass.php";
$object = new Attribute(1);
$object->create($_POST["attributeName"],$_POST["attributeDType"]);
header('location:attribute.php');

?>