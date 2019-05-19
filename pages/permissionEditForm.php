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
$view->showPermEdit($data3,$data2);
$view->footer();



?>