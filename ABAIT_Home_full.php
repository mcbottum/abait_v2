<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
    charset=utf-8" />
<title>ABAIT Home</title>
<script type='text/javascript'>

function formValidator(){
    // Make quick references to our fields
    var firstname = document.getElementById('firstname');
    var addr = document.getElementById('addr');
    var zip = document.getElementById('zip');
    var state = document.getElementById('state');
    var username = document.getElementById('username');
    var mail = document.getElementById('mail');
    var password = document.getElementById('password');
    
    // Check each input in the order that it appears in the form!
    
        //if(notEmpty(mail, "Please enter highlighted information")){
            //if(emailValidator(mail, "Please check to make sure your e-mail address is valid")){
                if(notEmpty(password, "Please enter highlighted information")){
                
                return true;        
                }
        //}
    //}
    return false;
}

function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
        elem.style.background = 'Yellow';
        alert(helperMsg);
        elem.focus(); // set the focus to this input
        return false;
    }
    elem.style.background = 'white';
    return true;
}

function emailValidator(elem, helperMsg){
    var emailExp = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(elem.value.match(emailExp)){
        elem.style.background = 'white';
        return true;
    }else{
        elem.style.background = 'Yellow';
        alert(helperMsg);
        elem.focus();
        return false;
    }
}

window.onload = function() {
  document.getElementById("password").focus();
};

</script>

<link   rel = "stylesheet"
        type = "text/css"
        href = "ABAIT_Home.css">
</head>
<body>
<div id="body" class="shadow">
<fieldset id='welcome' class="shadow">
    <div id = "head">
        <h1>  Welcome to the </h1>
        <h1>Adaptive Behavior Assessment and Intervention Tool</h1> 
    </div>
</fieldset>
        <form   onsubmit='return formValidator()'
                action = "agitationpasscheck.php" 
                method = "post">
    <table class="center">
        <tr>
            <td>
                <div >
                    <img id="logo3"src= "ABAITdataflow.png" height=475px  alt="hi" />
                </div>
            </td>
    

            <td>
            <table><tr><td>
                <div id = "homename">
                <fieldset id='login' class="shadow">
            
                    <table>
                            <tr><th span=2>Login ID</th></tr>
                            
                            <tr><td align="center" margin-bottum="5px">
                                <input  type = "password" id = 'password' name = "password"/>

                            </td></tr>
                            <tr><br></tr>
                            <tr><td align="center">
                                <input  id = 'submit' type = "submit"
                                    name = "submit"
                                    value = "Submit Login ID">
                            </td></tr>
                    </table>
                </fieldset>
                </div>
                </td></tr>
                <tr><td align='center'>
                
                    <FORM>
                    <div id="aboutabait">
                        <INPUT type="button" value="About ABAIT" onClick="window.open('ABAIT_info.html','mywindow','width=978,height=1000,scrollbars=yes')">
                        </div>
                    </FORM>
                    
                </td></tr>
            </td></tr>
        </table>
    </td></tr></table>
<div id="footer"><p>&nbsp;Copyright &copy; 2012 ABAIT<br>Patent Pending</br><br><a href='ABAIT_Privacy_Policy.html' target="_blank">Privacy Policy</a></br></p></div>
</div>
</body>
</html>