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
include '../dashboard.php';
include_once '../class/userClass.php';
include_once '../class/userTypeClass.php';

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
                                    <h2 class="pageheader-title">Employee Form </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Employee Form</li>
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
                                

                                    <h3 class="section-title">Enter Employee Data</h3>
                                    
                                </div>
                                <!-- <div class='eav'> -->
                                    <h3>Choose Employee Type</h3>
                                    <select id='userType' onchange="UserTypeForm();">
                                        <?php 
                                            $userType=new userType(1);
                                            $output=$userType->ReadAll();
                                            foreach ($output as $key ) {
                                                echo "<option value=".$key['ID'].">".$key['type']."</option>";
                                            }
                                         ?>
                                    </select>
                                    <!-- <button >Show Form</button> -->
<!--                              <?php   
                                        $user=new User(2);
                                        $output=$user->showForm(2);



                                     ?>
 --> 

                                <!-- </div> -->
                                <div class="card eav">  <div class="card-body"></div>   </div>
                                    
                                    
                                       
                                        <form>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">First Name</label>
                                                <input id="inputText3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Last Name</label>
                                                <input  type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Email address</label>
                                                <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Mobile Number</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Date of Birth</label>
                                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" >
                                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Address</label>
                                                    <br>
                                                    <label >Country</label>
                                                    <select class="selectpicker dropup"  >
                                                        
                                                            <option>Egypt</option>
                                                            <option>France</option>
                                                            <option>America</option>
                                                        </select>
                                                        <br>
                                                        <label for="inputText3" class="col-form-label">Gouvernement</label>

                                                        <select class="selectpicker dropup">
                                                                <option>Alex</option>
                                                                <option>Giza</option>
                                                                <option>Cairo</option>
                                                            </select>
                                                            <br>
                                                            <label for="inputText3" class="col-form-label">City</label>
                                                            <select class="selectpicker dropup">
                                                                    <option>Shobra</option>
                                                                    <option>Maadi</option>
                                                                    <option>Nasr City</option>
                                                                </select>
                                                </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Job</label>
                                                <input  type="text" class="form-control">
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
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">File Input</label>
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">More Information</label>
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
                                    
                        
            <!--/ ============================================================== 
            footer -->
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
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script src="../assets/vendor/datepicker/moment.js"></script>
    <script src="../assets/vendor/datepicker/tempusdominus-bootstrap-4.js"></script>
    <script src="../assets/vendor/datepicker/datepicker.js"></script>
    <script>
        function UserTypeForm()
    {
        // alert(1);
        var action = 'fetch_form';
        var userType = $('#userType').val();
        // alert(userType);
        // var storage = get_filter('storage');
        $.ajax({
            url:"EavForm.php",
            method:"POST",
            data:{action:action, userType:userType },
            success:function(data){
                $('.eav').html(data);
            }
        });
    }

    //         function submit_form()
    // {
    //     // alert(1);
    //     var action = 'fetch_form';
    //     var userType = $('#userType').val();
    //     // alert(userType);
    //     // var storage = get_filter('storage');
    //     while($input)
    //     $.ajax({
    //         url:"EavForm.php",
    //         method:"POST",
    //         data:{action:action, userType:userType },
    //         success:function(data){
    //             $('.eav').html(data);
    //         }
    //     });
    // }



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