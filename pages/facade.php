

<?php
include_once "..\class\attributeTypeClass.php";
include_once "..\class\attributeClass.php";
include_once "..\class\userClass.php";
class facade{
    
public $attribute;
public $user;
public function __construct($ID){
    
$this->attribute=new attributes(1);
$this->attributeType=new attributeType ($ID);
$this->user=new User(0);

}


}




    ?>