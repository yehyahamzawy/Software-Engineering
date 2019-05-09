<?php 

class attributesview{
private $title1;
private $title2;
private $previous;

  public function __construct()
  {
  $this->title1 = "Hello everyone xD";
  $this->title2 = "Attributes testing page";
  $this->previous =  array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" );
  }

  public function showheader()
  {
    $Vdata = file_get_contents('../adminPanel/basicPageHeader.php');

  }
  public function showfooter()
  {
    $Vdata = file_get_contents('adminPanel/basicPageFooter.php');

  }
public function showmodal($Row)

{
  echo ' 
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
                      ';
                      foreach ($Row as $key) {
                        echo "<option value=".$key['ID'].">".$key['name']."</option>";
                    }
                      
                      echo '
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
  ';
}
public function showtable($Row)
{
  echo'
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
  
          ';  
          foreach ($Row as $key ) {
            
            echo ' <tr><th scope="row">'.$key["ID"].'</th>
        <td>'.$key["attributeName"].'</td>
        <td>';
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
           echo '
          <tbody>
          </tbody>
          </table>
      </div>
  </div>
  </div>
  
  </div>
  </div>
  ';
}


}


































