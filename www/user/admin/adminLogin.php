<?php
if(file_exists("config.php"))
{ // admin-Login-Only admin user and password file
	require_once("config.php");
}
// begin SECURITY - DO NOT CHANGE!
// initialize or retrieve the current values for the login variables

$loginAttempts = !isset($_POST['loginAttempts'])?1:$_POST['loginAttempts'];
$formuser = !isset($_POST['formuser'])?NULL:$_POST['formuser'];
$formpassword = !isset($_POST['formpassword'])?NULL:$_POST['formpassword'];
if(($formuser != ADMINUSER ) || ($formpassword != ADMINPASSWORD ))
{
	if ($loginAttempts == 0)
	{ /* 3 strikes and they're out */
		$_POST['loginAttempts'] = 1;
		include("adminLoginForm.php");
		exit;
	}
	else
	{
		if ( $loginAttempts >= 3 )
		{
			echo "<blink><p align='center' style=\"font-weight:bold; background:#000; font-size:170px; color:red; font-family:sans-serif;\"><br>Log In<br>Failed.<br> <br></p></blink>"; 
			exit;
		}
		else
		{
			include("adminLoginForm.php");
			exit;
		}
	}
}
/* test for valid username and password
  if valid then initialize the session
register the username and password variables
and redirect to the ADMINHOME page
*/
if (($formuser == ADMINUSER ) && ($formpassword == ADMINPASSWORD ))
{ // test for valid username and password
	session_start();
	$_SESSION['adminUser'] = ADMINUSER;
	$_SESSION['adminPassword'] = ADMINPASSWORD;
	$SID = session_id();
	header("Location: admin_index.php");	//$adminHome = ADMINHOME;	//include($adminHome);
}
?>