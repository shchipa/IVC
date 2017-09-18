<?
include ("db.php");//Соединяемся с базой данных

if (isset($_GET['formuser']))	{$formuser = $_GET['formuser'];	if ($formuser=='')	{unset($formuser);}}
//echo $formuser;
//define("ADMINUSER", "admin"); /* your administration login name - modify - you make it up */
//define("ADMINPASSWORD", "345"); /* your administration password - modify - you make it up */
if (isset($formuser))
{
	$result = mysql_query("SELECT * FROM mehanik WHERE mehanik='$formuser'",$db);
	$myfio = mysql_fetch_array($result);

	$ADMINUSER = $myfio['mehanik']; // your administration login name - modify - you make it up
	$ADMINPASSWORD = $myfio['pass']; // your administration password - modify - you make it up
	$USER = $myfio['user']; // your administration password - modify - you make it up

}
else
{
	$ADMINUSER = 'mehanik'; // your administration login name - modify - you make it up
	$ADMINPASSWORD = 'ass'; // your administration password - modify - you make it up
}
//echo $ADMINUSER;
//echo $ADMINPASSWORD;
?>