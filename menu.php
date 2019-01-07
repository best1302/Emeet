<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<nav class='navbar navbar-inverse'>
<div class='container-fluid'>
<!-- Brand and toggle get grouped for better mobile display -->
<div class='navbar-header'>
<div class='btn-group'>
<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
<span class='sr-only'>Toggle navigation</span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</button>

</div>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>

<ul class='nav navbar-nav' style='font-weight:bold;'>

<li <?php if($nav=='1') echo 'class=\'active\'';?>><a href='agenda.php?nav=1'><span class='glyphicon glyphicon-cog'></span> AGENDA</a></li>
<li <?php if($nav=='2') echo 'class=\'active\'';?>><a href='agenda_name.php?nav=2'><span class='glyphicon glyphicon-cog'></span> AGENDA_NAME</a></li>
<li <?php if($nav=='3') echo 'class=\'active\'';?>><a href='chat_table.php?nav=3'><span class='glyphicon glyphicon-cog'></span> CHAT_TABLE</a></li>
<li <?php if($nav=='4') echo 'class=\'active\'';?>><a href='heading.php?nav=4'><span class='glyphicon glyphicon-cog'></span> HEADING</a></li>
<li <?php if($nav=='5') echo 'class=\'active\'';?>><a href='log_edit.php?nav=5'><span class='glyphicon glyphicon-cog'></span> LOG_EDIT</a></li>
<li <?php if($nav=='6') echo 'class=\'active\'';?>><a href='meeting.php?nav=6'><span class='glyphicon glyphicon-cog'></span> MEETING</a></li>
<li <?php if($nav=='7') echo 'class=\'active\'';?>><a href='participant.php?nav=7'><span class='glyphicon glyphicon-cog'></span> PARTICIPANT</a></li>
<li <?php if($nav=='8') echo 'class=\'active\'';?>><a href='position.php?nav=8'><span class='glyphicon glyphicon-cog'></span> POSITION</a></li>
<li <?php if($nav=='9') echo 'class=\'active\'';?>><a href='report.php?nav=9'><span class='glyphicon glyphicon-cog'></span> REPORT</a></li>
<li <?php if($nav=='10') echo 'class=\'active\'';?>><a href='user.php?nav=10'><span class='glyphicon glyphicon-cog'></span> USER</a></li>
</ul>

<button type='button' class='btn btn-danger navbar-btn navbar-right' onclick="window.location.href = 'index.php';"><span class='glyphicon glyphicon-off'></span> Logout </button>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


