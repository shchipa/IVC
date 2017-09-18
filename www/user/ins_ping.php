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
<title>Инструкция по команде Ping. Два по Сто</title>
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


<td align="center">
	<b>ВОЗМОЖНОСТИ КОМАНДЫ <u>PING</u></b><br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td><span class="k12"><strong>Параметр</strong></span></td>
			<td><span class="k12"><strong>Назначение</strong></span></td>
			<td><span class="k12"><strong>Дополнение</strong></span></td>
			<td><span class="k12"><strong>Пример</strong></span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-t</b></span></td>
			<td><span class="k12">Отправка пакетов на указанный  узел до команды прерывания</span></td>
			<td><span class="k12">Для вывода статистики и продолжения нажмите &lt;Ctrl&gt;+&lt;Break&gt;,<br> для прекращения - &lt;Ctrl&gt;+&lt;C&gt;</span></td>
			<td><span class="k12">ping 10.7.100.1 -t</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-a</b></span></td>
			<td><span class="k12">Определение адресов по именам узлов</span></td>
			<td><span class="k12">&nbsp;</span></td>
			<td><span class="k12">&nbsp;</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-n число</b></span></td>
			<td><span class="k12">Размер буфера отправки</span></td>
			<td><span class="k12">По умолчанию n = 4</span></td>
			<td><span class="k12">ping 10.7.100.1 –n 50</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-l размер</b></span></td>
			<td><span class="k12">Число отправляемых запросов</span></td>
			<td><span class="k12">По умолчанию l = 32 бита</span></td>
			<td><span class="k12">ping 10.7.100.1 –l 200</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-f</b></span></td>
			<td><span class="k12">Установка флага, запрещающего фрагментацию пакета</span></td>
			<td><span class="k12">&nbsp;</span></td>
			<td><span class="k12">ping 10.7.100.1 –f</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-i TTL</b></span></td>
			<td><span class="k12">Задание срока жизни пакета (поле "Time To Live")</span></td>
			<td><span class="k12">По умолчания TTL=128, max=255</span></td>
			<td><span class="k12">ping 10.7.100.1 –i 255</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-r число</b></span></td>
			<td><span class="k12">Запись маршрута для указанного числа переходов</span></td>
			<td><span class="k12">Подобна команде tracert, но более информативна.<br>max   r = 9</span></td>
			<td><span class="k12">ping 10.7.100.1 –r 9</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-w таймаут</b></span></td>
			<td><span class="k12">Таймаут каждого ответа в миллисекундах</span></td>
			<td><span class="k12">w указывается в миллисекундах<br>w 10000 = 10 сек</span></td>
			<td><span class="k12">ping 10.7.100.1 –w 10000</span></td>
		</tr>
	</table>
    </br>
	<span class="k12">Можно использовать одновременно несколько параметров.<br>	Например: <strong>Ping 10.7.100.1 –t –w 20000</strong>
    <br><br>Для вывода справки использовать команду	<strong>ping /?</strong></span>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
