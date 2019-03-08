<?php
include_once "../class/attributes.php";
$object = new attribute();
$object->delete($_GET["ID"]);
header('location:attribute.php');
?>