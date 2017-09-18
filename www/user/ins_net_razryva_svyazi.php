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
<title>Инструкция по ликвидации сообщения о разрыве связи в КИ. Два по Сто</title>
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
	<p align="center"><b>НЕТ РАЗРЫВА СВЯЗИ</b><br><br></p>
Для того чтобы на рабочих местах не жаловались на <b>«РАЗРЫВ СВЯЗИ»</b> необходимо убрать с консоли КИ все сообщения.
<br><br>
Для этого необходимо сделать следующее:<br>
<ol type="1">
	<li>Запустить Конфигуратор КИ <b>(Пуск > Программы > RWSoft > Concentr Setup)</b>;</li>
	<li>Перейти на вкладку <b>Каналы</b>;</li>
	<li>Зайти в настройки канала <b>00(00)</b>;</li>
	<li>В появившемся окне <b>Параметры CANNEL на канале 00</b> изменить параметр <b>Контроль за состоянием канала</b>;</li>
	<li>Установить  птичку <b>&#8744;</b> на параметр <b>Не выдавать на консоль ничего</b>;</li>
	<li>Аналогично настроить канал <b>01(00)</b>;</li>
	<li>В появившемся окне <b>Параметры CANNEL на канале 01</b> изменить параметр <b>Контроль за состоянием канала</b>;</li>
	<li>Установить  птичку <b>&#8744;</b> на параметр <b>Не выдавать на консоль ничего</b>;</li>
	<li>Применить изменения.</li>
</ol>
<br>
<br>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
