<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title>Gaming Login Form Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script language="JavaScript" type="text/javascript">
	
	function checkform ( form ) 
	{
	if(form.username.value=="")
	{
	alert("Please enter Username");
	form.username.focus();
	return false;
	}
	if(form.password.value=="")
	{
	alert("Please enter Password");
	form.password.focus();
	return false;
	}
	return true;
	}
	</script>

</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="./images/5.png" alt=" "> Gaming Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">

				<form action="http://localhost/Game/main_page/register/login/login_submit.php" method="post" onsubmit="return checkform(this)">
					<input type="text" name="username" id="username"  placeholder="User Name" required=""/>
					<input type="password"  name="password" class="padding" id="password" placeholder="Password" required=""/>

					<input type="submit" id="loginbutton" value="login" onclick="alert('Logged in successfully!!)">
				</form>

			</div>
		  <div class="clear"> </div>
		</div>
		
		<div class="footer">
		<p>© 2017 Gaming Login form. All Rights Reserved </p>
		</div>
	</div>
</body>
</html>