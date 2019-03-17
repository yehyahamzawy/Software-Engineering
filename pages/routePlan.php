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
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- multiselects  -->
                <!-- ============================================================== -->
                
                    <!-- <div class="row">
                        ============================================================== 
                        boxed multiselect  
                         ============================================================== 
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Boxed Multiselect</h5>
                                <div class="card-body">
                                    <select multiple="multiple" id="my-select" name="my-select[]">
                                        <option value='elem_1'>Elements 1</option>
                                        <option value='elem_2'>Elements 2</option>
                                        <option value='elem_3'>Elements 3</option>
                                        <option value='elem_4'>Elements 4</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end boxed multiselect  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- pre multiselectd options  -->
                        <!-- ============================================================== -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Pre-selected options</h5>
                                <div class="card-body">
                                    <select id='pre-selected-options' multiple='multiple'>
                                        <option value='elem_1' selected>Elements 1</option>
                                        <option value='elem_2'>Elements 2</option>
                                        <option value='elem_3'>Elements 3</option>
                                        <option value='elem_4' selected>Elements 4</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end pre multiselectd options  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- callbacks multiselectd  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Select Team members</h3>
                                    
                                </div>
                                <div class="card" style="margin:200px;margin-left:200px;margin-top:0px;">
                                   

                                    <div class="form-group" style="height:50px;width:800px;margin-left:150px">
                                        <label for="inputText3" class="col-form-label">day</label>
                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker" >
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:300px">
                            <div class="card">
                                <h5 class="card-header">doctors</h5>
                                <div class="card-body">
                                    <select id='callbacks' multiple='multiple'>
                                        <option value='elem_1'>mohmed</option>
                                        <option value='elem_2'>yehia</option>
                                        <option value='elem_3'>hazzem</option>
                                        <option value='elem_4'>kareem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:300px">
                            <div class="card">
                                <h5 class="card-header">pyshcology</h5>
                                <div class="card-body">
                                    <select id='callbacks2' multiple='multiple'>
                                        <option value='elem_1'>mohmed</option>
                                        <option value='elem_2'>yehia</option>
                                        <option value='elem_3'>hazzem</option>
                                        <option value='elem_4'>kareem</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                 
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:300px">
                            <div class="card">
                                <h5 class="card-header">assistant</h5>
                                <div class="card-body">
                                    <select id='callbacks3' multiple='multiple'>
                                        <option value='elem_1'>mohmed</option>
                                        <option value='elem_2'>yehia</option>
                                        <option value='elem_3'>hazzem</option>
                                        <option value='elem_4'>kareem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12"style="margin-left:300px;">
                            <div class="card">
                                <h5 class="card-header">driver</h5>
                                <div class="card-body">
                                    <select id='callbacks4' multiple='multiple'>
                                        <option value='elem_1'>mohmed</option>
                                        <option value='elem_2'>yehia</option>
                                        <option value='elem_3'>hazzem</option>
                                        <option value='elem_4'>kareem</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-left:150px">
                            <label for="exampleFormControlTextarea1" >additional Information</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height:50px;width:800px"></textarea>
                        </div>
                        <div class="form-group" style="margin-left:150px">
                            <label for="exampleFormControlTextarea1">Location</label>
                            <br>
                            <iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
                        </div>
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
                    <!-- <div class="row"> -->
                        <!-- ============================================================== -->
                        <!-- keep over multiselectd  -->
                        <!-- ============================================================== -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Keep Over</h5>
                                <div class="card-body">
                                    <select id='keep-order' multiple='multiple'>
                                        <option value='elem_1'>Elements 1</option>
                                        <option value='elem_2'>Elements 2</option>
                                        <option value='elem_3'>Elements 3</option>
                                        <option value='elem_4'>Elements 4</option>
                                        <option value='elem_5'>Elements 5</option>
                                        <option value='elem_6'>Elements 6</option>
                                        <option value='elem_7'>Elements 7</option>
                                        <option value='elem_8'>Elements 8</option>
                                        <option value='elem_9'>Elements 9</option>
                                        <option value='elem_10'>Elements 10</option>
                                        <option value='elem_11'>Elements 11</option>
                                        <option value='elem_12'>Elements 12</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end keep over multiselectd  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- optgroup multiselectd  -->
                        <!-- ============================================================== -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Optgroup</h5>
                                <div class="card-body">
                                    <select id='optgroup' multiple='multiple'>
                                        <optgroup label='Friends'>
                                            <option value='1'>Yoda</option>
                                            <option value='2' selected>Obiwan</option>
                                        </optgroup>
                                        <optgroup label='Enemies'>
                                            <option value='3'>Palpatine</option>
                                            <option value='4' disabled>Darth Vader</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end optgroup multiselectd  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- disabled multiselectd  -->
                        <!-- ============================================================== -->
                        <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Disabled attribute</h5>
                                <div class="card-body">
                                    <select id='disabled-attribute' disabled='disabled' multiple='multiple'>
                                        <option value='elem_1'>Elements 1</option>
                                        <option value='elem_2'>Elements 2</option>
                                        <option value='elem_3'>Elements 3</option>
                                        <option value='elem_4'>Elements 4</option>
                                        <option value='elem_5'>Elements 5</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <!-- ============================================================== -->
                        <!-- disabled multiselectd  -->
                        <!-- ============================================================== -->
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