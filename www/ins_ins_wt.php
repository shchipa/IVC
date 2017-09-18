<?php
include ("db.php");//Соединяемся с базой данных
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкция по установке Интелектуального терминала абонента АСУЖТ WinTerm. Два по Сто</title>
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
	<p align="center"><b>Инструкция по установке Интелектуального терминала абонента АСУЖТ WinTerm</b><br><br></p>
<ol type="1">
	<li>Найти и запустить инсталляционный файл WinTerm версии 2.15 (обычно находится  на диске D:/ в папке install / RWSoft /).</li><br>
	<li>В появившемся окне <b>«Выбор каталога для установки файлов»</b> нажимаем <b>«NEXT»</b>, если согласны с указанным каталогом, если необходимо установить в другую папку нажимаем <b>«Browse»</b>.</li><br>
	<p align="center">
		<img src="img/20.jpg">
	</p>
	<li>В появившемся окне <b>«Выбора дополнительных компонентов»</b> <b><u>обязательно</u></b> отметить "птичкой" дополнительный компонент <b>«Примеры макросов и запросов»</b> далее нажать <b>«NEXT»</b>.</li>
	<p align="center">
		<img src="img/21.jpg">
	</p>
	<li>В следующем окне выбрать название подменю в меню Программы (в данном случае <b>RWSoft</b>). Для продолжения нажать <b>«NEXT»</b>.</li>
	<p align="center">
		<img src="img/22.jpg">
	</p>
	<li>Затем происходит процесс установки.</li>
	<li>После установки высвечивается окно <b>«Установка завершена»</b>, где необходимо щёлкнуть <b>«Finish»</b>.</li>
	<p align="center">
		<img src="img/23.jpg" align="top">
	</p>
	<li>Если  WinTerm устанавливается впервые в данной ОС данного ПК, то появится окно <b>«Введите Ваш лицензионный код»</b> где необходимо ввести код <b>8aae3537-18c61c13</b>.</li>
	<p align="center">
		<img src="img/24.jpg">
	</p>
	<li>Далее необходимо настроить конфигурацию WinTerm в окне <b>«Конфигурация»</b>. Если при настройке появляются ошибки, решение см. <a href="ins_cnc.php" class="b14">тут</a>.</li>
	<p align="center">
		<img src="img/25.jpg">
	</p>
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