
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
                            <div class="card-body">
                                <div>
                                    <center>
                                        <h2 class="fontsize">สร้างรายงานการประชุม</h2>
                                    </center>
                                    <form  id="forml" name="forml" method="post" action="convene">
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label text3">ชื่อการประชุม</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="heading_name" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-2 col-form-label text3">หน่วยงาน</label>
                                            <div class="col-10 ">
                                                <input type="checkbox" id="md_checkbox_8" name="department[]" class="chk-col-cyan" checked value="ปริญญาตรี" />
                                                <label for="md_checkbox_8">
                                                    <p class="text2">ปริญญาตรี</p>
                                                </label>
                                                <input type="checkbox" id="md_checkbox_9" name="department[]" class="chk-col-cyan" checked  value="ปริญญาโท" />
                                                <label for="md_checkbox_9">
                                                    <p class="text2">ปริญญาโท</p>
                                                </label>
                                                <input type="checkbox" id="md_checkbox_10" name="department[]" class="chk-col-cyan" checked value="ALL" />
                                                <label for="md_checkbox_10">
                                                    <p class="text2">All</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-date-input" class="col-2 col-form-label text3">วันที่ประชุม</label>
                                            <div class="col-10">
                                                <input class="form-control text3" type="date" name="Date" value="2018-12-03" id="example-date-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-time-input" class="col-2 col-form-label text3">เวลา</label>
                                            <div class="col-10">
                                                <input class="form-control text3" type="time" name="time" value="13:45:00" id="example-time-input">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                      </div>
               
                            <div class="card-body zero3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect"
                                        data-dismiss="modal"><i class="fa fa-save"></i> Save</button>
                                    <button type="button" class="btn btn-default waves-effect"
                                        data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>