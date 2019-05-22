<?php 

require_once "../MVC/view/attributesView.php";
require_once "../MVC/model/attributesModel.php";

$model = new attributesModel(1);
$view = new attributesView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
$data1 = $model->readAllTable();
$data2 = $model->getTypes();


$view->header();
$view->editForm($data2);
//$view->showTable($data1);
//$view->showValuesEdit($data2,$data4);
$view->footer();



?>