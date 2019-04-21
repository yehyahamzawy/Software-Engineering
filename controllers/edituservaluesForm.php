<?php
$pageID = 4;
// include_once "../includes/session.php"


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
include '../dashboard.php';
include_once '../class/userClass.php';
?>
       
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <!-- div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">update user value  </h2>
                                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">edit value Form</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        
                           
                            
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">update user value</h3>
                                    <!-- ============================================================== -->
                
                        <!-- ============================================================== -->
                                </div>
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <form class="form-control" method = "POST" action = <?php echo "'uservalueEdit.php?ID=".$_GET["ID"]."'"?>>
                                           <br>
                                         
                                         
                                                        <!-- <label for="inputText3" value=".form-control-lg" class="col-form-label">
                                                            USER
                                                        </label>

                                                        <select class="selectpicker dropup" name = "user" value=".form-control-lg"   id= "userType1">
                                                            <?php 
                                                            $user=new User(sha1(3));
                                                            $variable=$user->ReadAll();
                                                            foreach ($variable as $key ) {
                                                                echo "<option value=".$key['ID'].">".$key['fName']." ".$key['lName']."</option>";
                                                            }


                                                             ?>
                                                        </select> -->
                                                        

                                                        <br>    

                                        <!--  <label for="inputText3" value=".form-control-lg" class="col-form-label">Attributes</label>

                                         <div class="attSelect"></div> -->
                                       <!--   <select class="selectpicker dropup" value=".form-control-lg" name = "userID">
                                            <?php 
                                            $att=new Attribute(2);
                                            $att
                                             ?>
                                              </select> -->
                         
                                           
                                             
                                             <br>

                                             <div class='value'    ><?php   

                                             //      <?php 

                                                 include_once '../class/attributeTypeClass.php';
                                                 $att=new Attribute($_GET['attID']);
                                                        $x=$att->getType();
                                                $atc=new attributeType($x);
                                                echo "NEW VALUE<br>";
                                                $atc->showInput($x,"choice",$_GET['attID']); ?>
                                             </div>

                                                            
                                                <!-- </div> -->
                                     
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
    <script type="text/javascript">
    $("#userType1").change(function(){
  
        
        var action = 'get_att';
        var userType = $('#userType1').val();
        
        $.ajax({
            url:"get_att.php",
            method:"POST",
            data:{action:action, userType:userType },
            success:function(data){
                
                $('.attSelect').html(data);
            }
        });
        return false;
    }
);     
    



    // function(){
    //     // alert(1);
    //     var action = 'get_att';
    //     var userType = $('#userType1').val();
    //     alert(2);
    //     // var storage = get_filter('storage');
    //     $.ajax({
    //         url:"get_att.php",
    //         method:"POST",
    //         data:{action:action, userType:userType },
    //         success:function(data){
    //             alert(3);
    //             $('.attSelect').html(data);
    //         }
    //     });
    //     return false;
    // }

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

<script>

    
    function tester()
    {
        jQuery.ajax({
            url: "stars.php",
            data: "uniqueuserattributeID=" + $("#uniqueuserattributeID").val(),
            type: "Post",
            success:function(data)
            {
                $("#User_AJAX_Form").html(data);
                $("#test").html("");
            }
        });
    }
</script>