<?session_cache_limiter('nocache');
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
<? print"<link rel='shortcut icon' href='$_SESSION[favicon]' type='image/x-icon'>";?>
<meta  name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type"
    charset=utf-8" />
<title>
<?
print $_SESSION['SITE']
?>
</title>
<script type='text/javascript'>
function validate_form()
{

   
}



</script>
<link   rel = "stylesheet"
        type = "text/css"
        href = "ABAIT.css">
        
</head>
<body style="width:980px">
<fieldset  style="width:980px; margin:auto" >
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
    Carer Home Page   
</div>

<img class="datamap_home" id="datamap_home" src = "Caregiver_Buttons_wwhite.svg" ismap usemap="#datamap_home" style="border:none;"></a>
<map name="datamap_home">
<?
if($_SESSION['privilege']=='globaladmin'||$_SESSION['privilege']=='admin'){?>
<area shape="rect"  coords="245,133,372,267" href="caregiverhome.php"/>
<area shape="rect"  coords="245,281,372,342" href="caregiverhome.php"/>
<area shape="rect"  coords="245,354,372,494" href="caregiverhome.php"/>
<area shape="rect"  coords="113,527,236,592" href="caregiverhome.php"/>
<area shape="rect"  coords="246,527,369,592" href="caregiverhome.php"/>
<area shape="rect"  coords="379,527,503,592" href="caregiverhome.php"/>
<?}?>
<!-- <area shape="rect"  coords="7,177,115,307" href="ABAIT_quick_scales.php"/>
<area shape="rect"  coords="7,323,115,455" href="ABAIT_quick_scales.php"/>  -->
<area shape="rect"  coords="185,170,390,330" href="ABAIT_quick_scales.php"/> 
<area shape="rect"  coords="185,350,390,510" href="PRN_effect.php"/> 
<area shape="rect"  coords="185,530,390,690" href="ABAIT_education.php"/> 
</map>  
 <!--    </div> -->
<!--     </td>
    </tr>
    </table> -->

</fieldset>
<?build_footer()?>

</body>
</html>