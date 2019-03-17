<?php
include_once "../class/permission.php";
$pageID = 4;
$test = new permission(2);
$test->allData();
include_once "../includes/session.php";
// foreach($test->link as $t)
// {
//     echo $t["Link"]."<br>";
// }

?>