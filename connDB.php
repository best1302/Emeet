<?php
                $servername = "202.28.37.133";
                $sys_user ="user01";
                $sys_password = "123456";
                $database_name = "Emeeting";
                $conn = mysqli_connect($servername,$sys_user,$sys_password,$database_name) or die(mysql_error());
                mysqli_query($conn,"SET CHARACTER SET tis620");
                //mysqli_query($conn,"set character set utf8");
                error_reporting(E_ALL ^ E_NOTICE);
?>
