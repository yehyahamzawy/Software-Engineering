<?php 
/**
  * 
  */
 class database 
 { 
 	private static $connect;
 		
 	function __construct()
	{
		$this->db_connect();
		
	}
  function getConn(){
    return self::$connect;
  }
	
 	function db_connect(){
    if(!self::$connect){
      
 		self::$connect = new mysqli("localhost", "root", "","se");


	if (self::$connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
        
        }
}
        
        return self::$connect;
 	}
    function db_query($query){

    $result = mysqli_query($this->db_connect(), $query);
    if (!$result)
  {
  echo("Error description: " . mysqli_error($this->db_connect()));
  }



     return $result;
     }
     static function static_query($query){
      $db=new database();
    $result = mysqli_query($db->db_connect(), $query);
    if (!$result)
  {
  echo("Error description: " . mysqli_error($db->db_connect()));
  }



     return $result;
     }

 	

 	function db_query_row($query){

 		$result = mysqli_query($this->db_connect(), $query);
 		if (!$result)
  			{
  				echo("Error description: " . mysqli_error($this->db_connect()));
  			}

  		$Row=mysqli_fetch_assoc($result); 

 		 return $Row;
 		 }
	 
 
 function showTables(){
  $sql="SHOW TABLES FROM se";
  $result=$this->db_query($sql);
  return $result;
 }
}
 ?>