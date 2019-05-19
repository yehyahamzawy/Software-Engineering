<?php 
include_once "CRUDinterface.php";
include_once "db.php";
/**
 * 
 */
class notification implements CRUD
{
	private $output;
	// private $Db;
	// function __construct(argument)
	// {
	// 	# code...
	// }


	static function create($recID,$senderID,$type){
		$DB=new Database();
		$sql="INSERT INTO `notification`(`recID`,`senderID`,`notificationType`) VALUES ($recID,$senderID,$type) ";
		$DB->db_query($sql);
	}
	function delete($id){
		notification::setIsDeleted($id);
	}
	function read(){}
	function readAll(){}

	static function readNew($recID){
		$output=array();
		$sql="SELECT * from notification where recID=".$recID." and isRead=0";
		
		$DB=new Database();
		$result=$DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($output, $Row);

	}
	
	return $output;
	}

	function update(){}
	static function setIsRead($id){
		$DB=new Database();
		$sql="UPDATE `notification` SET isRead=1 WHERE id=".$id;
		$DB->db_query($sql);

	}
	static function setIsDeleted($id){
		$DB=new Database();
		$sql="UPDATE `notification` SET isDeleted=1 WHERE id=".$id;
		$DB->db_query($sql);

	}
}
 ?>