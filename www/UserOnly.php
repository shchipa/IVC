<?
if (isset($_POST['loguser']))
{
// $name=mysql_real_escape_string($_POST['loguser']); // ������� �� ������ ������ �������(����� �� ��������)
// $pass=mysql_real_escape_string($_POST['logpass']); // ����������
	require_once("config.php");
	require_once("db.php");
	$query = "SELECT * FROM users WHERE username='$loguser' AND password='$logpass'"; //�������� �� ����
	$res = mysql_query($query) or trigger_error(mysql_error().$query); // ���� �� ���� ������� �� ���������� ������
	if ($row = mysql_fetch_assoc($res))
	{ // ���� ���� ������� �� ����� ���������
		session_start(); // ��������� ������
		$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['user'] = $row['username'];
		$_SESSION['pass'] = $row['password'];
		$_SESSION['groop'] = $row['groop'];
	}
	header("Location: neispr.php");
	exit;
}
if (isset($_GET['action']) AND $_GET['action']=="logout")
{ // ���� ���� ������ �����
	session_start();
	session_destroy();
	header("Location: mehanics.php");
	exit;
}
if (isset($_REQUEST[session_name()])) session_start();
if (isset($_SESSION['user']) and isset($_SESSION['pass']) and isset($_SESSION['groop']) AND ($_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) ) return;
// ���� ��� � ������ ���������, �� ������� � ����������� ���������
else
{ // ���� �� ���������, �� ���������� ����� ��� �����
	header("Location: mehanics.php");
}
exit;
?>