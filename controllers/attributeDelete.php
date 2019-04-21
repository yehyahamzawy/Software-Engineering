<?php
include_once "../class/attributeClass.php";
$object = new Attribute(25);
$object->delete($_GET["ID"]);
echo $_GET["ID"];
header('location:attribute.php');
?>