
                <?php 
                session_start();
                $pageID = 7;
                $_SESSION["pageID"] = $pageID;
                require_once "../class/accessCheck.php";
                $object = new accessCheck();
                $object->checkAccess();
                
                ?><?php 

require_once "../MVC/view/scheduleView.php";
require_once "../MVC/model/scheduleModel.php";

$model = new scheduleModel();
$view = new scheduleView(array(),"List Schedules","Table");
//$data1 = $model->readAllTable();
//$data2 = $model->readAllModal();
//$data3 = $model->readAllModalUsers();
$users = $model->getUsers();


$view->header();
$view->viewUsers($model->users);

$view->footer();



?>