<?php
session_start();

/**
   * If you only wish to nullify all of the session variables.
   *
**/
$_SESSION = array();

/**
   * read and save session name to later void session
   * cookie
   *
**/
$session_name = session_name();   

/**
  * destroy session data.
  * no need to use session_unset() in PHP5
**/
session_destroy();

/**
   * If you wish to kill the session, then you must
   * delete the  session cookie.
   * An http request is needed to effectively
   * set the cookie to permanent inactive status;
   * only the browser can remove the cookie.
   * 
**/

if ( isset( $_COOKIE[ $session_name ] ) ) {
    if ( setcookie(session_name(), '', time()-3600, '/') ) {
        header("Location: ../index.php");
        exit();    
    }
    else
    {
        // setcookie() fails when there is output sent prior to calling this function.
    }
}











/*
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies"))
{
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}

// Finally, destroy the session.
session_destroy();
*/






/*session_start();
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
	$_SESSION = array();
	setcookie("PHPSESSID", null); 

	//header("Location: tehnika.php");
	echo"<h1>Logged out</h1>";
	echo $_SESSION['adminUser'];
	echo $_SESSION['adminPassword'];
}
else
{
echo "<h1 style=\"color:red;\">NOT Logged Out</h1>";
echo "Please contact the system administrator.";
}*/
?>