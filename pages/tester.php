<?php
include_once "../class/permission.php";

$test = new permission(2);
$test->allData();

foreach($test->link as $t)
{
    echo $t["link"]."<br>";
}

?>