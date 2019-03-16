<?php 
include "userClass.php";
include "attributeClass.php";
include "userTypeClass.php";
include "userTypeAttributeClass.php";
include "childClass.php";
// $x=sha1(3);
// $user=new User($x);
// $res=$user->getAllAttributes();
// foreach ($res as $key ){
	
// 	echo $key['attributeName']."<br>".$key['value'];
// }
$ta=new userTypeAttribute(34);
// $ta->Create(2,26);
$x=$ta->Delete(42);
echo "x";
// $user->Update("mo7y","el shar2awy",2,$x);
// // foreach ($res as $i) {
// // 	# code...
// // 	echo 	$i;
// // }
// $res=$user->ReadAll();

// foreach ($res as $i) {
// // 	# code...
//  	echo 	$i;
// }
// $att=new Attribute(25);
// $x=$att->Read();
// foreach ($x as $key ) {
// 	echo $key['attributeName'];
// }
// $dt = new DateTime('2013-09-15 08:45:00', new DateTimeZone('UTC'));
// print_r($dt);
 ?>