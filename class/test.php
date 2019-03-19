 <?php   
                                                                    include_once '../class/userTypeClass.php';
                                                                        
                                                                $ut=new userType(1);
                                                                // echo "<option>x</option>";
                                                                $var=$ut->ReadAll();
                                                                foreach ($var as $key ) {
                                                                    echo "x";
                                                                // echo "<option value=".$key['ID']."  > ".$key['type']."</option>";
                                                                }
                                                             ?>