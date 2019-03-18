<?php 
/**
 * 
 */
// include "db.php";
include_once "CRUDinterface.php";
include "userTypeClass.php";
class User implements CRUD
{
	private $fname;
	private $lname;
	private $userTypeID;
	private $hashedID;
	// private $password;
	private $isDeleted;
	private $createdAt;
	private $updatedAt;
	private $ID;
	public $DB;
	private $output;
	//Fetches user info from db
	function __construct($ID)
	{
		$this->DB= new database();
		$this->output=array();
		$sql="SELECT * FROM user WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result))
			if(sha1($Row['ID'])==$ID){
				array_push($this->output, $Row);
				$this->fname=$Row["fName"];
				$this->lname=$Row["lName"];
				$this->userTypeID=$Row['userType'];
				$this->ID=$Row['ID'];
				// $this->updatedAt=0;
				return;
			}
			
		}
		
		
		
	

	function getfName(){
		return $this->fname;
	}

	function getlName(){
		return $this->lname;
	}

	function getUserType(){
		return $this->userTypeID;
	}

	function getID(){
		return $this->ID;
	}
	function query($sql){
		return $this->DB->db_query($sql);


	}

	// function setfName(){
	// 	return $this->fname;
	// }
	// function setlName(){
	// 	return $this->fname;
	// }
	// function setUserType(){
	// 	return $this->fname;
	// }


	function Create($fname,$lname,$usertype){
		// $this->showForm($usertype);
		
		

		$sql="INSERT INTO `user`( `fname`,`lname`, `userType`) VALUES ('$fname','$lname','$usertype')
			 
			";
		$this->DB->db_query($sql);
		$this->fname=$fname;
		$this->lname=$lname;
		$this->userTypeID=$usertype;
		$this->ID= mysqli_insert_id($this->DB->connect);

		// $sql="SELECT ID AS LastID FROM `user` WHERE ID = @@Identity";
		// echo "x";
		// $result=$this->DB->db_query_row($sql);
		// 	echo $result['lastID'];
				// while($Row=mysqli_fetch_array($result)){
		// 	echo "x";
		// 	echo $Row['lastID'];
		// }
		// $sql1="SELECT * FROM `user` WHERE `fname`=$fname AND `lname`=$lname WHERE isDeleted=0";
		// $x=$this->DB->db_query($sql1);
		// $this->ID=$x['ID'];
		// $this->ID=$x['ID'];


	}
	function Read(){
		// $this->output[]= "FirstName: ".$this->fname."<br>";
		// $this->output[]= "LastName: ".$this->lname."<br>";	
		// $this->output[]= "User Type: ".$this->userTypeID."<br>";
		return $this->output;

	}
	function ReadAll(){
		$this->output=array();
		$sql="SELECT * FROM user WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;
}


	
	function Update($newfName,$newlName,$newType,$userID){
		$this->updatedAt=date("Y-m-d H:i:s");
		$sql="SELECT * FROM user WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result))
			if(sha1($Row['ID'])==$userID){
				$sql="UPDATE user SET userType='$newType',fName='$newfName',lName='$newlName' ,updatedAt='$this->updatedAt' WHERE ID=".$Row['ID'];
				$query=$this->DB->db_query($sql);
				return;
			}
		
			
	}
	
	function getAllAttributes(){
		// echo "x";
		// $x= new userType($this->userTypeID);
		// $x->Read();
		$this->output=array();
		$sql="SELECT attribute.attributeName as aName,uservalues.value,usertypeattributes.attributeID,user.fName,user.lName FROM user INNER JOIN uservalues ON user.ID=uservalues.userID INNER JOIN usertypeattributes ON uservalues.userTypeOptionID=usertypeattributes.ID INNER JOIN attribute ON attribute.ID=usertypeattributes.attributeID WHERE user.ID=".$this->ID;

		$result=$this->DB->db_query($sql);
		
		while($Row = mysqli_fetch_array($result))
	{
		array_push($this->output, $Row);

	}
	
	return $this->output;
	}
	function readInSelect(){
		unset($this->output);
		$this->output[]= "<select name='selectUser'>";
		$sql="SELECT * FROM user";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result)){
			$this->output[]= "<option value=".$Row['ID'].">".$Row['fName']." ".$Row['lName']." </option>";
		}
		$this->output[]="</select>";
		return $this->output;
	}
	
	function showForm($userType){
		// echo " <script src='user.js'>";
		// echo "<script> olo();</script>";
		
		// echo " <script src='user.js'>";
		unset($this->output);
		$sql="SELECT attribute.attributeName as aName,attributetypes.name aTypeName, attributetypes.ID as aTypeID,usertypeattributes.ID as relationID FROM attribute INNER JOIN usertypeattributes ON usertypeattributes.attributeID=attribute.ID INNER JOIN attributetypes ON attribute.type=attributetypes.ID WHERE usertypeattributes.userTypeID=".$userType;
		$result=$this->DB->db_query($sql);
		$x= new userType($userType);
		
		 $this->output[]="<form action='submit_formEav.php' method='POST'>";
		 $this->output[]="<h3>";
		 foreach ($x->Read() as $key) {
		 	$key;}
		 $this->output[]="</h3>";
		 $this->output[]="<label>First Name:<input type='text' name='fname'></label><br>";
		 $this->output[]="<label>Last Name:<input type='text' name='lname'></label><br>";
		 $this->output[]="<input type='hidden' value=".$userType." name='type'>";

		while($Row = mysqli_fetch_array($result)){
				if($Row['aTypeID']==5 || $Row['aTypeID']==6){
						// createinput($Row['aTypeID']);
					 $this->output[]=$this->createinput($Row['aTypeID']);
				}
				else{
					$this->output[]= "<label>".$Row['aName']."</label><input type=".$Row['aTypeName']." name=".$Row['relationID']."><br>";
			
				}
			
		}
		// echo "<script src='user.js'>";
		$this->output[]= "<input type='submit' name=''></form>";
		
		return $this->output;
	}

function createinput($type){
		if($type=5){
			return"tala3 select";
		}
		else if($type=6){
			return "tala3 check box";
		}

	}



function Delete($id){
	$this->updatedAt=date("Y-m-d H:i:s");
	$sql="SELECT * FROM user WHERE isDeleted=0";
		$result=$this->DB->db_query($sql);
		while($Row = mysqli_fetch_array($result))
			if(sha1($Row['ID'])==$id){
				$sql="UPDATE user SET isDeleted=1,updatedAt='$this->updatedAt' WHERE ID=".$Row['ID'];
				$result=$this->DB->db_query($sql);
				return;
			}


	
}


}

 ?>