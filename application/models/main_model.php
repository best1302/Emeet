<?php
	session_start();
	
	mysql_select_db("Emeeting");
	$strSQL = "SELECT * FROM user WHERE Username = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			

			session_write_close();
			
		
				header("location:admin_page.php");
		
	}
	mysql_close();
?>