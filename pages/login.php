<?php
session_start();

$Connection= new mysqli("localhost", "root", "", "se1");
            
$sql1 = "SELECT uservalues.value, uservalues.userID FROM uservalues INNER JOIN usertypeattributes ON 
uservalues.userTypeOptionID=usertypeattributes.ID INNER JOIN attribute ON 
attribute.ID=usertypeattributes.attributeID WHERE attribute.type = 1";

$sql2 = "SELECT uservalues.value, uservalues.userID FROM uservalues INNER JOIN usertypeattributes ON 
uservalues.userTypeOptionID=usertypeattributes.ID INNER JOIN attribute ON 
attribute.ID=usertypeattributes.attributeID WHERE attribute.type = 7";

$emails = mysqli_query($Connection, $sql1);
$passwords = mysqli_query($Connection, $sql2);
//echo var_dump(mysqli_fetch_array($emails));
//echo $_POST["email"];


while($Row = mysqli_fetch_array($emails))
{
    if($_POST["email"]==$Row["value"])
    {
        
        while($Row2 = mysqli_fetch_array($passwords))
        {
            
            
            if(sha1($_POST["password"])==$Row2["value"] && $Row["userID"] == $Row2["userID"])
            {
               // echo "success <br>";
                $_SESSION["userID"] = $Row2["userID"];
                //echo $_SESSION["ID"];
                header('location:permissionTable.php');
                break;
            }
        }
        break;
    }
    
}


?>