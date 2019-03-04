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
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

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
                                    <h2 class="pageheader-title">Edit Form </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms Features</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Edit Employee Forms</li>
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
                                    <h3 class="section-title">Add New Form Attribute</h3>
                                    
                                </div>
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Attribute Name</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Attribute Description</label>
                                                <input  type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Options</label>
                                                
                                                <select class="selectpicker dropup" >
                                                    
                                                        <option>Input Text</option>
                                                        <option>Email</option>
                                                        <option>Numbers</option>
                                                        <option>Password</option>
                                                        <option>Textarea</option>
                                                        <option>File Input</option>
                                                        <option>ComboBox</option>
                                                        <option>CheckBox</option>
                                                        <option>Radio Buttons</option>
                                                        <option>Date</option>
                                                        <option>Phone</option>
                                                        
                                                        
                                                    </select>
                                                    </div>
                                                    <!--Input Text -->
                                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input Text</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <!------------------------------------>
                                            

                                                <!--Email -->
                                            <div class="form-group">
                                                <label for="inputEmail">Email address</label>
                                                <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                               
                                            </div>
                                            <!------------------------------------>




                                            <!--Numbers -->
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Number Input</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                                            </div>
                                                      <!------------------------------------>




                                            <!--Phone-->
                                            <div class="form-group">
                                            <label>Phone <small class="text-muted">(999) 999-9999</small></label>
                                            <input type="text" class="form-control phone-inputmask" id="phone-mask" placeholder="">
                                        </div>
                                           <!------------------------------------>




                                        <!--Password-->
                                        <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Password</label>
                            <input type="text" class="form-input" name="password" id="password"  />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"> </span>
                        </div>
                        <!------------------------------------>




                                       <!--repeat Password-->
                                         <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Repeat Password</label>
                            <input type="text" class="form-input" name="password" id="password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"> </span>
                        </div>
                       <!------------------------------------>






                       
                       
                       <!--TEXTAREA-->
                        <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">File Input</label>
                                            </div>

                        <!------------------------------------>





                                            <!-- DATE -->
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Date</label>
                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" >
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                             <!------------------------------------>


                                           
                                             <!-- Selection -->
                                            <div class="form-group">
                                            <label for="inputText4" class="col-form-label">Combobox options</label><br>
                                            <select class="selectpicker dropup" >
                                                    
                                                    <option>selection1</option>
                                                    <option>selection2</option>
                                                    
                                                    
                                                </select>
                                                <br><br>
                                               <br>
                                               <label for="inputText3" class="col-form-label">Enter Selection Name</label><br>
                                               <i class="far fa-circle "></i><span id="clickoption" class="optioncss"><input type="text" placeholder="option1" >Add Another</span><br><br>
                                               <input type="submit" value="ADD" class="addoptionbtn">
                                            </div>
                                            <br><br>

                                              <!------------------------------------>


                                           
                                              <!--check box -->
                                            <form>
                                            <h4>Checkbox</h4>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Option 1</span>
                                            </label>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option 2</span>
                                            </label>
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Option 3</span>
                                            </label>
                                            <br><br>
                                            <i class="far fa-square"></i><span id="clickoption" class="optioncss"><input type="text" placeholder="option1" >Add Another</span><br><br>
                                               <input type="submit" value="ADD" class="addoptionbtn">




                                             </form>
                                             <br><br><br>
                                             <!------------------------------------>


                                             <!--Radio Buttons -->
                                             <form>
                                             <h5>Radio Button</h5>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">Option 1</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Option 2</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Option 3</span>
                                            </label>
                                            <br><br>
                                            <i class="fas fa-dot-circle"></i><span id="clickoption" class="optioncss"><input type="text" placeholder="option1" >Add Another</span><br><br>
                                               <input type="submit" value="ADD" class="addoptionbtn">
                                        </form>
                                         <br><br>
                                        <!------------------------------------>  
                                        
                                        
                                         <!--Buttons -->
                                        <form>
                                        <div class="form-group">
                                        <h4>Buttons</h4>
                                                <br>

                                                <div class="choosebtns">
                                                <button type="button">Normal</button>
                                                <button type="button" id="red">Red</button>
                                                <button type="button" id="green">Green</button>
                                                <button type="button" id="blue">Blue</button>
                                                
                                                </div>
                                            </div>





                                          </form>
                                          <!------------------------------------>  
                                        
<br>

                                          <input type="submit" value="Submit" style="background-color:green; border-radius:10px;margin-left:480px;width:80px">

                                      
                                        </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <?php
include '../dbfooter.html';

?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
            `
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../assets/libs/js/main.js"></script>
    <script>
   
</script>
    <script>
    $(function(e) {
        "use strict";
        $(".date-inputmask").inputmask("dd/mm/yyyy"),
            $(".phone-inputmask").inputmask("(999) 999-9999"),
            $(".international-inputmask").inputmask("+9(999)999-9999"),
            $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
            $(".purchase-inputmask").inputmask("aaaa 9999-****"),
            $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
            $(".ssn-inputmask").inputmask("999-99-9999"),
            $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
            $(".currency-inputmask").inputmask("$9999"),
            $(".percentage-inputmask").inputmask("99%"),
            $(".decimal-inputmask").inputmask({
                alias: "decimal",
                radixPoint: "."
            }),

            $(".email-inputmask").inputmask({
                mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                greedy: !1,
                onBeforePaste: function(n, a) {
                    return (e = e.toLowerCase()).replace("mailto:", "")
                },
                definitions: {
                    "*": {
                        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                        cardinality: 1,
                        casing: "lower"
                    }
                }
            })
    });
    </script>
</body>
 
</html>