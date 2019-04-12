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
include '../dashboard.html';
include_once '../class/uservaluesClass.php';
include_once '../class/userTypeAttributeClass.php';
include_once '../class/userClass.php';

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
                                        <li class="breadcrumb-item active" aria-current="page">User Value Table</li>
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
                            <button type="button"id="addattributebtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add User Value</button>
                          
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  <div class="modal-body">
                                  <form method="POST" action="uservaluesAdd.php">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Attributes</label>
                                                
                                                <select class="selectpicker dropup" name = "uniqueUserAttributeID" >
                                                    <!-- <?php 
                                                   $Connection= new mysqli("localhost", "root", "", "se");
                                                    $sql2 = "SELECT * FROM usertypeattributes";
                                                    $result2 = mysqli_query($Connection, $sql2);
                                                
                                                    
                                                    
   
                                                    while($Row = mysqli_fetch_array($result2))
                                                    {
                                                        $sql3 = "SELECT * FROM attribute WHERE ID = ".$Row["attributeID"];
                                                    $result3 = mysqli_query($Connection, $sql3);
                                                    $attribute = mysqli_fetch_array($result3);
                                                    echo $sql3;

                                                    $sql4 = "SELECT * FROM usertype WHERE ID = ".$Row["userTypeID"];
                                                    $result4 = mysqli_query($Connection, $sql4);
                                                    $userType = mysqli_fetch_array($result4);
                                                    echo $sql4;
                                                        echo '<option value= '.$Row["ID"].'>'.$attribute["attributeName"].' ('.$userType["type"].')</option>';
                                                    }
                                                    ?> -->
                                                    </select>
                                                    </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Value</label>
                                                <input id="inputText3" type="text" class="form-control" name = "value">
                                            </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User</label>
                                                
                                                <select class="selectpicker dropup" name = "userID" >
                                                    
                                                    <?php 
                                                    $Connection = new mysqli("localhost", "root", "", "se");
                                                    $sql = "SELECT * FROM user";
                                                    $result = mysqli_query($Connection, $sql);
   
                                                    while($Row = mysqli_fetch_array($result))
                                                    {
                                                        echo '<option value= '.$Row["ID"].'>'.$Row["firstName"].' '.$Row["lastName"].'</option>';
                                                    }
                                                    ?>
                                                        
                                                    </select>
                                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                        <button type="Submit" class="btn btn-default" >Submit</button>
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
                                <h5 class="card-header">UserValue Table</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Attribute</th>
                                                <th scope="col">Value</th>
                                                <th scope="col">User Full Name</th>
                                                <th scope="col">Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $uservalue=new userValue(2);
                                                $variable=$uservalue->ReadAll();
                                                foreach ($variable as $Row) {
                                                    $user=new User(sha1($Row['userID']));
                                                    $uta=new usertypeattribute($Row['userTypeOptionID']);
                                                    $y=$uta->getAttributeName();
                                                    foreach ($y as $key ) {
                                                        $attName=$key['attributeName'];
                                                        $attID=$key['ID'];
                                                    }
                                                    $name="NA";
                                                    $x=$user->Read();
                                                    foreach ($x as $key ) {
                                                        $name=$key['fName']." ".$key['lName'];
                                                    }
                                                    echo '<tr>
                                                <th scope="row">'.$Row["ID"].'</th>
                                                
                                                <td>'.$attName.'</td>
                                                <td>'.$Row["value"].'</td>
                                                <td>'.$name.'</td>
                                                <td class="iconrow">
                                                    <a href="edituservaluesForm.php?ID='.$Row["ID"].'&attID='.$attID.'"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="uservaluesDelete.php?ID='.$Row["ID"].'"> <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>';
                                                }

                                             ?>
                                        <!-- <?php
												 $Connection = new mysqli("localhost", "root", "", "se");
												 $sql = "SELECT * FROM uservalues";
                                                 $result = mysqli_query($Connection, $sql);
                                                 
                                                

                                                 while($Row = mysqli_fetch_array($result))
                                                 {
                                                      $sql1 = "SELECT * FROM user WHERE ID = ".$Row["userID"];
                                                 $result1 = mysqli_query($Connection, $sql2ql1);
                                                 $user = mysqli_fetch_array($result1);
                                                    $sql2 = "SELECT * FROM usertypeattributes WHERE ID = ".$Row["uniqueUserAttributeID"];
                                                    $result2 = mysqli_query($Connection, $sql2);
                                                    $attributeID = mysqli_fetch_array($result2); //getting attribute ID from usertypeattributes
                                                    
                                                    $sql3 = "SELECT * FROM attribute WHERE ID = ".$attributeID["attributeID"];
                                                    $result3 = mysqli_query($Connection, $sql3);
                                                    $attribute = mysqli_fetch_array($result3);

                                                    $sql4 = "SELECT * FROM usertype WHERE ID = ".$attributeID["userTypeID"];
                                                    $result4 = mysqli_query($Connection, $sql4);
                                                    $userType = mysqli_fetch_array($result4);



                                                    echo '<tr>
                                                <th scope="row">'.$Row["ID"].'</th>
                                                
                                                <td>'.$attribute["attributeName"].' ('.$userType["type"].')</td>
                                                <td>'.$Row["value"].'</td>
                                                <td>'.$user["firstName"].' '.$user["lastName"].'</td>
                                                <td class="iconrow">
                                                    <a href="edituservaluesForm.php?ID='.$Row["ID"].'"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="uservaluesDelete.php?ID='.$Row["ID"].'"> <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>';
                                                 }
                                             ?>
                                             -->
                                            
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
