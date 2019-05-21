<?php 

require_once "../MVC/view/scheduleView.php";
require_once "../MVC/model/scheduleModel.php";

$model = new scheduleModel();
$view = new scheduleView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
//$data1 = $model->readAllTable();
//$data2 = $model->readAllModal();
//$data3 = $model->readAllModalUsers();
$users = $model->getUser($_GET["ID"]);
$days = $model->getDays();
$shifts = $model->getUserShifts($_GET["ID"]);


$view->header();
$view->viewUserSchedule($users,$shifts,$days);
//$view->valuesTable($data1);
//$view->showValuesEdit($data2,$data4);
$view->footer();



?>