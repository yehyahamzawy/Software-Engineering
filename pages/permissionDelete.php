<?php
include_once "../class/permission.php";
$object = new permission(2);
$object->delPerm($_GET["ID"]);
header('location:accessControl.php');
?>