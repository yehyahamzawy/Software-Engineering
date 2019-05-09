<?php
include '..\MVC\view\attributesView.php';
include '..\MVC\model\attributesModel.php';
include '..\adminPanel\basicPageHeader.php';

$modelobj=new attributes(1);
$viewobj=new attributesview();
$viewobj->showheader($modelobj->Row);
$viewobj->showmodal($modelobj->Row);
$viewobj->showtable($modelobj->Row);

include '..\adminPanel\basicPageFooter.php';




?>