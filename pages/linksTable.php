<?php 

require_once "../MVC/view/linksView.php";
require_once "../MVC/model/linksModel.php";

$model = new linksModel(1);
$view = new linksView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
$data1 = $model->readAllTable();
//$data4 = $model->getUserTypes();

$view->header();
//$view->addPermModal($data3,$data2);
$view->linksTable($data1);
//$view->showValuesEdit($data2,$data4);
$view->footer();



?>