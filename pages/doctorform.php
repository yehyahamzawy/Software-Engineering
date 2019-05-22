<!doctype html>
<?php

include "../MVC/controller/validations.php"


?>
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
include '../dbheader.php';

?>
<?php
include '../dashboard.html';

?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
 
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
                                    <h2 class="pageheader-title">Doctor Form </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Doctor Form</li>
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
                                    <h3 class="section-title">Enter Doctor Data</h3>
                                    
                                </div>
                                <div class="card">
                                    
                                    <div class="card-body">
                                    <div class="card-body">
                                    <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">First Name</label>
                                                <input id="inputText3" type="text" class="form-control"  pattern="[A-Za-z]{3,}"title=" Three or more characters with no spaces" required>
                                                
                                              </div>
                                              <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Last Name</label>
                                                <input id="inputText3" type="text" class="form-control"  pattern="[A-Za-z]{3,}"title=" Three or more characters with no spaces" required>
                                                
                                              </div>
                                       
                                           
                                            <div class="form-group">
                                                <label for="inputEmail">Email address</label>
                                                <input id="inputEmail" type="text" placeholder="name@example.com" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Mobile Number</label>
                                                <input id="inputText4" type="text" class="form-control" placeholder="Numbers" pattern="[0][1][0-9]{9}"title="11 numbers starts with 0 and 1"required>
                                               
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Date of Birth</label>
                                                <div class="input-group date" >
                                                    <input type="date" class="form-control datetimepicker-input"  min="1940-12-31" max="2000-12-31" required>
                                                   
                                              
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label" >Your medical registration number</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers" min="0" max="999999" required>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Specialist</label>
                                                
                                                <select class="browser-default custom-select" >
                                                    
                                                        <option>Allergy Specialist</option>
                                                        <option>Pediatrician</option>
                                                        <option>Family Physician</option>
                                                    </select>
                                                    </div>
                                            <div class="form-group">
                                                
                                                    <label >Country</label>
                                                    <select class="browser-default custom-select"  >
                                                        
                                                            <option>Egypt</option>
                                                            <option>France</option>
                                                            <option>America</option>
                                                        </select>
                                                        <br>
                                                        <label for="inputText3" class="col-form-label">Gouvernement</label>

                                                        <select class="browser-default custom-select">
                                                                <option>Alex</option>
                                                                <option>Giza</option>
                                                                <option>Cairo</option>
                                                            </select>
                                                            <br>
                                                            <label for="inputText3" class="col-form-label">City</label>
                                                            <select class="browser-default custom-select">
                                                                    <option>Shobra</option>
                                                                    <option>Maadi</option>
                                                                    <option>Nasr City</option>
                                                                </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Languages you can speak</label>
                                                    
                                                    <select class="custom-select" multiple required>
                                                        
                                                            <option>English</option>
                                                            <option>Arabic</option>
                                                            <option>Frensh</option>
                                                        </select>
                                                        </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Experience</label>
                                                <br>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">1-5</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">6-10</span>
                                                    </label>
                                                    <label class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">No Experience</span>
                                                    </label>
                                            </div>
                                           
                                            
                                           
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">More Information</label>
                                                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                                                <span class="error"style="color:red"><?php echo $message_error ?>   </span>
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
    
    <script>

    </script>
</body>
 
</html>