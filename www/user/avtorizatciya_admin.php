<?php
session_start();
if( (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) )
{
	include_once("avtorizatciya.php"); // adminLogin.php
	exit;
}

if(file_exists("avtorizatciya_config.php"))
{ // admin-Login-Only admin user and password file
	require_once("avtorizatciya_config.php");
}
/* adminOnly.php
  if the session variables are not set or are incorrect values 
  then present the login screen
*/
/*if( $ip != $iphois or   ($_SESSION['adminUser'] != $ADMINUSER) || ($_SESSION['adminPassword'] != $ADMINPASSWORD) )
{//header("Location: index.php");
	include_once("avtorizatciya.php"); // adminLogin.php
	exit;
}*/
?> 


<?php
/*
if (isset($_POST['fio']))		{$fio = $_POST['fio'];		if ($fio=='')			{unset($fio);}}
if (isset($_POST['parol']))		{$parol=$_POST['parol'];	if ($parol=='')			{unset($parol);}}

if( (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) )
{
	$result = mysql_query("SELECT * FROM mehanik WHERE mehanik='$fio'",$db);
	$myfio = mysql_fetch_array($result);

	define("ADMINUSER", $myfio['mehanik']); // your administration login name - modify - you make it up
	define("ADMINPASSWORD", $myfio['pass']); // your administration password - modify - you make it up 
}
//echo ADMINUSER;
//echo ADMINPASSWORD;


if (($fio == ADMINUSER) && ($parol == ADMINPASSWORD))
{ // test for valid username and password
	session_start();
	$_SESSION['adminUser'] = ADMINUSER;
	$_SESSION['adminPassword'] = ADMINPASSWORD;
	$SID = session_id();
//	include_once("index.php");
	header("Location: index.php");	//$adminHome = ADMINHOME;	//include($adminHome);
//	header(h);	//$adminHome = ADMINHOME;	//include($adminHome);
}
//$SID = session_id();


//echo $_SESSION['adminUser'];
//echo $_SESSION['adminPassword'];

//echo $SID;
*/
?>