<?php 

include_once "../MVC/view/UTAttributeView.php";
include_once "../MVC/model/UTAttributeModel.php";

$view = new UTAttView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
$model = new UTAttModel(1);

$tableData = $model->readAllTable();
$types =  $model->getUserTypes();
$attributes =  $model->getAttributes();

$view->header();
$view->showUTAttEdit($attributes, $types);
//$view->userAttTable($tableData);
$view->footer();
?>