<?php 
/**
 * 
 */
class Validation 
{
	
	
	static function test_input($data) {

 	  $data = trim($data);
  	  $data = stripslashes($data);
      $data = htmlspecialchars($data);
  return $data;
}
}

 ?>