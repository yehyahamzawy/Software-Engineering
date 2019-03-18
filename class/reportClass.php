<?php 

/**
 * 
 */
include_once 'db.php';
class Report
{	private $DB;
	private $output;
	
	function __construct()
	{
		$this->DB=new Database();
		$this->output= array();
	}
	function reportUserType(){
		$ids=array();
		$names=array();
		$sql="SELECT * FROM userType WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row=mysqli_fetch_array($result)){
			array_push($ids,$Row['ID']);
			array_push($names,$Row['type']);
		}
		for ($i=0; $i <sizeof($ids)  ; $i++) { 
			$sql="SELECT COUNT(ID) as num FROM user WHERE usertype=".$ids[$i];
			$result=$this->DB->db_query($sql);
			While($Row=mysqli_fetch_array($result)){
				$x=array("label"=> $names[$i],"y"=> $Row['num']);
				array_push($this->output,$x);
		}

			

		}
		return $this->output;

	}
}
 ?>