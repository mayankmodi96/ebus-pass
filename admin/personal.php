<?php
    include("db/session.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jan 2016 18:21:46 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flex Admin - Responsive Admin Theme</title>

    
    <link href="css/plugins/pace/pace.css" rel="stylesheet">
    <script src="js/plugins/pace/pace.js"></script>

    
    <link href="css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    
    <link href="css/plugins/messenger/messenger.css" rel="stylesheet">
    <link href="css/plugins/messenger/messenger-theme-flat.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="css/plugins/morris/morris.css" rel="stylesheet">
    <link href="css/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="css/plugins/datatables/datatables.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins.css" rel="stylesheet">

   
    <link href="css/demo.css" rel="stylesheet">

   

</head>

<body>

    <div id="wrapper">

        <!-- begin TOP NAVIGATION -->
        <nav class="navbar-top" role="navigation">

            <!-- begin BRAND HEADING -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".sidebar-collapse">
                    <i class="fa fa-bars"></i> Menu
                </button>
                <div class="navbar-brand">
                    <!-- <a href="#">
                        <img src="img/admin_logo.jpg" data-1x="img/flex-admin-logo@1x.png" data-2x="img/flex-admin-logo@2x.png" class="hisrc img-responsive" alt="">
                    </a> -->
                </div>
            </div>
            <!-- end BRAND HEADING -->

            <div class="nav-top">

                <!-- begin LEFT SIDE WIDGETS -->
                <ul class="nav navbar-left">
                    <li class="tooltip-sidebar-toggle">
                        <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <!-- You may add more widgets here using <li> -->
                </ul>
                <!-- end LEFT SIDE WIDGETS -->

                <!-- begin MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->
                <ul class="nav navbar-right">

                           

                <!-- begin USER ACTIONS DROPDOWN --> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i> <?php echo $login_session; ?>
                                </a>
                            </li>

                                <a href="index.php">
                                    <i class="fa fa-sign-out"></i> Logout
                                    
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- end USER ACTIONS DROPDOWN -->

                </ul>
                <!-- /.nav -->
                <!-- end MESSAGES/ALERTS/TASKS/USER ACTIONS DROPDOWNS -->

            </div>
            <!-- /.nav-top -->
        </nav>
        <!-- /.navbar-top -->
        <!-- end TOP NAVIGATION -->

        <!-- begin SIDE NAVIGATION -->
        <nav class="navbar-side" role="navigation">
            <div class="navbar-collapse sidebar-collapse collapse">
                <ul id="side" class="nav navbar-nav side-nav">
                    <!-- begin SIDE NAV USER PANEL -->
                    <li class="side-user hidden-xs">
                        <img class="img-circle" src="img/logo.png" alt="">
                        <!-- <p class="welcome">
                            <i class="fa fa-key"></i> Logged in as
                        </p>
                        <p class="name tooltip-sidebar-logout">
                            John
                            <span class="last-name">Smith</span> <a style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                        </p> -->
                        <div class="clearfix"></div>
                    </li>
                    
                    <li>
                        <a class="active" href="#"><!--index.html-->
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms">
                            <i class="fa fa-edit"></i> Forms <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="forms">
                            <li>
                                <a href="ins_upd_master_registration.php"><!--basic-form-elements.html-->
                                    <i class="fa fa-angle-double-right"></i> Registration
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="panel">
                        <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#tables">
                            <i class="fa fa-table"></i> Tables <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="collapse nav" id="tables">
                            <li>
                                <a href="reg_table.php"> <!--basic-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Registration
                                </a>
                            </li>
                            <li>
                                <a href="personal.php"> <!--basic-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Personal details
                                </a>
                            </li>
                            <li>
                                <a href="studentpass.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Student pass
                                </a>
                            </li>
                            <li>
                                <a href="employeepass.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Employee pass
                                </a>
                            </li>
                            <li>
                                <a href="seniorpass.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Senior-citizen
                                </a>
                            </li>
                            <li>
                                <a href="handistupass.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Handicap student pass
                                </a>
                            </li>
                            <li>
                                <a href="handiemppass.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Handicap Employee pass
                                </a>
                            </li>
                            <li>
                                <a href="sturenew.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Student Renew pass
                                </a>
                            </li>
                            <li>
                                <a href="emprenew.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Employee Renew pass
                                </a>
                            </li>
                            <li>
                                <a href="seniorrenew.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Senior-citizen Renew pass
                                </a>
                            </li>
                            <li>
                                <a href="handisturenew.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Handicap stu Renew pass
                                </a>
                            </li>
                            <li>
                                <a href="handiemprenew.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Handicap emp Renew pass
                                </a>
                            </li>
                            <li>
                                <a href="userfeedback.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> User Feedback
                                </a>
                            </li>
                            <li>
                                <a href="feedback.php"><!--advanced-tables.html-->
                                    <i class="fa fa-angle-double-right"></i> Feedback
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- end PAGES DROPDOWN -->
                </ul>
                <!-- /.side-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /.navbar-side -->
        <!-- end SIDE NAVIGATION -->

        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE AREA -->
                <!-- Use this section for each page's title and breadcrumb layout. In this example a date range picker is included within the breadcrumb. -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Student</h1>
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td>First name</td>
                                <td>Middle name</td>
                                <td>Last name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>Address</td>
                                <td>pin code</td>
                                <td>Contact number</td>
                                <td>email id</td>
                                <td>Adhar card number</td>
                                <td>User image</td>
                                <td>Adhar image</td>
                            </tr>
                            <?php
                            $select = mysql_query("SELECT * FROM stu_reg_pass");
                            while($row = mysql_fetch_object($select))
                            {
                                echo "<tr>
                                        <td>$row->stu_reg_pass_id</td>
                                        <td>$row->fname</td>
                                        <td>$row->mname</td>
                                        <td>$row->lname</td>
                                        <td>$row->gender</td>
                                        <td>$row->dob</td>
                                        <td>$row->address</td>
                                        <td>$row->pin</td>
                                        <td>$row->cno</td>
                                        <td>$row->eid</td>
                                        <td>$row->adharno</td>
                                        <td><img src='../user/student/userphoto/$row->user_image' height='80' width='70'></td>
                                        <td><img src='../user/student/adharphoto/$row->adhar_image' height='80' width='70'></td>
                                     </tr>";
                            }
                            ?>
                        </table>
                        <h1>Employee</h1>
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td>First name</td>
                                <td>Middle name</td>
                                <td>Last name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>Address</td>
                                <td>pin code</td>
                                <td>Contact number</td>
                                <td>email id</td>
                                <td>Adhar card number</td>
                                <td>User image</td>
                                <td>Adhar image</td>
                            </tr>
                            <?php
                            $select = mysql_query("SELECT * FROM emp_reg_pass");
                            while($row = mysql_fetch_object($select))
                            {
                                echo "<tr>
                                        <td>$row->emp_reg_pass_id</td>
                                        <td>$row->fname</td>
                                        <td>$row->mname</td>
                                        <td>$row->lname</td>
                                        <td>$row->gender</td>
                                        <td>$row->dob</td>
                                        <td>$row->address</td>
                                        <td>$row->pin</td>
                                        <td>$row->cno</td>
                                        <td>$row->eid</td>
                                        <td>$row->adharno</td>
                                        <td><img src='../user/employee/userphoto/$row->user_image' height='80' width='70'></td>
                                        <td><img src='../user/employee/adharphoto/$row->adhar_image' height='80' width='70'></td>
                                     </tr>";
                            }
                            ?>
                        </table>
                        <h1>Senio-citizen</h1>
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td>First name</td>
                                <td>Middle name</td>
                                <td>Last name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>Address</td>
                                <td>pin code</td>
                                <td>Contact number</td>
                                <td>email id</td>
                                <td>Adhar card number</td>
                                <td>User image</td>
                            </tr>
                            <?php
                            $select = mysql_query("SELECT * FROM sen_reg_pass");
                            while($row = mysql_fetch_object($select))
                            {
                                echo "<tr>
                                        <td>$row->sen_reg_pass_id</td>
                                        <td>$row->fname</td>
                                        <td>$row->mname</td>
                                        <td>$row->lname</td>
                                        <td>$row->gender</td>
                                        <td>$row->dob</td>
                                        <td>$row->address</td>
                                        <td>$row->pin</td>
                                        <td>$row->cno</td>
                                        <td>$row->eid</td>
                                        <td>$row->adharno</td>
                                        <td><img src='../user/seniorcitizen/userphoto/$row->user_image' height='80' width='70'></td>
                                     </tr>";
                            }
                            ?>
                        </table>
                        <h1>Handicap Student</h1>
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td>First name</td>
                                <td>Middle name</td>
                                <td>Last name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>Address</td>
                                <td>pin code</td>
                                <td>Contact number</td>
                                <td>email id</td>
                                <td>Adhar card number</td>
                                <td>User image</td>
                                <td>Adhar image</td>
                            </tr>
                            <?php
                            $select = mysql_query("SELECT * FROM stu_handi_pass");
                            while($row = mysql_fetch_object($select))
                            {
                                echo "<tr>
                                        <td>$row->stu_handi_pass_id</td>
                                        <td>$row->fname</td>
                                        <td>$row->mname</td>
                                        <td>$row->lname</td>
                                        <td>$row->gender</td>
                                        <td>$row->dob</td>
                                        <td>$row->address</td>
                                        <td>$row->pin</td>
                                        <td>$row->cno</td>
                                        <td>$row->eid</td>
                                        <td>$row->adharno</td>
                                        <td><img src='../user/handicap/student/userphoto/$row->user_image' height='80' width='70'></td>
                                        <td><img src='../user/handicap/student/adharphoto/$row->adhar_image' height='80' width='70'></td>
                                     </tr>";
                            }
                            ?>
                        </table>
                        <h1>Handicap Student</h1>
                        <table class="table">
                            <tr>
                                <td>id</td>
                                <td>First name</td>
                                <td>Middle name</td>
                                <td>Last name</td>
                                <td>Gender</td>
                                <td>Date of Birth</td>
                                <td>Address</td>
                                <td>pin code</td>
                                <td>Contact number</td>
                                <td>email id</td>
                                <td>Adhar card number</td>
                                <td>User image</td>
                                <td>Adhar image</td>
                            </tr>
                            <?php
                            $select = mysql_query("SELECT * FROM emp_handi_pass");
                            while($row = mysql_fetch_object($select))
                            {
                                echo "<tr>
                                        <td>$row->emp_handi_pass_id</td>
                                        <td>$row->fname</td>
                                        <td>$row->mname</td>
                                        <td>$row->lname</td>
                                        <td>$row->gender</td>
                                        <td>$row->dob</td>
                                        <td>$row->address</td>
                                        <td>$row->pin</td>
                                        <td>$row->cno</td>
                                        <td>$row->eid</td>
                                        <td>$row->adharno</td>
                                        <td><img src='../user/handicap/employee/userphoto/$row->user_image' height='80' width='70'></td>
                                        <td><img src='../user/handicap/employee/adharphoto/$row->adhar_image' height='80' width='70'></td>
                                     </tr>";
                            }
                            ?>
                        </table>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE AREA -->

                <!-- begin DASHBOARD CIRCLE TILES -->
                
            <!-- /.page-content -->
           </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->
        </div>
    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="js/jjquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="logout-message">
            <img class="img-circle img-logout" src="img/profile-pic.jpg" alt="">
            <!-- <h3>
                <i class="fa fa-sign-out text-green"></i> 
            </h3> -->
           <!--  <p>Select "Logout" below if you are ready<br> to end your current session.</p> -->
            <ul class="list-inline">
              
                <!-- <li>
                    <button class="logout_close btn btn-green">Cancel</button>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->
    <!-- HubSpot Messenger -->
    <script src="js/plugins/messenger/messenger.min.js"></script>
    <script src="js/plugins/messenger/messenger-theme-flat.js"></script>
    <!-- Date Range Picker -->
    <script src="js/plugins/daterangepicker/moment.js"></script>
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Morris Charts -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <!-- Flot Charts -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <!-- Sparkline Charts -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Moment.js -->
    <script src="js/plugins/moment/moment.min.js"></script>
    <!-- jQuery Vector Map -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/demo/map-demo-data.js"></script>
    <!-- Easy Pie Chart -->
    <script src="js/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    <!-- DataTables -->
    <script src="js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="js/plugins/datatables/datatables-bs3.js"></script>

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>
    <script src="js/demo/dashboard-demo.js"></script>

</body>


<!-- Mirrored from themes.startbootstrap.com/flex-admin-v1.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jan 2016 18:22:25 GMT -->
</html>
