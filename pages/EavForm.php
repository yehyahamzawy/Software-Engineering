<?php 

include '../class/userClass.php';
include '../class/db.php';
// include "../userValuesClass.php";
$user=new User(2);
if($_POST['action']=="fetch_form"){

	$output=$user->showForm($_POST['userType']);
	foreach ($output as $key) {
		 echo $key;
	}



}


if($_POST['action']=="send_form"){
$db=new Database();



$fname= $_POST['fname'];
$lname=$_POST['lname'];
$type=$_POST['type'];
$user=new user(2);
$user->Create($fname,$lname,$type); 
$userID=$user->getID();
$sql="SELECT * FROM usertypeattributes WHERE userTypeID=".$type;
// $db=new database();
$result=$db->db_query($sql);
	while($Row = mysqli_fetch_array($result)){
		$relationID=$Row['ID'];
		$input =$_POST[$Row['ID']];
		// $attributeID=$Row['attributeID'];
		// echo $input."<br>";
		$userValue=new userValue(3);
		$userValue->Create($userID,$input,$relationID);
}
$variable=$user->getAllAttributes();
foreach ($variable as $key ) {
	echo $key['aName'];
}

}
 ?>