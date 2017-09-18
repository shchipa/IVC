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
     <p align="center"><b>Инструкция по установке программного обеспечения КИ ССП RWSoft для Windows 7</b><br><br></p>
<ol type="1">
     <li>Найти и запустить инсталляционный файл <b>ssp-3.08.07.exe</b> (или <b>ki308.exe</b> если вы его скачали отсюда: <a href="files.php">Файлы</a>) для установки КИ ССП RWSoft (обычно находится  на диске D:/ в папке install / RWSoft /).</li><br>
     <li>В появившемся окне <b>«Выбор каталога для установки файлов»</b> нажимаем <b>«NEXT»</b>, если согласны с указанным каталогом, если необходимо установить в другую папку нажимаем <b>«Browse»</b>.</li><br>
     <p align="center">
          <img src="img/10.jpg">
     </p>
     <li>В появившемся окне <b>«Выбора дополнительных компонентов»</b> выбрать <b><u>только один</u></b> компонент <b>«Положить cnc.dll в системный каталог»</b> далее нажать <b>«NEXT»</b>.</li>
     <p align="center">
          <img src="img/88.jpg">
     </p>
     <li>В следующем окне выбрать название подменю в меню Программы (в данном случае <b>RWSoft</b>). Для продолжения нажать <b>«NEXT»</b>.</li>
     <p align="center">
          <img src="img/12.jpg">
     </p>
     <li>Затем происходит процесс установки.</li>
     <li>В окне Select Components выбрать <b>мпортировать конфигурацию</b> и выбрать необходимую папку в которой есть файлы с необходимой конфигурацией.
     <p align="center">
          <img src="img/14.jpg" align="middle"> 
          <img src="img/15.jpg" align="middle">
     </p>
    Или же, если конфигурации нет, то выбрать <b>«настрою позже»</b> и настроить её вручную когда появится окно <b>ConfSet – Конфигуратор ССП(win) V1.23</b>.</li>
     <li>В следующем окне убрать "птичку" <b>«Посмотреть файл последних изменений ‘Whats New.txt’»</b> и добавить <b>«Положить иконку на рабочий стол»</b>.</li>
     <p align="center">
          <img src="img/16.jpg">
     </p>
     <li>Далее <b>«Finish»</b>.</li>
     <li>В появившемся окне <b>«ConfSet – Конфигуратор ССП(win) V1.23»</b> удостоверится в правильности конфигурации зайдя во вкладки <b>«Каналы»</b>, <b>«Абоненты»</b> и <b>«SHEDULE»</b>. Если все правильно нажать <b>«OK»</b>.</li>
     <p align="center">
          <img src="img/90.jpg">
     </p>

     <li>На вкладке "Shedule" внимательно проверяем лицензионный ключ, должен стоять <u><b>0f326572-92edfb92-DEMO-2012-01</u></b>.</li>
     <p align="center">
          <img src="img/91.jpg">
     </p>
     <li>Здесь же нажимаем кнопку "Свойства" и вписываем свой автоответ(на канале F3 с логномером 200)</li>
     <p align="center">
          <img src="img/92.jpg">
     </p>

     <li>Нажимаем Ок, после чего загрузится концентратор.</li>
     <p align="center">
          <img src="img/89.jpg">
     </p>
     <li><u><b>Внимание!</u></b> Возможны случаи зависания концентратора. Признаки зависания - сообщения стоят и не уходят, хотя связь есть. Кликаем правой кнопкой по значку в трее, затем на Restart. Окно концентратора пропадает с экрана, но в трее значок остаётся. Если произошла вышеописаная ситуация, необходимо через диспетчер задач завершить процесс "<u>Shed32.exe</u>", после чего запустить концентратор заново. Перезагрузка компьютера также помогает решить проблему. Зависание концентратора не зависит от интенсивности работы.</li>
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