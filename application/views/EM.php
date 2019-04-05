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
<link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">
<style>
    .headder{
        font-size: 15px;
        background-color: #79deff;
    }
    .font{
        font-family: 'Niramit', sans-serif;
        color: #000000;
    }
</style>
</head>

<body class="fix-header card-no-border logo-center font">
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
       
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <a href="/Emeet/index.php/login/login1"><button type="button" class="btn btn-outline-primary">เข้าสู่ระบบ<i class="m-l-5 fa fa-sign-in"></i></button></a>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                          
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped success-bordered-table">
                                        <thead class="headder">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
            </div>
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
    <script src="/Emeet/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
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
   
     <!-- This is data table -->
     <script src="/Emeet/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
        $('#myTable').dataTable( {
                    "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ รายการ ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ รายการ",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 รายการ",
                    "sInfoFiltered": "(จากรายการทั้งหมด _MAX_ รายการ)",
                    "sSearch": "ค้นหา :",
                    "oPaginate": {
                         "sNext": "หน้าถัดไป",
                         "sPrevious": "ก่อนหน้า"
                               }
            }
} );
} );
</script>
     <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/Emeet/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>