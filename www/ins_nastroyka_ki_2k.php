<?php
include ("db.php");//Соединяемся с базой данных
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкция по настройке КИ ССП RWSoft. 2-х канальная коммутируемая конфигурация. Два по Сто</title>
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
<td align="left" width="100%">
	<p align="center"><b>Инструкция по настройке КИ ССП RWSoft</b></p>
	<p align="center"><b>2-х канальная коммутируемая конфигурация</b><br><br></p>
<ol type="1">
	<li>Запустить <b>настройку КИ</b>. Перейти во вкладку <b>Каналы</b> Конфигуратора ССП.</li><br>
	<p align="center">
		<img src="img/87.jpg">
	</p>
	<li>Установить (проверить) параметры каналов <b>00</b> и <b>01</b>.<br>Так как канал <b><u>коммутируемый</u></b>, то должна быть установлена <b>Сортировка по абонентам</b> и, так как канал <b>01</b> работает на приём, установить <b>Работа канала только на прием</b> на канале <b>01</b>.</li><br>
	<p align="center">
		<img src="img/80.jpg">
		<img src="img/81.jpg">
	</p>
	<li>Установить (проверить) параметры канала, на котором прописан <b>свой автоответ</b>.</li><br>
	<p align="center">
		<img src="img/82.jpg">
	</p>
	<li>Установить (проверить) параметры ТСР на каналах <b>00</b> и <b>01</b>.<br>Так как у абонента устанавливается клиентская часть, то нет "птичек" <b>Сервер</b>. Значения времён как на фото ниже.</li><br>
	<p align="center">
		<img src="img/83.jpg">
		<img src="img/84.jpg">
	</p>
	<li>Перейти во вкладку <b>Абоненты</b> Конфигуратора ССП. Добавить необходимые автоответы на канал <b>00</b> и свой на канал <b>21 (F3)</b>.<br><u><b>IP-адрес</b> и <b>порт</b> сервера должен быть прописан <b>на всех автоответах</b>, с которыми  будет работать абонент.</u></li>
	<p align="center">
		<img src="img/85.jpg">
		<img src="img/86.jpg">
	</p>
	<li>Нажать <b>ОК</b> - сохранить и запустить (перезапустить) Концентратор RWSoft.</li><br>
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