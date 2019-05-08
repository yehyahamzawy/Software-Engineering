<?php 
//Template
$title1 = "Hello";
$title2 = "testing page";
$previous =  array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" );
include_once "../adminPanel/basicPageHeader.php";
function viewAllUsers($data, $attributes, $users){}
echo ' 
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
                        ';
                        
                        // while($row = $data)
                        // {
                        //     echo '<option value= '.$Row["ID"].'>'.$attribute["attributeName"].' ('.$userType["type"].')</option>';
                        // }
                        
                        echo '
                        </select>
                        </div>
            <div class="form-group">
                    <label for="inputText3" class="col-form-label">Value</label>
                    <input id="inputText3" type="text" class="form-control" name = "value">
                </div>
            <div class="form-group">
                    <label for="inputText3" class="col-form-label">User</label>
                    
                    <select class="selectpicker dropup" name = "userID" >
                        
                        
                            
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
                          <br><br>';



    echo '
    
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

                    
                   
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>';




include_once "../adminPanel/basicPageFooter.php";

?>