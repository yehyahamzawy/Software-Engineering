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
         $sql="INSERT INTO content  (content) values('$content')";

    if(mysqli_query($connection,$sql)){

    }
    else{$submit_error='<b class="text-danger text-center>you are not able to submit  text here</b>';
    }
}
}


?>





<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">





    <!---------------CK--------------->
    <link rel="stylesheet" type="text/css"href="ck/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"href="ck/font-awesome/css/font-awesome.min.css">
<script src="../ck/ckeditor/ckeditor.js" type="text/javascript"></script>
<!----------------------->
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php
include '../dbheader.html';

?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php
include '../dashboard.html';

?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Create Announcement </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Create Announcement</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

<div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card-body">
                            <div>
<form action="" method="post" enctype="multipart/form-data">
<textarea class="ckeditor" name="editor"></textarea>
<br>

<div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary"name="submit"style="background-color:green;border-color:green">Save</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
</form>
</div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->
                    </div>


                    <!-- footer -->
            <!-- ============================================================== -->
            <?php
include '../dbfooter.html';

?>
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>