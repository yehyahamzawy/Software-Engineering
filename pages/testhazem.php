<?php
include_once '../MVC/view\editAttributeView.php';

$editattributeviewobj=new editattributes();

$editattributeviewobj->form($_GET['ID']);

