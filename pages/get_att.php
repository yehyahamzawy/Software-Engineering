<?php 
include_once '../class/attributeClass.php';
$type=$_POST['userType'];
$att=new Attribute(2);
$x=$att->ReadTypeAttributes($type);
echo "<select>";
foreach ($x as $key) {
	
	echo "<option value=".$key['ID'].">".$key['attributeName']."</option>";	


}
echo "</select>";

 ?>