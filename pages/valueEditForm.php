<?php
require_once "../MVC/view/userValueView.php";
require_once "../MVC/model/userValueModel.php";

$model = new userValueModel(1);
$view = new userValueView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");
$data = $model->readAllModal();
$users = $model->getUsers();

$view->header();
$view->showValuesEdit($data,$users);
$view->footer();
?>