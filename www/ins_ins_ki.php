<?php
include ("db.php");//Соединяемся с базой данных
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкция по установке программного обеспечения КИ ССП RWSoft. Два по Сто</title>
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
	<p align="center"><b>Инструкция по установке программного обеспечения КИ ССП RWSoft</b><br><br></p>
<ol type="1">
	<li>Найти и запустить инсталляционный файл необходимой версии КИ ССП RWSoft (обычно находится  на диске D:/ в папке install / RWSoft /);</li><br>
	<li>В появившемся окне <b>«Выбор каталога для установки файлов»</b> нажимаем <b>«NEXT»</b>, если согласны с указанным каталогом, если необходимо установить в другую папку нажимаем <b>«Browse»</b>;</li><br>
	<p align="center">
		<img src="img/10.jpg">
	</p>
	<li>В появившемся окне <b>«Выбора дополнительных компонентов»</b> выбрать <b><u>только один</u></b> компонент <b>«Положить cnc.dll в системный каталог»</b> далее нажать <b>«NEXT»</b></li>
	<p align="center">
		<img src="img/11.jpg">
	</p>
	<li>В следующем окне выбрать название подменю в меню Программы (в данном случае <b>RWSoft</b>). Для продолжения нажать <b>«NEXT»</b>.</li>
	<p align="center">
		<img src="img/12.jpg">
	</p>
	<li>Затем происходит процесс установки.</li>
	<li>После установки высвечивается окно <b>«Question»</b> с вопросом <b>«Хотите установить КИ как сервис NT?»</b> лучше выбрать <b>«Нет»</b>, после этого в следующем окне выбрать <b>«Импортировать конфигурацию»</b>, далее – <b>«NEXT»</b>.</li>
	<p align="center">
		<img src="img/13.jpg" align="top">
		<img src="img/14.jpg">
	</p>
	<li>В окне <b>«Импортировать конфигурацию»</b> выбрать необходимую <u>папку в которой ранее была сохранена конфигурация</u>.</li>
	<p align="center">
		<img src="img/15.jpg">
	</p>
	<li>В следующем окне убрать "птичку" <b>«Посмотреть файл последних изменений ‘Whats New.txt’»</b>.</li>
	<p align="center">
		<img src="img/16.jpg">
	</p>
	<li>Далее <b>«Finish»</b>.</li>
	<li>В появившемся окне <b>«Конфигуратор ССП»</b> удостоверится в правильности конфигурации зайдя во вкладки <b>«Каналы»</b> и <b>«Абоненты»</b>. Если все правильно нажать <b>«OK»</b>.</li>
	<p align="center">
		<img src="img/17.jpg">
	</p>
	<li>После чего загрузится концентратор.</li>
	<p align="center">
		<img src="img/18.jpg">
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