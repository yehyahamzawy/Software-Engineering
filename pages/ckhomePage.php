<?php
include('connection.php');
if(isset($_GET['delid']))
{
    $deluser = $_GET['delid'];
    $alertMessage ="<div class='alert alert-danger'>
    <p> delete this html page content? </p><br>
    <form action='".htmlspecialchars($_SERVER['PHP_SELF'])."?id=
    $deluser' method='post'>
    <input type ='submit' class='btn btn-danger btn-sm'
    name='confirm-delete' value='yes' delete!>
    <a href='#' class='close' data-dismiss='alert' 
    aria-label='close'>x</a>
    </form>
    </div>
    
    
    
    ";

}
if(isset($_POST['confirm-delete']))
{
    $id = $_GET['id'];
    $sql2 = "DELETE FROM  `content` WHERE id='$id'";
    $result2 = mysqli_query($connection,$sql2);
    if($result2){
        header('Location: viewCk.php');
    }
    else{
        echo"error";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>ck editor</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" type ="text/javascript"></script>

</head>
<body>
 <?php
 if(isset($alertMessage)) echo $alertMessage;
 
 
 ?>

<br>
<a  class="btn btn-success" href="home.php">home</a>
<a class="btn btn-success"  href="viewCk.php">show</a>
<br>
<br>
<table class="table table-striped table-bordered">
<tr>
<th>id</th>

<th>content</th>
<th>edit</th>
<th>delete</th>
</tr>
<?php

$sql="SELECT  * FROM `content`";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
{
    echo"<tr>";
    echo"<td>".$row["id"]."</td>";

    echo"<td>".$row["content"]."</td>";
    echo'<td><a href="updateCk.php?id='.$row['id'].'" >edit</td>';
     echo'<td><a href="viewCk.php?delid='.$row['id'].'">delete</td>';
  
echo"</tr>";

}

}


?>

</form>
</body>
</html>