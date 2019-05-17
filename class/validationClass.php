<?php 
/**
 * 
 */
class Validation 
{
	
	function __construct(argument)
	{
		# code...
	}
	function test_input($data) {
 	  $data = trim($data);
  	  $data = stripslashes($data);
      $data = htmlspecialchars($data);
  return $data;
}
}

 ?>