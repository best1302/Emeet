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
                                                        <a class="dropdown-item" href="Emeet/index.php/Createroom/addroom"><span class="text2">สร้างการประชุม</span></a>
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ">
                                    <div class="form-group box ">
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" required>
                                                <div class="input-group-addon"><i class=" ti-search"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-7">
                                    <div class="form-group top">
                                        <input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-cyan "
                                            checked />
                                        <label for="md_checkbox_28"><span class="fonts">ประชุมแล้ว</span></label>
                                        <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-cyan"
                                            checked />
                                        <label for="md_checkbox_29"><span class="fonts">ยังไม่ได้ประชุม</span></label>
                                        <input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-cyan"
                                            checked />
                                        <label for="md_checkbox_30"><span class="fonts">ประชุมตามวาระ</span></label>
                                        <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-cyan"
                                            checked />
                                        <label for="md_checkbox_31"><span class="fonts">ประชุมเร่งด่วน</span></label>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="card-body ptop">
                                <div class="text3">
                                    <span>แจ้งเตือนการประชุม</span>
                                </div>
                            </div>
                            <div class="card-body ptop">
                                <div class="table-responsive">
                                    <table class="table full-color-table full-success-table hover-table ">
                                        <thead>
                                            <tr>
                                                <th><span class="fonts">ลำดับ</span></th>
                                                <th><span class="fonts">ชื่อการประชุม</span></th>
                                                <th class="tsize"><span class="fonts ">ครั้งที่</span></th>
                                                <th class="tsize"><span class="fonts">วัน</span></th>
                                                <th><span class="fonts">สรุปข้อมูล</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                                <td>@Sonu</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>@Genelia</td>
                                                <td>@Sonu</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                                <td>@Sonu</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-body ptop">
                                <div class="text3">
                                    <span>รอรับรองการประชุม</span>
                                </div>
                            </div>
                            <div class="card-body ptop">
                                <div class="table-responsive">
                                    <table class="table full-color-table full-purple-table hover-table">
                                        <thead>
                                            <tr>
                                                <th><span class="fonts">ลำดับ</span></th>
                                                <th><span class="fonts">ชื่อการประชุม</span></th>
                                                <th class="tsize"><span class="fonts ">ครั้งที่</span></th>
                                                <th class="tsize"><span class="fonts">วัน</span></th>
                                                <th class="tsize"><span class="fonts">Approved</span></th>
                                                <th><span class="fonts">ผู้ใช้ยังไม่รับรอง</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                                <td><input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-cyan"
                                                        checked />
                                                    <label for="md_checkbox_32"><span class="fonts"></span></label></td>
                                                <td>@Sonu</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>@Genelia</td>
                                                <td><input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-cyan"
                                                        checked />
                                                    <label for="md_checkbox_33"><span class="fonts"></span></label></td>
                                                <td>@Sonu</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                                <td><input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-cyan"
                                                        checked />
                                                    <label for="md_checkbox_34"><span class="fonts"></span></label></td>
                                                <td>@Sonu</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                                name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                                <option value="inverse">Inverse</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img"
                                            class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img"
                                            class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img"
                                            class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img"
                                            class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img"
                                            class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img"
                                            class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img"
                                            class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img"
                                            class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footers">
                <!--<div class="card-body">
                    <div class="row">
                        <div class="col-md-4 photo">
                            <img src="../New folder/img/คณะวิทยาศาสตร์แม่โจ้.jpg" width="100px" height="100px">
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