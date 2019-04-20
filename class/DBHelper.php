<?php
class helper
{
  private $connect;
 		
 	function __construct($host, $name, $password, $database)
	{
		$this->db_connect($host, $name, $password, $database);
		
	}
	
  function db_connect($host, $name, $password, $database)
   {
 		  $this->connect = new mysqli($host, $name, $password, $database);
      if ($this->connect->connect_error) 
      {
        die("Connection failed: " . $connect->connect_error);
        
      }

        return $this->connect;
  }

  function db_query($query)
  {

    $result = mysqli_query($this->connect, $query);
    if (!$result)
    {
    echo("Error description: " . mysqli_error($this->db_connect()));
    }
  return $result;
  }


  function select($selection , $table, $condition)
  {
    $indexedArray = array();
    $sql = "SELECT ".$selection." FROM ".$table." WHERE isDeleted = 0";
    if ($condition != NULL)
    {
      $sql = $sql." AND ".$condition;
    }
    $result = $this->db_query($sql);
    
    while($Row = mysqli_fetch_array($result))
	{
		array_push($indexedArray, $Row);

  }
  return $indexedArray;
  }

  function insert($table, $data)
  {
      $colms = array_keys($data);
      $values = array_values($data);

      $sql ="INSERT INTO $table(`".join("`,`",$colms)."`) VALUES('".join("','", $values)."')";

      
     //foreach ($colms as $key => $val) 
      //{
         // $sql = $sql.$val."', '";
      //}
      //$sql = $sql.")";

    //var_dump($sql);
    
    //echo $sql;
    $this->db_query($sql);
     
     $sql = "SELECT MAX(ID) AS ID FROM $table WHERE ";

     foreach($data as $key => $val)
     {
         $sql = $sql.$key." = '".$val."' AND ";
     }
     $sql = $sql.array_pop($colms)." = '".array_pop($values)."'";
     
     $result = mysqli_query($this->connect, $sql);
     $Row = mysqli_fetch_array($result);
     $this->logIt("insert",$Row["ID"], $table);
      
      
  }

  function logIt($action,$rowID,$table)
  {
    $result = $this->select("*", $table, "ID = $rowID");
    $hashedRow = sha1(json_encode($result));
   
    $sql = "INSERT INTO log (`action`,`hashedRow`,`rowID`,`tableName`) VALUES ('$action','$hashedRow','$rowID','$table')";
    $this->db_query($sql);
    //echo $sql;
  }

}
?>