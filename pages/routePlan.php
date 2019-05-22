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
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/multi-select/css/multi-select.css">
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
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php
include '../dashboard.html';
 
 include_once "../class/userClass.php";
  

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
                            <h2 class="pageheader-title">Mission</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Mission</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Select Team members</h3>
                                    
                                </div>
                                <form action="../controllers/createMission.php" method="POST">
                                <div class="card" style="margin:200px;margin-left:200px;margin-top:0px;">
                                   <div class="card-body">

                                    <div class="form-group" >
                                         <label for="inputText3" class="col-form-label" pattern="[A-Za-z][A-Za-z ]{2,}" required>Name/title</label>
                                    <div class="input-group " id="datetimepicker4" data-target-input="nearest">
                                        <input type="text" name="name" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                        
                                    </div>

                                        <label for="inputText3" class="col-form-label">day</label>
                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                        <input type="date" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker4" min='2019-05-22' max='2030-12-31'required />
                                        
                                </div></div>
                                <br>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:50px">
                            <div class="card">
                                <h5 class="card-header">Doctors</h5>
                                <div class="card-body">
                                    <select name="doctor" class="selectpicker dropup" required>
                                        <?php 
                                            $x=User::readType(3);
                                            foreach ($x as $k) {
                                             echo "<option value=".sha1($k['ID']).">".$k['fName']." ".$k['lName']."</option>";
    
                                            }
                                         ?> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:50px">
                            <div class="card">
                                <h5 class="card-header">Pyshcologist</h5>
                                <div class="card-body">
                                    <select name="psych" class="selectpicker dropup" required>
                                        <?php 
                                            $x=User::readType(4);
                                            foreach ($x as $k) {
                                             echo "<option value=".sha1($k['ID']).">".$k['fName']." ".$k['lName']."</option>";
    
                                            }
                                         ?> 
                                    </select>
                                </div>
                            </div>
                        </div>

                 
                        <div class="col-xl-4 col-lg-6 col-md-6    col-sm-12 col-12"style="margin-left:50px; ">
                            <div class="card">
                                <h5 class="card-header">Assistant</h5>
                                <div class="card-body" >
                                    <select name="assistant" class="selectpicker dropup" required>
                                        <?php 
                                            $x=User::readType(2);
                                            foreach ($x as $k) {
                                             echo "<option value=".sha1($k['ID']).">".$k['fName']." ".$k['lName']."</option>";
    
                                            }
                                         ?> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:50px;">
                            <div class="card" >
                                <h5 class="card-header">Driver</h5>
                                <div class="card-body" >
                                    <select name ="driver" class="selectpicker dropup">
                                    <?php 
                                            $x=User::readType(1);
                                            foreach ($x as $k) {
                                             echo "<option value=".sha1($k['ID']).">".$k['fName']." ".$k['lName']."</option>";
    
                                            }
                                         ?> 
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-left:50px">
                            <label for="exampleFormControlTextarea1" >additional Information</label>
                            <input type="text" name="description"class="form-control" id="exampleFormControlTextarea1" rows="3" style="height:250px;width:400px" pattern="[A-Za-z0-9][A-Za-z0-9 ]{2,}" required>
                        </div>
                        <!-- div class="form-group" style="margin-left: 50px">
                            <label for="exampleFormControlTextarea1">Location</label>
                            <br>
                            <iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
                        </div> -->
                        <br><br>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right" >
                                <button type="submit" class="btn btn-space btn-primary">Create</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </form>
                </div>
</div>
                </div>
                        <!-- ============================================================== -->
                        <!-- end callbacks multiselectd  -->
                        <!-- ============================================================== -->
                    </div>
                    <
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
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $('#my-select, #pre-selected-options').multiSelect()
    </script>
    <script>
    $('#callbacks').multiSelect({
        afterSelect: function(values) {
            
        },
        afterDeselect: function(values) {
            
        }
    });
    </script>
      <script>
    $('#callbacks2').multiSelect({
        afterSelect: function(values) {
            
        },
        afterDeselect: function(values) {
           
        }
    });
    </script>
      <script>
    $('#callbacks3').multiSelect({
        afterSelect: function(values) {
          
        },
        afterDeselect: function(values) {
          
        }
    });
    </script>
      <script>
    $('#callbacks4').multiSelect({
        afterSelect: function(values) {
            
        },
        afterDeselect: function(values) {
            
        }
    });
    </script>
    <script>
    $('#keep-order').multiSelect({ keepOrder: true });
    </script>
    <script>
    $('#public-methods').multiSelect();
    $('#select-all').click(function() {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').click(function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    $('#select-100').click(function() {
        $('#public-methods').multiSelect('select', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
    });
    $('#deselect-100').click(function() {
        $('#public-methods').multiSelect('deselect', ['elem_0', 'elem_1'..., 'elem_99']);
        return false;
    });
    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', { value: 42, text: 'test 42', index: 0 });
        return false;
    });
    </script>
    <script>
    $('#optgroup').multiSelect({ selectableOptgroup: true });
    </script>
    <script>
    $('#disabled-attribute').multiSelect();
    </script>
    <script>
    $('#custom-headers').multiSelect({
        selectableHeader: "<div class='custom-header'>Selectable items</div>",
        selectionHeader: "<div class='custom-header'>Selection items</div>",
        selectableFooter: "<div class='custom-header'>Selectable footer</div>",
        selectionFooter: "<div class='custom-header'>Selection footer</div>"
    });
    </script>
</body>
 
</html>