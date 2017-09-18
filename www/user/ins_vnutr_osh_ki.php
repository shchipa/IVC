<?php
include ("db.php");//Соединяемся с базой данных

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкция по внутренней ошибке КИ. Два по Сто</title>
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
	<p align="center"><b>ВНУТРЕННЯЯ ОШИБКА КИ</b><br><br></p>

<p align="center">КОНЦЕНТРАТОР выдаёт <b>«Внутренняя ошибка КИ»</b>.<br>Решение проблемы:</p>
<ol>
<li>Используя комбинацию клавиш <b>Alt+Ctrl+Del</b> перейти в Диспетчер задач;</li>
<li>Перейти на вкладку <b>Процессы</b>;</li>
<li>В списке процессов выделить и завершить с помощью кнопки <b>«Завершить процесс»</b> или контекстного меню (щелчок правой кнопки мыши) процесс <b>SHED32.EXE</b>.</li>
<li>Удалить папку <strong>files</strong> или<strong> files32</strong> находящуюся в корне диска <strong>С:\</strong>.</li>
<li>Запустить <strong>Концентратор</strong>.</li>
<li>Если <strong>Концентратор</strong> запустился снова с ошибкой <b>сохранив конфигурацию RWSoft</b> (<u>concentr.cfg, concdev.cfg, concrun.cfg, route.cfg</u>), переустановить концентратор, перейдя в учётную запись <b>Администратор</b>.</li>
</ol>
<br>
<p align="center">Для перехода в учётную запись Администратор необходимо <b>завершить</b> текущий сеанс:</p>
<ol>
<li>Пуск > Завершение сеанса … > Выход;</li>
<li>Зайти в учётную запись Администратор.</li>
</ol>

</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
