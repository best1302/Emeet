<
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
                            <center><h2 class="text3">รายชื่อบุคคลากร</h2></center>
                          <table border="1">
                          <thead>
                          <tr>
                          <th>ลำดับ</th>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>E-mail</th>
                          <th>Phone</th>
                          <th>Username</th>
                          <th>Password</th>
                          </tr>
                          </thead>
                            <tbody>
                            <?php
                            $rs=0;
                            if(count($rs)==0)
                            {
                                echo"<tr><td coispan='7'align='center'>--no data";
                            }
                            else
                            {
                                $no=1;
                                foreach($rs as $r)
                                {
                                    echo"<tr>";
                                    echo"<td align>='center'>$no</td>";
                                    echo"<td>.$r[firstname].</td>";
                                    echo"<td>.$r[lastname].</td>";
                                    echo"<td>.$r[email].</td>";
                                    echo"<td>.$r[phon].</td>";
                                    echo"<td>.$r[username].</td>";
                                    echo"<td>.$r[password].</td>";
                            
                                    echo"/tr";
                                    $no++;
                                }
                                
                            }
                            
                            ?>
                            </tbody>

                          
                        </div>
                    </div>
                </div>
            </div>>