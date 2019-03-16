<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->



    <!-- Access control Section -->
 <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="accesscontrol.js"></script>
<link href="accesscontrol.css"rel="stylesheet">


<!-------------------------------------------------------------------------------------------->



    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">









    
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

   

<div class="bigdiv">
<div class="container">
	<div class="row">
		<h2 class="chooseut">Choose User Type </h2>
        <div class="form-group">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="search" class="form-control" id="search" placeholder="Add your options..">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="form-group">
            <div class="searchable-container">
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Doctor</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>

                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Coutry representitive</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Psychologist</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>


                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Financial manager</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>



                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Admin</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>

                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input class="checkboxut" type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Driver</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                    <div class="info-block block-info clearfix">
                        <div class="square-box pull-left">
                            
                        </div>
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                    <h5>Hr Manager</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

<br>
<div class="card-body">
                                        <form>
                                        <label for="inputText3" class="col-form-label">Website</label>
                                                
                                                <select class="selectpicker dropup"  >
                                                    
                                                        <option>example1</option>
                                                        <option>example2</option>
                                                        <option>example3</option>
                                            </select>
</form>
</div>
<br>
<div class="col-sm-6 pl-0 submit">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>

</div>



</div>

                    <?php
include '../dbfooter.html';

?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
   
</body>
 
</html>