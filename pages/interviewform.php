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
                        
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        
                           
                            
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                       
                                <div class="card">
                                    <h1>Samusocial International Egypte</h1>
                                    <h2 style="margin:auto">EVALUATION GRID FOR JOB INTERVIEW</h2>
                                    <div class="card-body">
                                        <form>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Candicate name</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Job title</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                        <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Date of interview</label>
                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" >
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            </div>
                                        
                                            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                            
                               
                               
                                    <div class="table-responsive " style="margin-bottom:25px" >
                                        <table border="1"style="width:1280px" >
                                            <thead>
                                                <tr >
                                                    <th scope="col">Skill</th>
                                                    <th scope="col">Criteria</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td rowspan="2">Technical Skills</td>
                                                    <td>Experience</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                   
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Technicality</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline2" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline2" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                                <tr>





                                                <td rowspan="4">Intellctual skills</td>
                                                <td>Able to analyze and summarize</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline3" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline3"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline3" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline3" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline3" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label>
                                        </td>
                                                   
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Systematic: Thinking <br>Planning<br>Organizing</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline4"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline4" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline4" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline4" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Flexibilty <br>Adaptability</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline5" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline5"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline5" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline5" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline5" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Curiosity and <br>open mindeness</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline6" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline6"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline6" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline6" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline6" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>







                                                <tr>
                                                    
                                                    <td >Motivation</td>
                                                    <td>Interest in the job</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline7" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline7"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline7" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline7" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline7" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                   
                                                </tr>
          
                                                <td rowspan="3">Leadership Skills</td>
                                                <td>Authority</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline8" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline8"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline8" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline8" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline8" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label>
                                        </td>
                                                   
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Able to deal with responsibilites</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline9" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline9"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline9" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline9" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline9" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Spirit initiative <br>resourcefulness</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline10" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline10"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline10" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline10" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline10" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>


                                                <td rowspan="3">Generalities</td>
                                                <td>Interpersonal Skills</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline11" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline11"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline11" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline11" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline11" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label>
                                        </td>
                                                   
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Attitude</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline12" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline12"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline12" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline12" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline12" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>Able to express<br>
                                                herself/himself</td>
                                                    <td><textarea class="form-control"  ></textarea></td>
                                                    <td>   <label class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" name="radio-inline13" class="custom-control-input"><span class="custom-control-label">Excellent</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline13"class="custom-control-input" ><span class="custom-control-label">Very Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline13" class="custom-control-input"><span class="custom-control-label">Good</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline13" class="custom-control-input"><span class="custom-control-label">Poor</span>
</label>
<label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline13" class="custom-control-input"><span class="custom-control-label">Very Poor</span>
</label></td>
                                                </tr>
                                               
                                                <tr>
                                                    
                                                    <td >Final Evaluation</td>
                                                    <td colspan="3"height="70px"><textarea class="form-control"  ></textarea></td>
                                   
                                                   
                                                </tr>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
   
    
</body>
 
</html>