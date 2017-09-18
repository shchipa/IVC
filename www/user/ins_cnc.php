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
<title>Инструкция по ликвидации ошибки CNC в WinTerm. Два по Сто</title>
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
	<p align="center"><b>ОШИБКА ПРИ ИНИЦИАЛИЗАЦИИ CNC ИНТЕРФЕЙСА</b><br><br></p>
<b>Если WinTerm выдаёт окно «Ошибка при инициализации CNC интерфейса» возможны такие пути решения проблемы:</b><br>
<ol type="1">
	<li><b><u>НЕ запущен Концентратор.</u></b> Необходимо запустить Концентратор (ярлык на рабочем столе Concentr 2.XX Client License), а затем в окошке «Ошибка при инициализации CNC интерфейса» нажать «Да»;</li><br>
	<li><b><u>Запущено более одной копии WinTerm.</u></b> Необходимо закрыть все копии WinTerm и заново запустить WinTerm, но только один раз;</li><br>
	<li><b><u>В конфигурации WinTerm не выбраны абоненты.</u></b> Необходимо:</li>
    <ol type="a">
		<li type="disc">в окне «Ошибка при инициализации CNC интерфейса» нажать «Нет»;</li>
		<li type="disc">зайти в меню «Настройка» \ «Конфигурация» и нажать кнопку «Выбор абонентов из конфигурации»;</li>
		<li type="disc">в появившемся окне переместить необходимые автоответы (обычно это один свой автоответ и автоответ АСОУП (11 4801 9)00 ) в правое окошко «выбраны для WinTerm».</li>
    </ol>
</ol>
<p align="center">
<img src="img/2.jpg">
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
