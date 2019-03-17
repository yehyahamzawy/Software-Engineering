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

//echo $test->returnUserTypeID('Driver');
//echo $test->returnLinkID('edit.php');

//$test->addPerm($test->returnUserTypeID('Driver'),$test->returnLinkID('edit.php'));

//$test->delPerm(5);

//$test->editPerm(4,$test->returnUserTypeID('Driver'),$test->returnLinkID('edit.php'));


?>