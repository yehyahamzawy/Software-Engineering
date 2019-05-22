<?php 

class attributesView{
private $title1;
private $title2;
private $previous;

  public function __construct()
  {
  $this->title1 = "";
  $this->title2 = "";
  $this->previous =  array();
  }

  public function header()
  {
    $title1=$this->title1;
    $title2=$this->title2;
    $previous=$this->previous;
  // $Vdata = file_get_contents('../adminPanel/basicPageHeader.php');
  // echo $Vdata;
  include('../adminPanel/basicPageHeader.php');
  }
  public function footer()
  {
    // $Vdata = file_get_contents('adminPanel/basicPageFooter.php');
    // echo $Vdata;
    include ('../adminPanel/basicPageFooter.php');
  }
public function addAttModal($attTypes)

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
            <form method="POST" action="../MVC/controller/attributesControl.php?add">
              <div class="form-group">
                      <label for="inputText3" class="col-form-label">Attribute Name</label>
                      
                      <input id="inputText3" type="text" class="form-control" name = "attributeName"  pattern="[A-Za-z]{3,}" title="Three or more characters with no spaces" required >
                  </div>
              <div class="form-group">
                      <label for="inputText3" class="col-form-label">DataType</label>
                      
                      <select class="selectpicker dropup" name = "attType" >
                      ';
                      foreach ($attTypes as $key) {
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
public function showtable($data)
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

          
          foreach ($data as $Row) 
          {
            echo ' <tr><th scope="row">'.$Row["ID"].'</th>
                    <td>'.$Row["attributeName"].'</td>
                    <td>'; echo $Row['name']; echo '</td>';
              echo ' <td class="iconrow">
                  <a href="../pages/attributeEditForm.php?ID='.$Row["ID"].'"><i class="fas fa-edit"  ></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../MVC/controller/attributesControl.php?ID='.$Row["ID"].'&del"> <i class="fas fa-trash"></i></a>
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

public function editForm($attTypes)
    {
        
        
       
        echo '<div class="card">               
            <div class="card-body">
            <form method="POST" action="../MVC/controller/attributesControl.php?attID='.$_GET["ID"].'&updt">
              <div class="form-group">
                      <label for="inputText3" class="col-form-label">Attribute Name</label>
                      
                      <input id="inputText3" type="text" class="form-control" name = "attributeName"  pattern="[A-Za-z]{3,}" title="Three or more characters with no spaces" required >
                  </div>
              <div class="form-group">
                      <label for="inputText3" class="col-form-label">DataType</label>
                      
                      <select class="selectpicker dropup" name = "attType" >
                      ';
                      foreach ($attTypes as $key) {
                        echo "<option value=".$key['ID'].">".$key['name']."</option>";
                    }
                      
                      echo '
                      </select>
                      </div>
  </div>
  <div class="modal-footer">
  <button type="Submit" class="btn btn-default">Submit</button>
</form>
            </div>
            </div>';
        


    }

}


































