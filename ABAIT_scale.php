<?session_start();
include("ABAIT_function_file.php");
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
<meta http-equiv="Content-Type" content="text/html;
    charset=utf-8" />
<title>
<?
print $_SESSION['SITE']
?>
</title>
<link   rel="stylesheet" 
        type="text/css" 
        href="datetimepicker-master/jquery.datetimepicker.css"/ >
<script type='text/javascript' src="datetimepicker-master/jquery.js"></script>
<script type='text/javascript' src="datetimepicker-master/jquery.datetimepicker.js"></script>
<script type='text/javascript'>

function validate_form()
{
    valid=true;
    var alertstring=new String("");

    if (document.form1.date.checked == false&&document.form1.datetimepicker.value=="" ) {
        alertstring=alertstring+"\n-either today or other date of episode-";
        document.getElementById("date_header").style.background = "yellow";
        // document.form1.date.style.background = "yellow url('select_if_now.png') 96% / 100% no-repeat";
        document.form1.datetimepicker.style.background = "Yellow";

        valid=false;
    }else if (document.form1.date.checked ) {
        // document.form1.date.style.background = "#33aaff url('now.png') 96% / 100% no-repeat";
        document.form1.date.style.background = "white";

    }//end date of episode check

    if(document.form1.duration.selectedIndex==""){
        alertstring=alertstring+"\n-Duration of the Behavior Episode-";
        document.form1.duration.style.background = "Yellow";
        valid=false;
    }else{
        document.form1.duration.style.background = "white";
    }//end ampm check

    var rb=radiobutton(document.form1.intensityB);
    if(rb==false){
        alertstring=alertstring+"\n-behavior intensity BEFORE interventions-";
        //document.form1.intensityB[0].style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    var rb=radiobutton(document.form1.intensityA1);
    if(rb==false){
        alertstring=alertstring+"\n-behavior intensity After FIRST intervention-";
        //document.form1.intensityB.style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    var rb=radiobutton(document.form1.intensityA2);
    if(rb==false&&document.form1.intervention2.selectedIndex!=''){
        alertstring=alertstring+"\n-behavior intensity After SECOND intervention-";
        //document.form1.intensityB.style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    var rb=radiobutton(document.form1.intensityA3);
    if(rb==false&&document.form1.intervention3.selectedIndex!=''){
        alertstring=alertstring+"\n-behavior intensity After THIRD intervention-";
        //document.form1.intensityB.style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    var rb=radiobutton(document.form1.intensityA4);
    if(rb==false&&document.form1.intervention4.selectedIndex!=''){
        alertstring=alertstring+"\n-behavior intensity After FOURTH intervention-";
        //document.form1.intensityB.style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    var rb=radiobutton(document.form1.intensityA5);
    if(rb==false&&document.form1.intervention5.selectedIndex!=''){
        alertstring=alertstring+"\n-behavior intensity After FIFTH intervention-";
        //document.form1.intensityB.style.background = "Yellow";
        valid=false
    }   //end call for intensity Before intervention radio button check

    // checking the other way
    var rb=radiobutton(document.form1.intensityA2);
    if(rb==true&&document.form1.intervention2.selectedIndex==''){
        alertstring=alertstring+"\n-Select SECOND intervention-";
        document.form1.intervention2.style.background = "Yellow";
        valid=false
    }
    var rb=radiobutton(document.form1.intensityA3);
    if(rb==true&&document.form1.intervention3.selectedIndex==''){
        alertstring=alertstring+"\n-Select THIRD intervention-";
        document.form1.intervention3.style.background = "Yellow";
        valid=false
    }
    var rb=radiobutton(document.form1.intensityA4);
    if(rb==true&&document.form1.intervention4.selectedIndex==''){
        alertstring=alertstring+"\n-Select FOURTH intervention-";
        document.form1.intervention4.style.background = "Yellow";
        valid=false
    }
    var rb=radiobutton(document.form1.intensityA5);
    if(rb==true&&document.form1.intervention5.selectedIndex==''){
        alertstring=alertstring+"\n-Select FIFTH intervention-";
        document.form1.intervention5.style.background = "Yellow";
        valid=false
    }

    if(valid==false){
        alert("Please enter the following data;" + alertstring);
    }//generate the conncanated alert message

    function radiobutton(rb)
    {
        var count=-1;
        for(var i=rb.length-1;i>-1;i--){
            if(rb[i].checked){
                count=i;
                i=-1;
            }
        }
        if(count>-1){
            return true;
        }else{
            return false;
        }
    }//end radiobutton

    return valid;
}//end form validation function


function show( selTag ) {
    obj1 = document.getElementById("behavior_description_tag");
    obj = document.getElementById("behavior_description");
    if ( selTag.selectedIndex == 1 ) {
        obj1.style.display = "block";
        obj.style.display = "block";
        obj1.style.align="center";
    } else {
        obj1.style.display = "none";
        obj.style.display = "none";
    }
}

function show2( selTag, int ) {
    var targetIntervention=int+1;
    obj1 = document.getElementById("intervention_"+targetIntervention);
    obj2 = document.getElementById("behaviorIntensityAfterButtonHeader_"+int);
    obj3 = document.getElementById("behaviorIntensityAfterButton_"+int);
    obj4 = document.getElementById("intensityAfterHeader_"+int)
    obj5 = document.getElementById("intensityAfterHeader_"+targetIntervention)


    if ( selTag.selectedIndex == 1 ) {
        obj1.style.display = "block";
        obj2.style.display = "block";
        obj3.style.display = "block";

    } else {
        if(targetIntervention < 6){
            obj1.style.display = "inline-block";
        }
        document.getElementById("intervention_"+int).style.display = "inline-block";
        obj2.style.display = "table-row";
        obj3.style.display = "inline";
        obj4.style.display = "table-row";
        obj5.style.display = "table-row";
    }
}

function showIntervention( selTag,  ) {
    obj1 = document.getElementById("behavior_description_tag");
    obj = document.getElementById("behavior_description");
    if ( selTag.selectedIndex == 1 ) {
        obj1.style.display = "block";
        obj.style.display = "block";
        obj1.style.align="center";
    } else {
        obj1.style.display = "none";
        obj.style.display = "none";
    }
}

function checked(id){
    return document.getElementById(id).checked;
}

function hide(id){

    var hideObj = document.getElementsByName("datetimepicker")[0];
    var displayToday = document.getElementById("datetimepicker5_cell");
    if(checked(id)){
        var today = new Date();
        hideObj.style.display = "none";
        displayToday.innerHTML = today.toString();

    }else{

        
        displayToday.innerHTML = "<input placeholder='Touch to enter' style='display: block' class='datetimepicker5' name = 'datetimepicker' type='text' >"

    }

}

function reload(selTag) {
    if (selTag.value == 'new_intervention') {
        val2 = form1.residentkey.value;
        self.location='resident_map.php?k='+val2;
    }else{
        var num = selTag.id.split('_')[1] +1;
        var next_intervention_id = "intervention_"+num
        // obj1 = document.getElementById(selTag.id+"_tag");
        obj = document.getElementById(selTag.id);
        if ( selTag.selectedIndex == 1 ) {
            // obj1.style.display = "block";
            obj.style.display = "block";
            // obj1.style.align="center";
        } else {
            // obj1.style.display = "none";
            obj.style.display = "none";
        }
    }
}

function clicked(button){
    document.getElementById('PRN').value=1;
    document.getElementById('PRN').selectedIndex=1;
    show(document.getElementById('PRN'));
}
function checkDate(){
    var todaysDate = new Date();
    var selDate = new Date(form1.datetimepicker.value)
    if(selDate > todaysDate){
        alert("The Selected date may not be in the future (" + todaysDate +")");
        document.form1.datetimepicker.value = "";
    }else{
        document.form1.datetimepicker.style.background = "White";
    }
}

</script>

<link   rel = "stylesheet"
        type = "text/css"
        href = "ABAIT.css">
<style>
    table.local thead th{
        width:175px;
        background-color: #D8D8D8;
    }
    table.local tbody{
        max-height: 400px;
    }
    table.local tbody td{
        width:175px;
        background-color: #D0D0D0;
    }

    table.hover tbody tr:hover{
        background-color: #D3D3D3;
    }
    label {
        /* whatever other styling you have applied */
        width: 100%;
        display: inline-block;
    }
    th{
        background-color: #c3c3c3;
        font-size: 18px;
    }
    table.scaleTables{
        background-color: #F8F8F8;
    }

/*    .behaviorIntensityAfter{
        display: none;
    }*/

</style>
</head>
<body>
<fieldset>
<!-- <div id="body" style="width:980px;margin: 0px auto 0px auto; text-align: left"> -->
<div id="body">
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
<form   name="form1"
        onsubmit='return validate_form()'
        action = "ABAIT_scale_datalog.php"
        method = "post">
<?
$residentkey=$_SESSION['residentkey'];
// $residentkey=$_REQUEST['residentkey'];
// $_SESSION['residentkey']=$residentkey;
$sn=str_replace('_',' ',$_REQUEST['scale_name']);
if($sn==''){
    $scale_name=$_SESSION['scale_name'];
}else{
$_SESSION['scale_name']=$sn;
$scale_name=$sn;
}

if(isset($_GET['trig'])){
    $trigger=$_GET['trig'];
}else{
    $trigger=$_REQUEST['trig'];
}
$_SESSION['trigger']=$trigger;
$conn1=mysqli_connect($_SESSION['hostname'],$_SESSION['user'],$_SESSION['mysqlpassword'], $_SESSION['db']) or die(mysqli_error());
$sql1="SELECT * FROM behavior_maps WHERE mapkey='$trigger'";
$sql2="SELECT SUM(intervention_score_1), SUM(intervention_score_2), SUM(intervention_score_3), SUM(intervention_score_4), SUM(intervention_score_5), SUM(intervention_score_6) FROM behavior_map_data WHERE mapkey='$trigger'";
$sql3="SELECT * FROM scale_table WHERE scale_name LIKE '$_SESSION[scale_name]%'";
$conn1=mysqli_connect($_SESSION['hostname'],$_SESSION['user'],$_SESSION['mysqlpassword'], $_SESSION['db']) or die(mysqli_error());
$scale=mysqli_query($conn1,$sql1);
$score_sum=mysqli_query($conn1,$sql2);
$intensity=mysqli_query($conn1,$sql3);

$first=$_SESSION['first'];
$last=$_SESSION['last'];
print"<div id='head'>\n";
print $scale_name." Support Plan for  ".$first."  ".$last;
print"</div>\n";
print "<input type='hidden' id='residentkey', name='residentkey' value='".$residentkey."'>";
// print "<input placeholder='Touch to enter' style='display: block' id='datetimepicker5Holder' style='display: none' name = 'datetimepicker' type='text' >";
?>

            <h3 align='center'><label>Date and Time Information</label></h3>
            <table class='scaleTables ' align='center' width='75%' border="1">
                <tr>
                    <th width="307" align="center" > Select if episode is taking place now</th>
                </tr>
                <tr>
                    <td height='40' align="center" id = "date_header">

                        <input  type = "checkbox"
                                name = "date"
                                id = "now"
                                class="checkbox"
                                onchange = "hide('now')"
                                value = "1"/>
                    </td>
                </tr>

                <tr>
                    <th width="307" align="center"> Or select date and time</th>
                </tr>

                <tr>
                    <td height='40' align="center" id="datetimepicker5_cell">
                    <!-- <div id="datetimepicker5"> -->
                    <!-- <input placeholder="Touch to enter" style="display: block"  class="datetimepicker5" name = 'datetimepicker' type="text" > -->
                    <input id="datetimepicker5" onchange="checkDate()" name="datetimepicker"  autocomplete="off" type="text" placeholder='Touch to enter'/>
                    <!-- </div> -->
                </td>
                <tr>
                    <th align="center">Duration of episode</th>
                </tr>

            </tr>
            <tr>

                <td height='40'  align="center">

                    <select name = "duration" id="durat">
                    <option value = "">Choose Minutes</option>
                    <?
                    for($t = 5;$t <= 90;$t +=5){
                        print "<option value = $t>$t</option>";
                    }
                    ?>
                        <option value = "105">Greater than 90 minutes</option>
                    </select>

                </td>
            </tr>

        </table>
    <?

    $row=mysqli_fetch_assoc($scale);
    $row2=mysqli_fetch_assoc($score_sum);
    $row=array($row['intervention_1'], $row['intervention_2'], $row['intervention_3'], $row['intervention_4'], $row['intervention_5'],$row['intervention_6']);
    $intervention_rank=array(1,2,3,4,5,6);
    array_multisort($row2,$row,$intervention_rank);

    //FOR INTENSITY SELECTION
    $row3=mysqli_fetch_assoc($intensity);
    $color_array = ['#FF000','#00FF00','#ADFF2F','#FFD700','#FF7F50','#FF0000'];
    // $color_array = ['red','orange','yellow','lightgreen','green','blue'];

    print"<h3 align='center'><label>Select Behavior Intensity</label></h3>\n";
    print"<table align='center' class='scaleTables' width='75%' border='1'>\n";

 // THESE ARE THE INTERVENTION SELECT BOXES  
            print "<div id='behaviorIntensityBefore'>";
                print "<tr>";
                    print "<th width='100%'  colsapan=2 align='center'>Behavior Intensity</th>";
                    print "<th align='center'><span style='color:red'>BEFORE</span> ANY  Intervention</th>";
                print "</tr>";
                for($i=1;$i<6;$i++){
                    print"<tr class='raised' style='background:$color_array[$i]'>";
                    $comment='comment_'.$i;
                        print"<td class='scaleIntensity' style='padding-left:4px'>$row3[$comment]</td>";
                                print"<td align='center'><label><input type='radio'
                                            name='intensityB'
                                            id='intensity$i'
                                            value=$i></label>";
                        print "</td>";
                    print "</tr>";
                }
            print "</div>";     
            for($int=1; $int<7; $int++){

                    // print "<div id='behaviorIntensityAfter_$int' class='behaviorIntensityAfter' style='display: none'>";

                    // print "<tbody id='BehaviorIntensityAfter_$int' class='BehaviorIntensityAfter' style='display:none'>";
                            if($int<3){  //allow five interventions
                                print"<tr align='center' id='intensityAfterHeader_$int'>";
                                    if($int==1){
                                        print "<th  colspan=2 width='150' style='display:bock'>Intervention $int</span></th></tr>";
                                    }else{
                                        print "<th colspan=2 >Intervention $int <span style='color:Lime'>(optional)</span></th></tr>";
                                    }
                            }elseif($int<6 && $int>2){  //allow five interventions
                                print"<tr id='intensityAfterHeader_$int' align='center' class='behaviorIntensityAfter' style='display:none'>";
                                    print "<th colspan=2 >Intervention $int <span style='color:Lime'>(optional)</span></th></tr>";
                            }else{
                                print"<tr align='center' class='behaviorIntensityAfter'>";
                                    print "<th colspan=2 >Medication Given</th></tr>";
                            }

                            if($int<3){
                                print"<tr id='behaviorIntensityAfterSelect_$int' align='center' class='behaviorIntensityAfter'>\n";
                                $display = "block";
                            }elseif($int<6 && $int>2){
                                print"<tr id='behaviorIntensityAfterSelect_$int' align='center' class='behaviorIntensityAfter'>\n";
                                $display = "none";
                            }else{
                                print"<tr id='behaviorIntensityAfterSelect_$int' align='center' class='behaviorIntensityAfter'>\n";
                            }
                                print"<td colspan=2>\n";
                                        if($int<6){
                                            $t_intervention = 'intervention'.$int;
                                            print"<select class='selBox' name ='intervention$int' id='intervention_$int' onchange='reload(this); show2(this, $int)' style='display:$display'>";
                                            //end new
                                                if($int==1){
                                                    $s=5;
                                                }else{$s=6;}
                                                for($r=$s;  $r>-1;  $r--){
                                                    $intervention='intervention_'.$r;
                                                        if($row[$r]!="None Set"){
                                                            print "<optGroup>";
                                                                print "<option value=$intervention_rank[$r]>$row[$r]</option>\n";
                                                            print "</optGroup>";
                                                        }
                                                }
                                            ?><optGroup><option class='red' style='color:blue; font-weight:bold' value='new_intervention' style='color:red'>New Idea</option>
                                            </optGroup><?
                                        }else{
                                            print"<select name='intervention6' id='PRN' onchange='show(this)' >";
                                                print "<optGroup>";
                                                    print"<option value='0' selected>NO</option>";
                                                    print"<option value='1'>YES</option>";
                                                print "</optGroup>";
                                            }
                                        print "</select>\n";
                                print"</td>\n";
                            print"</tr>";
                            
                            if($int==6){
                                print"<tr id='behavior_tr1'>";
                                    print"<td colspan='6' align='center'>";
                                        print"<div id='behavior_description_tag' style='display: none; color: red;'>Enter specific description of behavior which required PRN in yellow text-box.</div>";

                                    print "</td>";
                                print "</tr>";
                                print "<tr id='behavior_tr2'>";
                                    print "<td  colspan='6' align='center'>";
                                        print "<div>";

                                            print"<input type = 'text' name='behavior_description' id='behavior_description'; style='display: none; background-color: yellow; align:center; width:99%;' value=''/>";
                                        
                                        print "</div>";
                                    print "</td>";
                                print "</tr>";
                            }



                            print "<tr><td colspan=2 style='padding:0px'>";
                            print "<table style='padding:0px' width='100%' border='1'>";

                    if($int==1){
                        print "<tbody colspan=4 id='behaviorIntensityAfterButton_$int'>";
                    }else{
                        print "<tbody colspan=4 id='behaviorIntensityAfterButton_$int' style='display:none'>";}
                            print "<tr id='behaviorIntensityAfterButtonHeader_$int' class='behaviorIntensityAfter' >";
                                    print "<th width='100%'  colsapan=2 align='center'>Behavior Intensity</th>";
                                    if($int<6){
                                        print "<th  align='center'><span style='color:red'>AFTER </span> $int  Intervention</th>";
                                    }else{
                                        print "<th  align='center'><span style='color:red'>AFTER </span> Medication</th>";
                                    }
                            print "</tr>";

                            for($i=1;$i<6;$i++){
                                // print "<tbody id='behaviorIntensityAfterButton_$int' style='display:none'>";
                                    print"<tr id='behaviorIntensityAfterButton_$int' class='raised behaviorIntensityAfter' style='background:$color_array[$i]'>";
                                    $comment='comment_'.$i;
                                            print"<td class='scaleIntensity'  style='padding-left:4px'>$row3[$comment]</td>";
                                            print"<td  align='center'><label><input type='radio'
                                                        name='intensityA$int'
                                                        id='intensity$i'
                                                        value=$i></label>";
                                            print "</td>";
                                    print "</tr>";

                            }
                     print "</tbody>";
                     print "</table>";
                     print "</td></tr>";
                

            }
        print "</tr>";
        print "</table>";



?>
        
            </div>
            <div id="submit">
                <input  type = "submit"
                        name = "submit"
                        value = "Submit Resident Plan Data"/>
            </div>
    </fieldset>
    </form>

    <?build_footer()?>
</body>
<script type="text/javascript">jQuery('#datetimepicker5').datetimepicker({
 datepicker:true,
 formatTime:'g:i a',
  allowTimes:['00:00 am','00:30 am','01:00 am','01:30 am','02:00 am','01:30 am','02:30 am','03:00 am','03:30 am','04:00 am','04:30 am','05:00 am','05:30 am',
    '06:00 am','06:30 am','07:00 am','07:30 am','08:00 am','08:30 am','09:00 am','09:30 am','10:00 am','10:30 am','11:00 am','11:30 am',
    '12:00 pm','01:00 pm','01:30 pm','02:00 pm','01:30 pm','02:30 pm','03:00 pm','03:30 pm','04:00 pm','04:30 pm','05:00 pm','05:30 pm',
    '06:00 pm','06:30 pm','07:00 pm','07:30 pm','08:00 pm','08:30 pm','09:00 pm','09:30 pm','10:00 pm','10:30 pm','11:00 pm','11:30 pm']
});
</script>
<script type="text/javascript">$('#cal_button').click(function(){
  $('#datetimepicker5').datetimepicker('show'); //support hide,show and destroy command
});
</script>
</html>
