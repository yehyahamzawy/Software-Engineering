<?php
include('..\view\attributesView.php');
include('..\model\attributesModel.php');
$modelobj=new attributes(1);
$viewobj=new attributesview();
$viewobj->showheader($modelobj->Row);
$viewobj->showmodal($modelobj->Row);
$viewobj->showtable($modelobj->Row);






?>