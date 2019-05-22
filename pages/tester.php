<?php 
                                                    include_once "../dashboardLinks.php";
                                                     $links = getLinks();

                                                    foreach($links as $row)
                                                    {
                                                        echo '<li class="nav-item">
                                                        <a class="nav-link" href="'.$row["URL"].'">'.$row["friendlyName"].'</a>
                                                    </li>';
                                                    }
                                                    
                                                    ?>