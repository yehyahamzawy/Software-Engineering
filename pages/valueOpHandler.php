<?php 
require_once "../class/DBHelper.php";
$DB = new helper("localhost", "root", "","newdb");
if(isset($_GET["del"]))
{
    
        $DB->delete("uservalues", $_GET["ID"]);
        header("location:valuesTable.php");
    
}

else if(isset($_GET["updt"]))
{
    //echo "edit";
    $DB->update("uservalues",$arrayName = array('value' => $_POST["value"], 'userID' => $_POST["userID"], 'userTypeAttributeID' => $_POST["userTypeAttributeID"]),$_GET["valID"]);
    //var_dump($_POST);
    header("location:valuesTable.php");
}
else if(isset($_GET["add"]))
{
    
    $DB->insert("uservalues",$arrayName = array('value' => $_POST["value"], 'userID' => $_POST["userID"], 'userTypeAttributeID' => $_POST["userTypeAttributeID"]));
    //var_dump($_POST);
    header("location:valuesTable.php");
}

?>