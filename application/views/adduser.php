
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
                    <div class="col-md-9">
                    <div class="card">
                            <div class="card-body text3">
                            <div class="col-sm-12 col-xs-12">
                            <center><h2 class="text3">เพิ่มบุคคลากร</h2></center>
                            <form  id="forml" name="forml" method="post" action="adduser">
                            <div class="form-group row">
                                    <label foir="inputEmail3" class="col-sm-3 text-right control-label col-form-label">ID :</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="uid" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Username :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Password :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">firstname :</label>
                                    <div class="col-sm-6">
                                        <input type="text"  name="firstname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">lastname :</label>
                                    <div class="col-sm-6">
                                        <input type="text"  name="lastname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Photo upload</label>
                                        <div class="col-sm-6 fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> 
                                            <i class="glyphicon glyphicon-file fileinput-exists">
                                            </i> <span class="fileinput-filename">
                                            </span></div> <span class="input-group-addon btn btn-default btn-file">
                                             <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden">
                                            <input type="file" name="file"> 
                                            </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                    </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Email :</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">mobile :</label>
                                    <div class="col-sm-6">
                                        <input type="tel"  name="mobile" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">preficname :</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="preficname" class="form-control">
                                    </div>
                                </div>
                                <center>
                                <div>
                                        
                                <a class="btn btn-success" href="showeuser">Save</a>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </div> 
                                </center>
                                    </form>

                          
                        </div>
                    </div>
                </div>
            </div>