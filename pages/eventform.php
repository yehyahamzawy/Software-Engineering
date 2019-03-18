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
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="../assets/libs/css/bootstrap-timepicker.css">
     
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
        <?php
include '../dashboard.html';

?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Event Form </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Event Form</li>
                                            </ol>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        
                           
                            
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Enter Event Data</h3>
                                    
                                </div>
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Event Name</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Date</label>
                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" >
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Time</label>
                                            <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" class="form-control input-small input-group-addon">
            
        </div>
                                            </div>
       


                                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Sponsors</label><br>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Sponsor 1</span>
                                            </label>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Sponsor 2</span>
                                            </label>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Sponsor 3</span>
                                            </label>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
        
       
                                        </form>
                                    </div>
                                    </div>
                                    
                        
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <<?php
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
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    
    <script src="../assets/libs/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
    
</body>
 
</html>