<?php 
/**
  * 
  */
include_once "db.php";
 class notificationType
 {
 	
 	
 	static function read($id){
 		$DB=new Database();
 		$sql="SELECT * from notificationType WHERE id=".$id;
 		$result=$DB->db_query($sql);
 		$row=mysqli_fetch_assoc($result);
 		return $row['name'];
 	}
 } ?>