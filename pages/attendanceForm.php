<?php 

require_once "../MVC/view/attendanceView.php";
require_once "../MVC/model/attendanceModel.php";

$model = new attendanceModel();
$view = new attendanceView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
//$data1 = $model->readAllTable();
//$data2 = $model->readAllModal();
//$data3 = $model->readAllModalUsers();
$users = $model->getUsers();


$view->header();
$view->attendanceForm($users);
//$view->valuesTable($data1);
//$view->showValuesEdit($data2,$data4);
$view->footer();



?>