<?
if (isset($_POST['loguser']))
{
// $name=mysql_real_escape_string($_POST['loguser']); // удаляет из строки лишние гадости(чтобы не взломали)
// $pass=mysql_real_escape_string($_POST['logpass']); // аналогично
	require_once("config.php");
	require_once("db.php");
	$query = "SELECT * FROM users WHERE username='$loguser' AND password='$logpass'"; //Выбирает из базы
	$res = mysql_query($query) or trigger_error(mysql_error().$query); // если не смог выбрать то генерирует ошибку
	if ($row = mysql_fetch_assoc($res))
	{ // если есть выборка то пошло сравнение
		session_start(); // запускает сессию
		$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['user'] = $row['username'];
		$_SESSION['pass'] = $row['password'];
		$_SESSION['groop'] = $row['groop'];
	}
	header("Location: neispr.php");
	exit;
}
if (isset($_GET['action']) AND $_GET['action']=="logout")
{ // если юзер выбрал выход
	session_start();
	session_destroy();
	header("Location: mehanics.php");
	exit;
}
if (isset($_REQUEST[session_name()])) session_start();
if (isset($_SESSION['user']) and isset($_SESSION['pass']) and isset($_SESSION['groop']) AND ($_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) ) return;
// если имя и пароль совпадает, то выходим и запускается страничка
else
{ // если не правильно, то показываем форму для входа
	header("Location: mehanics.php");
}
exit;
?>