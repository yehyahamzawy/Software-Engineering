<?php

  include_once "../class/DBHelper.php";
$object = new helper("localhost", "root", "","newdb");
//$aray = $object->select("*", "user", "ID = 1");
//var_dump($aray);
$object->insert("user", array("fName" => "new", "lName" => "guy", "userTypeID" => "1", "isDeleted" => "0"));

?>



