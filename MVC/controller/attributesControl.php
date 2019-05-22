<?php 
require_once "../../class/DBHelper.php";
$DB = new helper("localhost", "root", "","se1");
if(isset($_GET["del"]))
{
    
        $DB->delete("attribute", $_GET["ID"]);
        header("location:../../pages/attributeTable.php");
    
}

else if(isset($_GET["updt"]))
{
    //echo "edit";
    $DB->update("attribute",$arrayName = array('attributeName' => $_POST["attributeName"], 'type' => $_POST["attType"]),$_GET["attID"]);
    //var_dump($_POST);
    header("location:../../pages/attributeTable.php");
}
else if(isset($_GET["add"]))
{
    //var_dump($_POST);
    $DB->insert("attribute",$arrayName = array('attributeName' => $_POST["attributeName"], 'type' => $_POST["attType"]));
    
    header("location:../../pages/attributeTable.php");
}

?>