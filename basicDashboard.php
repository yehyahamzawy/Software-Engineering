<!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Database Control</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
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
                                                    
                                                        
                                                                    
                                                       
                                                   
                                                   
                                                </ul>
                                                
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                           
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="voulanteerform.php">Voulanteer
                                                         Form</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="employeeform.php">Employee Form</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="userform.php">User Form</a>
                                                    </li>
                                                    <li class="nav-item">
                                                            <a class="nav-link" href="childform.php">Child Form</a>
                                                        </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="doctorform.php">Doctor Form</a>
                                                </li>
                                                
                                              
                                                <li class="nav-item">
                                                    <a class="nav-link" href="driverform.php">Driver Form</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="assistantform.php">Assistant Form</a>
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="eventform.php">event Form</a>
                                                    </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="donation.php">Donation Form</a>
                                                    </li>
                                                    <li class="nav-item">
                                                            <a class="nav-link" href="meetingform.php">Meeting Form</a>
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link" href="interviewform.php">Interview Form</a>
                                                            </li>
                                                    
                                                  
                                                <li class="nav-item">
                                                    <a class="nav-link" href="userType.php">Promote Users</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="daysOff.php">Attendance</a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a class="nav-link" href="routePlan.php">Missions</a>
                                                </li>
                                           
                                                </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="userprofile.php">User profile</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="accesscontrol.php">Access Control</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="meetingattendees.php">Manage Meetings</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="createHTML.php">Create Announcement</a>
                                            </li>
                                            <li class="nav-item">
                                                    <a class="nav-link" href="ckhomepage.php">Announcement Table</a>
                                                </li>
                                               
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Forms Features </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="editemployeeforms.php">Edit Employee Forms</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="addressform.php">New Route</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->