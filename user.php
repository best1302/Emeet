<?php 
include_once "connDB.php";
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$uid=$_POST['uid'];
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$picture=$_POST['picture'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$prefic_name=$_POST['prefic_name'];
$create_meeting=$_POST['create_meeting'];
$join_meeting=$_POST['join_meeting'];
$approve_meeting=$_POST['approve_meeting'];
$modify_meeting=$_POST['modify_meeting'];
if($submit=="OK"){
if ($_FILES['picture']['name']!= '') {
$path='picture_upload/';
$file=$_FILES['picture']['name'];
$file_type= strrchr( $file , '.' );
$pic_name='picture_'.$uid.strtoupper($file_type);
copy ($_FILES['picture']['tmp_name'],$path.$pic_name);
$picture=$pic_name;
}
if($Select_ID==""){
$sql="INSERT  INTO  user set uid='".$uid."',username='".$username."',password='".$password."',firstname='".$firstname."',lastname='".$lastname."',picture='".$picture."',email='".$email."',phone='".$phone."',prefic_name='".$prefic_name."',create_meeting='".$create_meeting."',join_meeting='".$join_meeting."',approve_meeting='".$approve_meeting."',modify_meeting='".$modify_meeting."'";
}else{
$sql="UPDATE user set username='".$username."',password='".$password."',firstname='".$firstname."',lastname='".$lastname."',picture='".$picture."',email='".$email."',phone='".$phone."',prefic_name='".$prefic_name."',create_meeting='".$create_meeting."',join_meeting='".$join_meeting."',approve_meeting='".$approve_meeting."',modify_meeting='".$modify_meeting."'  WHERE uid='".$Select_ID."'" ;
}
mysqli_query($conn,$sql);
}
if ($submit=="DEL"){
$sql="select * from user  where uid='".$Select_ID."' ";
$rstTemp=mysqli_query($conn,$sql);

$row= mysqli_fetch_assoc($rstTemp);
$pic_tmp=$row['picture'];
if($pic_tmp!='') unlink('picture_upload/'.$pic_tmp);
$sql="delete from user where uid ='".$Select_ID."'";
mysqli_query($conn,$sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<title>USER MANAGEMENT</title>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<script src='js/bootstrap-datetimepicker.js'></script>
<link href='css/bootstrap-datetimepicker.css' rel='stylesheet'>
<script src='js/bootbox.min.js'></script>
<script>
$(document).ready(function() {
$('#frm_user').formValidation();
});
function chkdel(id){
if(confirm('Do you want to Delete >>> '+id+' <<<\r\nPlease... Confirm to Delete !!!  ')){
return true;
}else{
return false;
}
}

$(document).on('click', '.confirm_delete', function(e) {
var show = $(this).data('show');
e.preventDefault();

bootbox.confirm({
title:'Confirm for Delete!!!',
//size: 'small',
message: 'Do you want to Delete <<< <b>'+ show+' </b>>>> ?',
buttons: {
confirm: {
label:'Confirm',
className:'btn-success'
},
cancel: {
label:'Cancel',
className:'btn-danger'
}

},
callback: function(result){
if (result) {
window.location.href = e.target.href;
}
}
});

});
</script>

</head>
<?php include 'menu.php';?>
<div  style='margin-top:20px;'></div>
<div class='container'>
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-success'>
<div class='panel-heading' style='text-align:center'>

<b style='font-size:30px;'>USER MANAGEMENT</b>
</div>

<div class='panel-body' align='center'>
<div>

</div>

<?php  
if($submit=="" or $_GET['show']=="OK"){
if($page==''){
$Search=$_POST['Search'];
$Search2=$_POST['Search2'];
}else{
$Search=$_GET['Search'];
$Search2=$_GET['Search2'];
}
?>
<form name="form1" method="post" action="user.php?show=OK&strSearch=Y" class='navbar-form navbar-left' role='search'>
<div class='form-group' >
<select name='Search2' class='form-control'>
<option value="uid" <?php if($Search2=="uid"){ echo 'selected'; }?>>Uid</option>
<option value="firstname" <?php if($Search2=="firstname"){ echo 'selected'; }?>>Firstname</option>
<option value="lastname" <?php if($Search2=="lastname"){ echo 'selected'; }?>>Lastname</option>
<option value="picture" <?php if($Search2=="picture"){ echo 'selected'; }?>>Picture</option>
<option value="email" <?php if($Search2=="email"){ echo 'selected'; }?>>Email</option>
<option value="phone" <?php if($Search2=="phone"){ echo 'selected'; }?>>Phone</option>
<option value="prefic_name" <?php if($Search2=="prefic_name"){ echo 'selected'; }?>>Prefic_name</option>
<option value="create_meeting" <?php if($Search2=="create_meeting"){ echo 'selected'; }?>>Create_meeting</option>
<option value="join_meeting" <?php if($Search2=="join_meeting"){ echo 'selected'; }?>>Join_meeting</option>
<option value="approve_meeting" <?php if($Search2=="approve_meeting"){ echo 'selected'; }?>>Approve_meeting</option>
<option value="modify_meeting" <?php if($Search2=="modify_meeting"){ echo 'selected'; }?>>Modify_meeting</option>
</select>
<input name='Search' type='text' class='form-control' style='width:auto'  placeholder='Enter Keyword...'  value='<?php echo $Search?>' onFocus="this.value ='' ;">
<button type='submit' class='btn btn-default' value='Search'>Search</button>
</div>
</form>

<?php
$limit = '20';

if($strSearch=="Y"){
$Qtotal = mysqli_query($conn,"select * from user Where ".$Search2." like '%".$Search."%'  ");
}else{
$Qtotal = mysqli_query($conn,"select * from user");
}

$total_data = mysqli_num_rows($Qtotal);
$total_page= ceil($total_data/$limit);

if($page>=$total_page) $page=$total_page;
if($page<=0 or $page==''){
$start = 0;
$page=1;
}

$start=($page-1)*$limit;

$from=$start+1;
$to=$page*$limit;
if($to>$total_data) $to=$total_data;
?>

<div class='alert alert-info' role='alert' style='font-weight:bold;'>
<?php
echo $from.' - '.$to;
printf(' from %d  ',$total_data);
printf(' | Page %d <br />',$page);
?>
</div>

<table class='table table-bordered tablesorter'>
<thead>
<tr>
<td align='center'><strong>Uid </strong></td>
<td align='center'><strong>Firstname </strong></td>
<td align='center'><strong>Lastname </strong></td>
<td align='center'><strong>Picture </strong></td>
<td align='center'><strong>Email </strong></td>
<td align='center'><strong>Phone </strong></td>
<td align='center'><strong>Prefic_name </strong></td>
<td align='center'><strong>Create_meeting </strong></td>
<td align='center'><strong>Join_meeting </strong></td>
<td align='center'><strong>Approve_meeting </strong></td>
<td align='center'><strong>Modify_meeting </strong></td>
<td width="8%"><a href="user.php?submit=Add&show=" class='btn btn-success btn-md' role='button'>Add New</a></td>
</tr>
</thead>
<tbody>
<?php 
if($strSearch=="Y"){
$Query = mysqli_query($conn,"select * from user Where ".$Search2." like '%".$Search."%'   order  by  uid DESC LIMIT $start,$limit");
}else{
$Query= mysqli_query($conn,"select * from user order  by  uid DESC LIMIT $start,$limit");
}

while($arr = mysqli_fetch_array($Query)){
$autoid = $arr['uid'];
?>
<tr valign='top'>
<td align='center'><?php echo $arr['uid'] ?></td>
<td align='center'><?php echo $arr['firstname'] ?></td>
<td align='center'><?php echo $arr['lastname'] ?></td>
<td align='center'><?php echo $arr['picture'] ?></td>
<td align='center'><?php echo $arr['email'] ?></td>
<td align='center'><?php echo $arr['phone'] ?></td>
<td align='center'><?php echo $arr['prefic_name'] ?></td>
<td align='center'><?php echo $arr['create_meeting'] ?></td>
<td align='center'><?php echo $arr['join_meeting'] ?></td>
<td align='center'><?php echo $arr['approve_meeting'] ?></td>
<td align='center'><?php echo $arr['modify_meeting'] ?></td>
<td align="center">
<a href="user.php?submit=Edit&Select_ID=<?php echo $autoid;?>"  title='Edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp;
<a href="user.php?submit=DEL&show=OK&Select_ID=<?php echo $autoid;?>" title='Delete' class='confirm_delete btn btn-danger btn-xs' data-show="<?php echo $arr['uid'] ?>">Del</a>
</td>
</tr>
<?php }?>
</tbody>
</table>

<nav>
<ul class='pagination'>
<li <?php if($page==1) echo "class='disabled' ";?>><a href='user.php?page=<?php echo $page-1?>&Search=<?php echo$Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo$strSearch?>' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>

<?php for($i=1;$i<=$total_page;$i++){

if($page-2>=2 and ($i>2 and $i<$page-2)) {
echo "<li ><a href=''>...</a></li>";
$i=$page-2;
}

if($page+5<=$total_page and ($i>=$page+3 and $i<=$total_page-2)) {
echo "<li ><a href='' >...</a></li>";
$i=$total_page-1;
}

?>
<li <?php if($page==$i) echo "class='active' ";?>><a href='user.php?page=<?php echo $i?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' ><?php echo $i?></a></li>
<?php }?>

<li <?php if($page==$total_page) echo "class='disabled' ";?>><a href='user.php?page=<?php echo $page+1?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>
</ul>
</nav>

<?php }?>

<?php  if($submit=="Add"){?>
<form class='form-horizontal' id='frm_user' action="user.php?submit=OK&show=OK&Select_ID=" method="post"  enctype='multipart/form-data'data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
<div class='form-group'>
<label class='col-sm-5 control-label'>Uid</label>
<div class='col-sm-5' align='left'>
<input name='uid' id='uid' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Username</label>
<div class='col-sm-5' align='left'>
<input name='username' id='username' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Password</label>
<div class='col-sm-5' align='left'>
<input name='password' id='password' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Firstname</label>
<div class='col-sm-5' align='left'>
<input name='firstname' id='firstname' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Lastname</label>
<div class='col-sm-5' align='left'>
<input name='lastname' id='lastname' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Picture</label>
<div class='col-sm-5' align='left'>
<input type='file' name='picture' id='picture' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'> Select a Picture.
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Email</label>
<div class='col-sm-5' align='left'>
<input name='email' id='email' type='email' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Phone</label>
<div class='col-sm-5' align='left'>
<input name='phone' id='phone' type='number' min='0' step='1' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Prefic_name</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='1'> นาย
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='2'> นางสาว
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='3'> นาง
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='4'> อาจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='5'> ผู้ช่วยศาสตราจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='6'> รองผู้ช่วยศาสตราจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='7'> ศาสตราจารย์
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Create_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='create_meeting' type='checkbox' id='create_meeting' value='checked'> Create_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Join_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='join_meeting' type='checkbox' id='join_meeting' value='checked'> Join_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Approve_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='approve_meeting' type='checkbox' id='approve_meeting' value='checked'> Approve_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Modify_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='modify_meeting' type='checkbox' id='modify_meeting' value='checked'> Modify_meeting
</label>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Insert Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='user.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>


<?php  if($submit=="Edit"){
$sql="select * from user  where uid ='".$Select_ID."'  ";
$tem = mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($tem);
?>

<form class='form-horizontal' id='frm_user' action="user.php?submit=OK&show=OK&Select_ID=<?php echo $Select_ID?>" method="post" enctype='multipart/form-data'>
<input type='hidden' name='uid' value="<?php echo $row3['uid']?>">
<input type='hidden' name='picture' value="<?php echo $row3['picture']?>" >
<div class='form-group'>
<label class='col-sm-5 control-label'>Uid</label>
<div class='col-sm-5' align='left'>
<input name='uid' id='uid' type='text' size='50' value='<?php echo $row3["uid"]?>' disabled class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Username</label>
<div class='col-sm-5' align='left'>
<input name='username' id='username' type='text' size='50' value='<?php echo $row3["username"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Password</label>
<div class='col-sm-5' align='left'>
<input name='password' id='password' type='text' size='50' value='<?php echo $row3["password"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Firstname</label>
<div class='col-sm-5' align='left'>
<input name='firstname' id='firstname' type='text' size='50' value='<?php echo $row3["firstname"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Lastname</label>
<div class='col-sm-5' align='left'>
<input name='lastname' id='lastname' type='text' size='50' value='<?php echo $row3["lastname"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Picture</label>
<div class='col-sm-5' align='left'>
<a data-toggle='lightbox' href="picture_upload/<?php echo $row3['picture']?>" class='thumbnail'  TARGET='_blank' ><?php if($row3['picture']==''){?>
<img id='picture' src="picture_upload/noimg.gif">
<?php }else{?>
<img id='picture' src="picture_upload/<?php echo $row3['picture']?>" >
<?php }?>
</a>
<input type='file' name='picture' id='picture'> Edit a Picture.</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Email</label>
<div class='col-sm-5' align='left'>
<input name='email' id='email' type='email'  value='<?php echo $row3["email"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' >
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Phone</label>
<div class='col-sm-5' align='left'>
<input name='phone' id='phone' type='number' min='0' step='1' value='<?php echo $row3["phone"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Prefic_name</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='1' <?php if($row3['prefic_name']=='1') echo 'checked';?>> นาย
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='2' <?php if($row3['prefic_name']=='2') echo 'checked';?>> นางสาว
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='3' <?php if($row3['prefic_name']=='3') echo 'checked';?>> นาง
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='4' <?php if($row3['prefic_name']=='4') echo 'checked';?>> อาจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='5' <?php if($row3['prefic_name']=='5') echo 'checked';?>> ผู้ช่วยศาสตราจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='6' <?php if($row3['prefic_name']=='6') echo 'checked';?>> รองผู้ช่วยศาสตราจารย์
</label>
<label class='btn btn-primary '>
<input  name='prefic_name'  type='radio' value='7' <?php if($row3['prefic_name']=='7') echo 'checked';?>> ศาสตราจารย์
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Create_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='create_meeting' type='checkbox' id='create_meeting' value='checked' <?php echo $row3["create_meeting"]?>> Create_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Join_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='join_meeting' type='checkbox' id='join_meeting' value='checked' <?php echo $row3["join_meeting"]?>> Join_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Approve_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='approve_meeting' type='checkbox' id='approve_meeting' value='checked' <?php echo $row3["approve_meeting"]?>> Approve_meeting
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Modify_meeting</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-info '>
<input name='modify_meeting' type='checkbox' id='modify_meeting' value='checked' <?php echo $row3["modify_meeting"]?>> Modify_meeting
</label>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Update Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='user.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>

</div>
 </div>
</div>
</div>
</div>


