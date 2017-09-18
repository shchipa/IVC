<?php
session_start();
if( (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) )
{
	include_once("adminLogin.php");
	exit;
}

if(file_exists("config.php"))
{ // admin-Login-Only admin user and password file
	require_once("config.php");
}
/* adminOnly.php
  if the session variables are not set or are incorrect values 
  then present the login screen
*/
if( $ip != $iphois or   ($_SESSION['adminUser'] != ADMINUSER) || ($_SESSION['adminPassword'] != ADMINPASSWORD) )
{//header("Location: index.php");
	include_once("adminLogin.php");
	exit;
}
?> 

