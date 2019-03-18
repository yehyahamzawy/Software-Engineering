<?php 	
include_once "../class/userValuesClass.php";
include_once "../class/userClass.php";
include_once "../class/userTypeClass.php";
include "../class/db.php";
$fname= $_POST['fname'];
$lname=$_POST['lname'];
$type=$_POST['type'];

$user=new User(2);
$user->Create($fname,$lname,$type); 
$userID=$user->getID();

$sql="SELECT * FROM usertypeattributes WHERE userTypeID=".$type;
$db=new Database();
$result=$db->db_query($sql);
	while($Row = mysqli_fetch_array($result)){

		$relationID=$Row['ID'];
		$input =$_POST[$Row['ID']];
		

		$userValue=new userValue(3);
		$userValue->Create($userID,$input,$relationID);
}
// $output=$user->getAllAttributes();
// 	foreach ($output as $key ) {
// 		echo $key['aName']." ".$key['value'];
// 	}
header('location:employeeform.php');
 ?>