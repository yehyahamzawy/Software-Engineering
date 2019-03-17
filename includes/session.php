<?php
session_start();

//$_SESSION["ID"] = 1;
//$_SESSION["pageID"] = 4;
$denyAccess = 1;

$Connection= new mysqli("localhost", "root", "", "olddb");

$sql = "SELECT userType FROM user WHERE ID = ".$_SESSION["ID"];
$result = mysqli_query($Connection, $sql);
$userTypeID = mysqli_fetch_array($result);


$sql2 = "SELECT linkID FROM linkconnection WHERE userTypeID = ".$userTypeID["userType"];
$result2 = mysqli_query($Connection, $sql2);

while($Row = mysqli_fetch_array($result2))
{
    if($Row["linkID"] == $pageID )
    {
        $denyAccess = 0;
    }
}
if($denyAccess == 1)
{
    header('location:../pages/denied.php');
}
else echo "access granted!"

?>