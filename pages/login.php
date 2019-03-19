<?php
session_start();

$Connection= new mysqli("localhost", "root", "", "olddb");
            
$sql1 = "SELECT uservalues.value, uservalues.userID FROM uservalues INNER JOIN usertypeattributes ON 
uservalues.uniqueUserAttributeID=usertypeattributes.ID INNER JOIN attribute ON 
attribute.ID=usertypeattributes.attributeID WHERE attribute.type = 'email'";

$sql2 = "SELECT uservalues.value, uservalues.userID FROM uservalues INNER JOIN usertypeattributes ON 
uservalues.uniqueUserAttributeID=usertypeattributes.ID INNER JOIN attribute ON 
attribute.ID=usertypeattributes.attributeID WHERE attribute.type = 'password'";

$emails = mysqli_query($Connection, $sql1);
$passwords = mysqli_query($Connection, $sql2);
//echo var_dump(mysqli_fetch_array($emails));
//echo $_POST["email"];
//echo $_POST["password"];

while($Row = mysqli_fetch_array($emails))
{
    if($_POST["email"]==$Row["value"])
    {
        
        while($Row2 = mysqli_fetch_array($passwords))
        {
            if($_POST["password"]==$Row2["value"] && $Row["userID"] == $Row2["userID"])
            {
               // echo "success <br>";
                $_SESSION["ID"] = $Row2["userID"];
                //echo $_SESSION["ID"];
                header('location:../pages/announcement.php');
                break;
            }
        }
        break;
    }
    
}


?>