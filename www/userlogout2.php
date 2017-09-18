<?php 
session_start();
function session_clear()
{
	$exists = "no";
	$session_array = explode(";",session_encode());
	for ($x = 0; $x < count($session_array); $x++)
	{
		$name  = substr($session_array[$x], 0, strpos($session_array[$x],"|")); 
		if (session_is_registered($name))
		{
			session_unregister('$name');
			$exists = "yes";
		}
	}
	if ($exists != "no")
	{
	   session_destroy();
	}
}
session_clear();
if(!session_is_registered(session_name()))
{
	header("Location: sboi.php");
	//echo"<h1>Logged out</h1>";
}
else
{
echo "<h1 style=\"color:red;\">NOT Logged Out</h1>";
echo "Please contact the system administrator.";
}
?>