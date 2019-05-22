
                <?php 
                session_start();
                $_SESSION["userID"] = 226;
                $pageID = 4;
                $_SESSION["pageID"] = $pageID;
                require_once "../class/accessCheck.php";
                $object = new accessCheck();
                $object->checkAccess();
                
                ?><?php 

echo "you have access"
?>