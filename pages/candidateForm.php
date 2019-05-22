
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
    <style type="text/css">
        input[type="radio"]{
            display:inline-block;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <!-- <?php
// include '../dbheader.html';

?> -->
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php
include '../dashboard.php';
// include_once '../class/userClass.php';
// include_once '../class/userTypeClass.php';

?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                   <div style="text-align: center">
        <form method="POST" action='../controllers/candidateFormController.php'>
    <h1 style="text-align: center">Interview Form</h1>
    FullName:<input type="text" name="fullname" pattern="[A-Za-z][A-Za-z ]{2,}"title=" Three or more characters " required><br><br>
    Email:<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"required><br><br>
    Mobile:<input type="text" name="num" pattern="[0][1][0-9]{9}"title="11 numbers starts with 0 and 1"required><br><br>
    <h4>Experience</h4>
 <input type="radio" name="Experience" value="5"> Excellent
<input type="radio" name="Experience" value="4" checked=""> Very Good
<input type="radio" name="Experience" value="3"> Good
<input type="radio" name="Experience" value="2"> Poor
<input type="radio" name="Experience" value="1"> Very Poor<br>
<input type="text" name="expComm"pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Technicality</h4>
    <input type="radio" name="Technicality" value="5"> Excellent
<input type="radio" name="Technicality" value="4" checked=""> Very Good
<input type="radio" name="Technicality" value="3"> Good
<input type="radio" name="Technicality" value="2"> Poor
<input type="radio" name="Technicality" value="1"> Very Poor<br>
<input type="text" name="TechnicalityComm"pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Ability to analyze and summarize</h4>
    <input type="radio" name="Analyze" value="5"> Excellent
<input type="radio" name="Analyze" value="4" checked=""> Very Good
<input type="radio" name="Analyze" value="3"> Good
<input type="radio" name="Analyze" value="2"> Poor
<input type="radio" name="Analyze" value="1"> Very Poor<br>
<input type="text" name="AnalyzeComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Systematic Thinking</h4>
    <input type="radio" name="Thinking" value="5"> Excellent
<input type="radio" name="Thinking" value="4" checked=""> Very Good
<input type="radio" name="Thinking" value="3"> Good
<input type="radio" name="Thinking" value="2"> Poor
<input type="radio" name="Thinking" value="1"> Very Poor<br>
<input type="text" name="ThinkingComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Flexibility/Adaptability</h4>
    <input type="radio" name="Flexibility" value="5"> Excellent
<input type="radio" name="Flexibility" value="4" checked=""> Very Good
<input type="radio" name="Flexibility" value="3"> Good
<input type="radio" name="Flexibility" value="2"> Poor
<input type="radio" name="Flexibility" value="1"> Very Poor<br>
<input type="text" name="FlexibilityComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Curiosity and open-mindedness</h4>
    <input type="radio" name="Curiosity" value="5"> Excellent
<input type="radio" name="Curiosity" value="4" checked=""> Very Good
<input type="radio" name="Curiosity" value="3"> Good
<input type="radio" name="Curiosity" value="2"> Poor
<input type="radio" name="Curiosity" value="1"> Very Poor<br>
<input type="text" name="CuriosityComm"pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Interest in the job</h4>
    <input type="radio" name="Interest" value="5"> Excellent
<input type="radio" name="Interest" value="4" checked=""> Very Good
<input type="radio" name="Interest" value="3"> Good
<input type="radio" name="Interest" value="2"> Poor
<input type="radio" name="Interest" value="1"> Very Poor<br>
<input type="text" name="InterestComm"pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Authority</h4>
    <input type="radio" name="Authority" value="5"> Excellent
<input type="radio" name="Authority" value="4" checked=""> Very Good
<input type="radio" name="Authority" value="3"> Good
<input type="radio" name="Authority" value="2"> Poor
<input type="radio" name="Authority" value="1"> Very Poor<br>
<input type="text" name="AuthorityComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Able to deal with responsibility</h4>
    <input type="radio" name="responsibility" value="5"> Excellent
<input type="radio" name="responsibility" value="4" checked=""> Very Good
<input type="radio" name="responsibility" value="3"> Good
<input type="radio" name="responsibility" value="2"> Poor
<input type="radio" name="responsibility" value="1"> Very Poor<br>
<input type="text" name="responsibilityComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Spirit initiative /resourcefulness</h4>
    <input type="radio" name="Spirit" value="5"> Excellent
<input type="radio" name="Spirit" value="4" checked=""> Very Good
<input type="radio" name="Spirit" value="3"> Good
<input type="radio" name="Spirit" value="2"> Poor
<input type="radio" name="Spirit" value="1"> Very Poor<br>
<input type="text" name="SpiritComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Interpersonal Skills</h4>
    <input type="radio" name="Interpersonal" value="5"> Excellent
<input type="radio" name="Interpersonal" value="4" checked=""> Very Good
<input type="radio" name="Interpersonal" value="3"> Good
<input type="radio" name="Interpersonal" value="2"> Poor
<input type="radio" name="Interpersonal" value="1"><br>
<input type="text" name="InterpersonalComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
    <h4>Attitude</h4>
    <input type="radio" name=" Attitude"value="5"> Excellent
<input type="radio" name="Attitude" value="4" checked=""> Very Good
<input type="radio" name="Attitude" value="3"> Good
<input type="radio" name="Attitude" value="2"> Poor
<input type="radio" name="Attitude" value="1"> Very Poor<br>
<input type="text" name="AttitudeComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px">
<h4>Able to express/handle herself/himself</h4>
    <input type="radio" nahandleme="handle" value="5"> Excellent
<input type="radio" name="handle" value="4" checked=""> Very Good
<input type="radio" name="handle" value="3"> Good
<input type="radio" name="handle" value="2"> Poor
<input type="radio" name="handle" value="1"> Very Poor<br>
<input type="text" name="handleComm" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required style="height:120px"><br>
<input type="submit" name="sub">    
</form>
</div>

                   </div>
                                    
                                    
                                       
                                     
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
            url:"../controllers/EavForm.php",
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