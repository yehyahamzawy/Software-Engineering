<?php
include '..\MVC\view\attributesView.php';
include '..\MVC\model\attributesModel.php';
//include_once "../class/attributeTypeClass.php";
// include '..\class\adminPanel\basicPageHeader.php';

$modelobj=new attributes(1);
$viewobj=new attributesview();

$viewobj->showheader();
$viewobj->showmodal($modelobj->readAll());
$viewobj->showtable($modelobj->Row);

// include '..\class\adminPanel\basicPageFooter.php';




?>