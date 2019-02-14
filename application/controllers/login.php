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

<body>

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
    <section id="wrapper" class="login-register login-sidebar"  style="background: linear-gradient(to left, #33ccff 0%, #ffffff 100%);">
  <div class="login-box card">
    <div class="card-body">
      <form action="index.php/home" class="form-horizontal form-material ttop" id="loginform" >
        <a href="javascript:void(0)" class="text-center db"><img src="/Emeet/assets/img/logo_custom1.gif" alt="Home" /><br/></a> 
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control"  id="username" name="username"  type="text" required="" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control"  id="password" name="password"  type="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
        </div>
        <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light " type="submit" >Log In</button>
          </div></a>
        </div>
      </form>
      <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="rignt">
      <div class="text4">
          <span>ระบบจัดการข้อมูลการประชุมอิเล็กทรอนิกส์</span>
      </div>
      <div class="text4">
          <span>(Electronic Meeting Management System)</span>
      </div>
      <div class="rignt2">
          <img src="/Emeet/assets/img/csmju_logo.gif" width="400px" height="200px">
      </div>
      
  </div> 

</section>
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
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/Emeet/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>