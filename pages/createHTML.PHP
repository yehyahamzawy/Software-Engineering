<?php
include('connection.php');

if(isset($_POST['submit']))
{
    if(isset($_POST['editor'])&& !empty($_POST['editor']))
    {
        $content=$_POST['editor'];

    }
    else{
        $empty_error='<b class="text-danger text-center>fill text area</b>';

    }
    if(isset($content)&&!empty($content))
    {
         $sql="INSERT INTO `content`  (content) values('$content')";

    if(mysqli_query($connection,$sql)){
    
    }
    else{$submit_error='<b class="text-danger text-center>you are not able to submit  text here</b>';
    }
}
}


?>

<!DOCTYPE html>
<html>
<head>
<title>ck editor</title>
<link rel="stylesheet" type="text/css"href="ck/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"href="ck/font-awesome/css/font-awesome.min.css">
<script src="ck/ckeditor/ckeditor.js" type="text/javascript"></script>


</head>
<br>
<a  class="btn btn-success" href="ckhomePage.php">home</a>
<a class="btn btn-success"  href="viewCk.php">show</a>
<br>

<body>
<form action="" method="post" enctype="multipart/form-data">
<textarea class="ckeditor" name="editor"></textarea>
<br>
<br>
<button type ="submit" name="submit"  >submit</button>
</form>
</body>
</html>