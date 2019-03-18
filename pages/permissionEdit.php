<?php
include_once "../class/permission.php";

$object = new permission();


foreach($_POST["typeID"] as $type)
{
    $object->update($_GET["id"],$type,$_POST["linkID"]);
}
header('location:acceesscontrol.php');

?>