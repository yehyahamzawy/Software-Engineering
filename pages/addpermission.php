<?php 
include_once "../class/permission.php";
$object = new permission(2);
                        
foreach($_POST["typeID"] as $type)
{
    $object->addPerm($type,$_POST["linkID"]);
}
?>