<?php 

require_once "../MVC/view/scheduleView.php";
require_once "../MVC/model/scheduleModel.php";

$model = new scheduleModel();
$view = new scheduleView(array('View Schedules' => "../pages/viewSchedules.php", ),"User Schedule","Table");
$users = $model->getUser($_GET["ID"]);
$model->getDays();
$model->getUserShifts($_GET["ID"]);
//$model->ramadanTimes();
//$model->overTime();
//$model->alterDay(6,"9:30:00", "16:00:00");
//$model->alterDay(2,"9:30:00", "16:00:00");


$view->header();
$view->viewUserSchedule($users,$model->shifts,$model->days);
$view->footer();



?>