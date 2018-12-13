<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/Emeet/assets/images/">
    <title>Electronic Meeting Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="/Emeet/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="/Emeet/assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/Emeet/assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/Emeet/assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="background: linear-gradient(to left, #33ccff 0%, #ffffff 100%);">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <img src="/Emeet/assets/img/csmju_logo.gif" width="200px" height="100px">
                <div class="text">
                    <span>ระบบจัดการข้อมูลการประชุมอิเล็กทรอนิกส์ (Electronic Meeting Management System) </span>
                </div>

            </nav>
        </header>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">

                </div>

                <div class="row ">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="/Emeet/assets/img/1.png" width="100%" height="100%">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="calendar-events" class="m-t-20">
                                            <div class="text2">
                                                <center>
                                                    <span>อ.ดร.พาสน์ ปราโมกข์ชน</span><br>
                                                    <span>Part Pramokchon</span><br>
                                                    <p>053-873890-93 ต่อ 16 <br>
                                                        part@mju.ac.th </p>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body inbox-panel">
                                        <div class="buttom">
                                            <div class="btn btn-block btn-success" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"> <span class="text2">จัดการการประชุม</span>
                                                <div class="btn-group">
                                                    <div class="dropdown-menu animated flipInX">
                                                        <a class="dropdown-item" href="#"><span class="text2">สร้างการประชุม</span></a>
                                                        <a class="dropdown-item" href="#"><span class="text2">รายการการประชุม</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttom">
                                            <div class="btn btn-block btn-success"> <span class="text2">การประชุม</span></div>
                                        </div>
                                        <div class="buttom">
                                            <div class="btn btn-block btn-success"> <span class="text2">สร้างรายงานการประชุม</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
            <footer class="footers">
                <!--<div class="card-body">
                    <div class="row">
                        <div class="col-md-4 photo">
                            <img src="/New folder/img/คณะวิทยาศาสตร์แม่โจ้.jpg" width="100px" height="100px">
                        </div>
                        <div class="col-md-4">
                            <h5 class="text3">Contact Us</h5>
                            <i class=""><p class="fonts2">+6653873890-3</p></i>
                            <p class="fonts2">Fax : +6653873898</p>
                            <p class="fonts2">สาขาวิชาวิทยาการคอมพิวเตอร์</p>
                            <p class="fonts2">คณะวิทยาศาสตร์</p>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                </div> -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/Emeet/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/Emeet/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/E-meeting/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/Emeet/assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/Emeet/assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/Emeet/assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/Emeet/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/Emeet/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/Emeet/assets/js/custom.min.js"></script>
    <!-- Calendar JavaScript -->
    <script src="/Emeet/assets/plugins/calendar/jquery-ui.min.js"></script>
    <script src="/Emeet/assets/plugins/moment/moment.js"></script>
    <script src='/Emeet/assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="/Emeet/assets/plugins/calendar/dist/cal-init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/Emeet/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>