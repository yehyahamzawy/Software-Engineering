<?php 
require_once "../../class/DBHelper.php";
$DB = new helper("localhost", "root", "","se1");
if(isset($_GET["del"]))
{
    
        $DB->delete("uservalues", $_GET["ID"]);
        header("location:../../pages/valuesTable.php");
    
}

else if(isset($_GET["updt"]))
{
    //echo "edit";
    $DB->update("uservalues",$arrayName = array('value' => $_POST["value"], 'userID' => $_POST["userID"], 'userTypeOptionID' => $_POST["userTypeAttributeID"]),$_GET["valID"]);
    //var_dump($_POST);
    header("location:../../pages/valuesTable.php");
}
else if(isset($_GET["add"]))
{
    //var_dump($arr = array('value' => $_POST["value"], 'userID' => $_POST["userID"], 'userTypeOptionID' => $_POST["userTypeAttributeID"]));
    $DB->insert("uservalues",$arrayName = array('value' => $_POST["value"], 'userID' => $_POST["userID"], 'userTypeOptionID' => $_POST["userTypeAttributeID"]));
    //var_dump($arrayName);
    header("location:../../pages/valuesTable.php");
}

?>