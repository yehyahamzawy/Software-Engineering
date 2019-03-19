<?php 

if($_POST['action']=="get_att"){
include_once '../class/attributeClass.php';
include_once '../class/userClass.php';

$userID=$_POST['userType'];
$type=1;
$user=new User(sha1($userID));
$type=$user->getuserType();

$att=new Attribute(2);

$x=$att->ReadTypeAttributes($type);
// echo "x";
echo "<select id='attributeName' class='yo' name='att' >";
foreach ($x as $key) {
	
	echo "<option value=".$key['ID'].">".$key['attributeName']."</option>";	
    // echo "<input type='hidden' class=".$key['type']."value=".$key['ID'].">";


}
echo "</select>";
// echo "<script type='text/javascript'>$('#attributeName').change(function(){
        
//         var action = 'get_input';
        
//         var attID = $('#attributeName').val();
       
        
//         alert(attID);
//         $.ajax({
//             url:'get_att.php',
//             method:'POST',
//             data:{action:action,attID:attID},
//             success:function(data){
//                 $('.value').empty();
//                 $('.value').html(data);
//             }
//         });
//         return false;
//     }
//     );
//    </script>";

return;
}
elseif($_POST['action']=="get_input"){
	
    include_once '../class/attributeClass.php';
    
	// $attType=$_POST['attType'];
	include_once '../class/attributeTypeClass.php';
    $attID=$_POST['attID'];
    $att=new Attribute($attID);
    $x=$att->getType();
	$atc=new attributeType($x);
	$atc->showInput($x,"choice",$attID);
	// $var=$atc->Read();
	// foreach ($var as $key) {
	// 	echo "<input type=".$key['name'].""; 
	// }

}
 ?>
