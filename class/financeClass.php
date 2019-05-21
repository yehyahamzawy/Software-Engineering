<?php 
include_once 'db.php';
include_once 'userClass.php';
/**
 * 
 */
class finance extends User
{
	
	static function ReadAllUnconfirmed(){
      $DB=new database();
      $output=array();
      $sql="SELECT * FROM financialRequests where isConfirmed=0 and isDeleted=0";
      $result=$DB->static_query($sql);
    while($Row = mysqli_fetch_array($result))
    {
      array_push($output, $Row);

    } 
    return $output;
    }

    static function confirmFinance($ID){
      $DB=new database();
      $sql="UPDATE `financialRequests` SET `isConfirmed`=1 WHERE id=".$ID;
      $DB->static_query($sql);

    }
    static function deleteFinance($ID){
      $DB=new database();
      $sql="UPDATE `financialRequests` SET `isDeleted`=1 WHERE id=".$ID;
      $DB->static_query($sql);

    }
    static function totalYearlyBudget(){
    	
    }
}

 ?>