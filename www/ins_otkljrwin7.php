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
	<p align="center"><b>Отключение ждущего режима Windows7</b><br><br></p>
<b>Чтобы отключить "Спящий режим" необходимо сделать следующее:</b><br>
<ol type="1">
	<li><b><u>Все настройки делаются с правами администратора. </u></b></li><br>
	<li>Жмем Пуск - Панель Управления. </li><br>
	<li>В появившемся окне в пункте «Просмотр: Категории» выбираем значение «Мелкие значки»:</li>

<p align="center">
<img src="img/93.jpg">

	<li>Далее выбираем пункт «Электропитание»</li>
    <p align="center">
    <img src="img/94.jpg">
<p align="center">
	<li>В открывшемся окне выбираем пункт <b>"Настройка плана электропитания"</b> напротив активного: </li>
    <p align="center">
    <img src="img/95.jpg">
<p align="center">
	<li>Отключаем спящий режим: выбираем значения «Никогда» для дисплея и компьютера, после чего нажимаем пункт «Изменить дополнительные параметры питания»:</li>
    <p align="center">
     <img src="img/96.jpg">

	<li>В появившемся окне находим раздел «Сон», раскрываем его нажатием на крестик и во всех подпунктах выбираем значения, как показано на рисунке (в подпункте «Сон после» нажимать стрелку вниз): </li>
    <p align="center">
<img src="img/97.jpg">
</ol>
<p class="p">&#160 &#160 &#160  После внесения изменений нажимаем «Применить» и в окне изменения параметров плана (предыдущее окно) нажимаем «Сохранить изменения».

После всего этого можно также перезагрузить компьютер.

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
