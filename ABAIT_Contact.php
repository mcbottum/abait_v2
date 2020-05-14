<?
include("ABAIT_function_file.php");
ob_start()?>
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
<title>
<?
print $_SESSION['SITE']
?>
</title>
<link 	rel = "stylesheet"
		type = "text/css"
		href = "ABAIT.css">
</head>
<body>
<?
if($_SESSION['cgfirst']!=""){
	$cgfirst=$_SESSION['cgfirst'];
	$cglast=$_SESSION['cglast'];
	}else{
	$cgfirst=$_SESSION['adminfirst'];
	$cglast=$_SESSION['adminlast'];
	}
build_page($_SESSION['privilege'],$cgfirst);
?>

<div id = "head">

<h3>ABAIT Contact Information</h3>

</div>
<fieldset>
<table>
	<tr>
	<td>
<div id="label">


	</td></tr>
</div>
	<tr><td valign='top'>
<?
	print"<ul>";

		print"<li><h3>Please Select Your Choice</h3></li>";
			print"<ul><h3>";
				print "<li><a href='mailto:michael@abehave.com?subject=Technical Help Question'>Technical Help</a></li>";
				print "<li><a href='mailto:paul@abehave.com?subject=Business Model Question'>Business Model</a></li>";
				print "<li><a href='mailto:suzanne@abehave.com?subject=Healthcare Provider Question'>Healthcare Provider Models and Information</a></li>";
			print"</h3></ul>";
		print"</ul>";
?>

	</td><td>
	<div>
		<img id="logo3"src= "ABAITdataflow.png" height=450px alt="hi" />
	</div>
	</td>
	</tr>
	</table>
</fieldset>

<?build_footer()?>
</body>
</html>
