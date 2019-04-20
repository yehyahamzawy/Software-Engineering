<?php

  include_once "../class/DBHelper.php";
$object = new helper("localhost", "root", "","newdb");
//$aray = $object->select("*", "user", "ID = 1");
//var_dump($aray);
//$object->insert("user", array("fName" => "new", "lName" => "guy", "userTypeID" => "1");
//$object->logValidate("user", "2");
//$object->delete("user","2");
//$object->restore("user","2");


// $aray = $object->selectFetchArray("*", "user", "ID = 2");
// echo $aray["fName"]."</br>";
// $object->delete("user", "2");
// $aray = $object->selectFetchArray("*", "user", "ID = 2");
// echo $aray["fName"]."</br>";
// $object->restore("user","2");
// $aray = $object->selectFetchArray("*", "user", "ID = 2");
// echo $aray["fName"]."</br>";

$object->update("user", array("fName" => "not", "lName" => "tester"), "2");

?>



