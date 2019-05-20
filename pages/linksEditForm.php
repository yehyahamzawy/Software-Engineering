<?php 

require_once "../MVC/view/linksView.php";



$view = new linksView(array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" ),"Hello","testing page");


$view->header();
$view->showLinksEdit();
$view->footer();



?>