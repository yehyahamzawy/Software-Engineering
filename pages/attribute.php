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
include_once "../class/attributeClass.php";
include_once "../class/attributeTypeClass.php";

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
                            <h2 class="pageheader-title">Database Control </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Database Control</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Attribute Table</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- pop up add/delete window-->
                       <!-- Trigger/Open The Modal -->
                       <div class="container">
                            
                            <!-- Trigger the modal with a button -->
                            <button type="button"id="addattributebtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Attribute</button>
                          
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="attributeAdd.php">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Attribute Name</label>
                                                
                                                <input id="inputText3" type="text" class="form-control" name = "attributeName">
                                            </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">DataType</label>
                                                
                                                <select class="selectpicker dropup" name = "attributeDType" >
                                                            
                                                    <?php 
                                                    $attributeType=new attributeType(1);
                                                    $Row=$attributeType->ReadAll();
                                                    // echo "<select name='typeSelect'>";
                                                    foreach ($Row as $key) {
                                                        echo "<option value=".$key['ID'].">".$key['name']."</option>";
                                                    }
                                                    // echo "</select>";
                                                     ?>
                                
                                                    </select>
                                                
                                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                        <button type="Submit" class="btn btn-default">Submit</button>
                                    </form>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            
                          </div>
                          <br><br>
                        <!--end of popup add/delete window-->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Attribute Table</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Attribute</th>
                                                <th scope="col">DataType</th>
                                                <th scope="col">Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
												<?php
												 // $Connection = new mysqli("localhost", "root", "", "se");
												 // $sql = "SELECT * FROM attribute";
												 // $result = mysqli_query($Connection, $sql);
                                                $attribute=new Attribute(34);
                                                $Row=$attribute->ReadAll();
                                                foreach ($Row as $key ) {
                                                    echo ' <tr><th scope="row">'.$key["ID"].'</th>
                                                <td>'.$key["attributeName"].'</td>
                                                <td>';
                                                $attributeType=new attributeType($key["type"]);
                                                $variable= $attributeType->Read();
                                                foreach ($variable as $key1) {
                                                    echo $key1['name'];
                                                }
                                                echo '</td>';
                                                echo ' <td class="iconrow">
                                                  <a href="editAttributesForm.php?ID='.$key["ID"].'"><i class="fas fa-edit"  ></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="attributeDelete.php?ID='.$key["ID"].'"> <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>';
                                                }
												 // while($Row = mysqli_fetch_array($result))
												 // {
													 

												 // }
	
												?>
                                                
                                                  
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
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
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>