<?php
include_once "../class/meetingClass.php";

$test = new meeting(2);
$test->allMeetings();
$pageID = 4;
//include_once "../includes/session.php";
// foreach($test->link as $t)
// {
//     echo $t["Link"]."<br>";
// }

//echo $test->returnUserTypeID('Driver');
//echo $test->returnLinkID('edit.php');

//$test->createMeeting(1,"3la2 SP","madinaty",'2019-05-13','16:30:00');
//$user = $test->returnUser(1);
//echo $user["firstName"]

//$test->delPerm(5);

//$test->editPerm(4,$test->returnUserTypeID('Driver'),$test->returnLinkID('edit.php'));


?>