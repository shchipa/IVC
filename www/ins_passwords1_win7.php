<?php
include ("db.php");//Соединяемся с базой данных
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Отключение ждущего режима Windows7. Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {font-size: 18px}
.style5 {
	font-size: 36px;
	font-family: "Courier New";
	font-weight: bold;
}
.style6 {color:#0000FF; font-size: 18px;}
-->
</style>
</head>
<body>
<table width="100%" border="0"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>
<?php
	include ("left.php"); //Подключаем левую часть
?>
<td align="left">
	<p align="center"><b>Инструкция по установке срока действия пароля в Windows 7</b><br><br></p>
<ol type="1">
	<li>Зайти <b>RAdmin'ом</b> в режиме командной строки.</li>
	<li>Прописать команду, которая ставит срок действия пароля в неограничено <b>"net user [имя учетной записи] /expires:never"</b> (обычно имя учетной записи User. С помощью команды "net user" можно посмотреть список учетных записей).</li>
   	<li>Если после предыдущей команды перезагрузить компьютер, то вас попросит задать новый пароль для пользователя, поэтому сразу задаем пароль командой <b>"net user [имя учетной записи] [пароль]"</b> (например "123")</li>
	<li>Перезагружаем компьютер. Входим в учетную запись пользователя с новым паролем и удаляем пароль.</li>

</p>
<br>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
