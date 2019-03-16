<?php 
include "userClass.php";
$x=sha1(3	);
$user=new User($x);
$res=$user->Read();
foreach ($res as $i) {
	# code...
	echo 	$i;
}
 ?>