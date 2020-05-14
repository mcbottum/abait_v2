<?session_start();
if($_SESSION['passwordcheck']!='pass'){
	header("Location:logout.php");
	print $_SESSION['passwordcheck'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>ABAIT_Scale_Setup.php</title>
<script type='text/javascript'>
</script>
<link 	rel = "stylesheet"
		type = "text/css"
		href = "ABAIT_admin.css">

</head>
<body>
<div id="body">
<?
$first=$_SESSION['adminfirst'];
$last=$_SESSION['adminlast'];
	print"<table width='100%'>\n";
		print"<tr>\n";
			print"<td valign='bottom' align='right'>$first Logged in</td>\n";
		print"</tr>\n";
	print"</table>\n";
?>
<div id="globalheader">
	<ul id="globalnav">
		<li id="gn-home"><a href="adminhome.php"</a></li>
		<li id="gn-maps"><a href="adminhome.php">Maps</a></li>
		<li id="gn-contact"><a href="mailto:bott1@centurytel.net?subject=Feedback on ABAIT">Contact ABAIT</a></li>
		<li id="gn-logout"><a href="logout.php">Logout</a></li>
	</ul>
</div><!--/globalheader-->
<?
	$sql="SELECT * FROM scale_table";
	$conn=mysqli_connect($_SESSION['hostname'],$_SESSION['user'],$_SESSION['mysqlpassword']) or die(mysqli_error());
	mysqli_select_db($_SESSION['database']);
	$session=mysqli_query($sql,$conn);
?>
<fieldset class="submit">
<form 	name = 'form1'
		action = "ABAIT_Scale_Edit.php"
		onsubmit='return valFrm()'
		method = "post">
<h2>ABAIT Scale Creation Page</h2>
<h4>This page will alow the creation of Scales for new target populations.</h4>
<h4>Existing Scale information will not be overwritten.</h4>

</form>
			<div id = "submit">
				<input 	type = "submit"
						name = "submit"
						value = "Submit Choice for ABAIT Scale Edit">
			</div>


</fieldset>


<div= id= "footer"><p>&nbsp;Copyright &copy; 2010 ABAIT</p></div>
</div>
</body>
</html>