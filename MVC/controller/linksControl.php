<?php 
require_once "../../class/DBHelper.php";
$DB = new helper("localhost", "root", "","newdb");
if(isset($_GET["del"]))
{
    
        $DB->delete("links", $_GET["ID"]);
        header("location:../../pages/linksTable.php");
    
}

else if(isset($_GET["updt"]))
{
    //echo "edit";
    $DB->update("links",$arrayName = array('URL' => $_POST["URL"], 'friendlyName' => $_POST["friendlyName"]),$_GET["linkID"]);
    //var_dump($_POST);
    header("location:../../pages/linksTable.php");
}

else if(isset($_GET["add"]))
{
    
    $DB->insert("links",$dataArray = array('URL' => $_POST["URL"], 'friendlyName' => $_POST["friendlyName"], 'isLocal' => $_POST["isLocal"]));

    $pageID = $DB->lastID;
    
        $isLocal = $DB->selectFetchArray("isLocal","links","ID = $pageID");
       
        if($isLocal["isLocal"] == 1)
        {
            if(file_exists ("../../pages/".$dataArray["URL"] ))
            {
                $file_data = '
                <?php 
                session_start();
                $pageID = '.$DB->lastID.';'
                
                .'
                $_SESSION["pageID"] = $pageID;
                require_once "../class/accessCheck.php";
                $object = new accessCheck();
                $object->checkAccess();
                
                ?>';
                
                 $file_data .= file_get_contents("../../pages/".$dataArray["URL"]);
                 file_put_contents("../../pages/".$dataArray["URL"], $file_data);
            }
            else
            {
                echo $dataArray["URL"]."file doesnt exist";
            }
        }
    header("location:../../pages/linksTable.php");
}

?>