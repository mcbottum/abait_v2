<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>abaitsolutions</title>
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
	if(notEmpty(mail, "Please enter highlighted information")){
		if(notEmpty(password, "Please enter highlighted information")){
			//if(emailValidator(mail, "Please enter a valid email address")){
				return true;
			//}
							
		}
	}
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
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		elem.style.background = 'yellow';
		return true;
	}else{
		elem.style.background = 'Yellow';
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>

<link 	rel = "stylesheet"
		type = "text/css"
		href = "abaitsolutions.css">
</head>
<body>
<fieldset id="main">
<div id="body">
	<div id = "lefthead">
		abaitsolutions
	</div>
	<div id="righthead">
		adaptive solutions to a dynamic world
	</div>

		<form 	onsubmit='return formValidator()'
				action = "agitationpasscheck.php" 
				method = "post">

				<div >
					<img id="logo3"src= "person-at-the-window.jpg" width=999px  height=300px alt="hi" />
				</div>
			
				<ul id=menu>
					<li><a>Home</a></li>
					<li><a href="logout.php">ABAIT Test db</a></li>
					<li><a href="logout.php">ABAIT Tool	</a></li>
					<li><a href='mailto:mcbottum@abaitsolutions.com? subject=Contact Information'>Contact abaitsolutions</a></li>
				</ul>	
		<!--<div class="scroll">
This is the Scrolling Box Area used within a div tag.oaiuh;lans;ldfkna;lsdfn;oalsdfn;lasdfksdf
asdfasjkdlfna;lksdnjf;laksndf;lkansdf
asdflkjasdkfjlha;skdjfn;alsdjknf;klajnsdf
asdfkjlabsdkfjba;skjdfn;lkansd;lfkjna;lksjdnfl;kjanbsdf
asdfkjbasldkfuh;alishdnlnz;lvkcuane;fhkubsef;uk.hb
		</div> 
		-->
		<div id = "homename">
			<table class="subcenter"><tr><td>
				
				<fieldset id='login' class="shadow">
			
					<table>
							<tr><th span=2>abaitsolutions Login</th></tr>
							<tr><td align="right">
								<label>E-mail:</label>
								<input 	type = "text" id = 'mail' name = "mail"/>
							</td></tr>
							<tr><td align="right">
								<label>Password:</label>
								<input	type = "password" id = 'password' name = "password"/>
							</td></tr>

							<tr><td align="center">
								<a><input 	type = "submit"
									name = "submit"
									value = "Submit Username and Password"></a>
							</td></tr>
					</table>
				</fieldset>
				
				</td></tr>
				<tr><td align='center'>
					<FORM>
						<INPUT type="button" value="About ABAIT" onClick="window.open('ABAIT_info.html','mywindow','width=978,height=1000,scrollbars=yes')">
					</FORM>
				</td></tr>
			</td></tr></table>
		</div>
<div id="footer"><p>&nbsp;Copyright &copy; 2010 ABAIT</p><a href='ABAIT_Privacy_Policy.html' target="_blank">Privacy Policy</a></div>

</div>
</fieldset>
</body>
</html>