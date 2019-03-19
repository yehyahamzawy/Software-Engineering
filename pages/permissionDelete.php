<?php
include_once "../class/permission.php";
$object = new pirmission();
$object->delete($_GET["id"]);
header('location:acceesscontrol.php');
?>