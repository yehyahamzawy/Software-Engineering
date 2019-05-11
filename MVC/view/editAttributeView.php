
<?php 
include_once "../class/attributeClass.php";
include_once "../class/attributeTypeClass.php";

class editattributes
{
    private $title1;
    private $title2;
    private $previous;

    public function __construct()
    {
    
    $this->title1 = "Hello everyone xD";
    $this->title2 = "Attributes testing page";
    $this->previous =  array('editor' => "../pages/editor.php", 'checker' => "../pages/checker.php" );
    $this->showheader();
    }

    public function showheader()
    {
        $title1=$this->title1;
        $title2=$this->title2;
        $previous=$this->previous;
    // $Vdata = file_get_contents('../adminPanel/basicPageHeader.php');
    // echo $Vdata;
    include ('../adminPanel/basicPageHeader.php');
    }
    public function showfooter()
    {
        // $Vdata = file_get_contents('adminPanel/basicPageFooter.php');
        // echo $Vdata;
        include ('../adminPanel/basicPageFooter.php');
    }
    public function form($IdToEdit)
    {
        
        $attributes = new Attribute($IdToEdit);
       
        $variable = $attributes->ReadAll();
        
        $IDchoosed=$IdToEdit;
       
        $attribute=new attribute($IDchoosed);
        
        $Row=$attribute->ReadAll();
        
        $attributeTypes = new attributeType(1);
        
        $output = $attributeTypes->ReadAll();
       
        echo '<div class="card">               
            <div class="card-body">
            <form class=".form-control-lg" method = "POST" action ="../../controllers/attributeEdit.php"><br>
                <div class="form-group">
                    <select name=attributeID>';
    
        foreach ($variable as $key) {
            echo "<option value=" . $key['ID'] . ">" . $key['attributeName'] . "</option>";
        }

        echo '</select><br>
            <label for="inputText3" class="col-form-label">New Attribute Name</label>
            <input id="inputText3" value='. $Row[$IDchoosed]["attributeName"] .'        type="text" class="form-control" name = "attributeName">';
        
        echo '</div><br>                                
            <label for="inputText3" value=".form-control-lg" class="col-form-label">type</label>
            <select class="selectpicker dropup" name = "attributeDType" >';
        
        foreach ($output as $i) 
        {
            echo "<option value=" . $i['ID'] . ">" . $i['name'] . "</option>";
           
          echo'  <br>';
        }
        echo '</select><!-- </select> -->';
        echo'
            <div class="col-sm-6 pl-0">
                <p class="text-right">
                    <button type="submit"  class="btn btn-space btn-primary">Submit</button>
                    <button class="btn btn-space btn-secondary">Cancel</button>
                </p>
            </div>
            </form>
            </div>
            </div>';
        


    }
}

