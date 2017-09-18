<?php
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных

//$result = mysql_query ("SELECT * FROM sboy",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("../high.php"); //Подключаем шапку сайта
?>
<tr>
<?php
	include ("left.php"); //Подключаем левую часть
?>

<td>
<?
if (isset($_POST['fio']))	{$fio=$_POST['fio'];		if ($fio=='')	{unset($fio);}}
if (isset($_POST['parol']))	{$parol=$_POST['parol'];	if ($parol=='')	{unset($parol);}}


if ($fio=="superadmin" and $parol=="FT72amwq_zerdgros100")
{
	include ("delete_sboy_admin_tabl.php");
}
else
{
	printf("
	<form action='delete_sboy_admin.php' method='post' name='avtoriz' id='avtoriz'>
	<table border='0'  align='center'	cellspacing='0'	cellpadding='0'>
		<tr>
			<td colspan='2' class='r16'></br></br>Необходимо авторизоваться!</br></br></td>
		</tr>
		<tr height='50'>
			<td class='g16'>Логин:</td>
			<td><input name='fio' type='text' size='25' input='input'></td>
		</tr>
		<tr height='50'>
			<td class='g16'>Пароль:</td>
			<td><input name='parol' type='password' size='25' input='input'></td>
		</tr>
		<tr>
			<td colspan='2' align='center'><input name='submit' type='submit' class='g14' id='submit' value='Войти'></br></br></td>
		</tr>
	</table>
	</form>
	");
}

?>

</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
