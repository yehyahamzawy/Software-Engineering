


<?php
include_once "../class/permission.php";

$object = new permission(2);

echo $_POST["typeID"]." ".$_POST["linkID"];

    $object->editPerm($_GET["ID"],$_POST["typeID"],$_POST["linkID"]);

header('location:accesscontrol.php');

?>