<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM user Where Username='".$username."' and Password='".$password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["create_meeting"] = $row["create_meeting"];

                      if($_SESSION["create_meeting"]=="Y"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: calendar.php");

                      }

                      if ($_SESSION["create_meeting"]=="N"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: calendar.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>