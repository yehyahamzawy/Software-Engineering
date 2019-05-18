<?php 

require_once "../MVC/view/permissionView.php";
require_once "../MVC/model/permissionModel.php";

$model = new permissionModel(1);
$view = new permissionView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
$data1 = $model->readAllTable();
$data2 = $model->getLinks();
$data3 = $model->getUserTypes();
//$data4 = $model->getUserTypes();

$view->header();
$view->addPermModal($data3,$data2);
$view->valuesTable($data1);
//$view->showValuesEdit($data2,$data4);
$view->footer();



?>