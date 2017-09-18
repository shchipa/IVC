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
<title>Инструкция INFO (ЕЭКК) Windows7. Два по Сто</title>
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
	<p align="center" ><b>Инструкция по установке АРМов ИНФО (Информационный сайт Донецкой железной дороги),<br/> ЕЭКК (Единая электронная картотека клиентов)</b><br/>
	  <br></p>
   &#160 &#160  &#160 Для установки АРМов ИНФО и ЕЭКК  необходимо выполнить следующие настройки Internet Explorer:
       <ol type="1">
	<li>Запустить Internet Explorer «от имени администратора»:</li>
    <p align="center">
     <img src="img/116.jpg">
	<li>Выбрать:  Сервис ->  Свойства обозревателя -> <b>Безопасность</b> ->  </li>
    <p align="center">
<img src="img/117.jpg"> </p>
<br/>
&#160 &#160  &#160	Выбрать «Надежные Узлы» -> нажать кнопку «Узлы»<br/>
<p align="center">
<img src="img/118.jpg"></p>
 &#160 &#160  &#160 Добавить адреса: <a href="http://info">http://info</a> и <a href="http://asrk:8888">http://asrk:8888</a> в «Надежные узлы».<br/>
 &#160 &#160  &#160 На вкладке «Безопасность» снова выбрать зону для настройки параметров безопасности «Надежные узлы» и нажать кнопку «Другой…»  («Уровень безопасности для этой зоны»).<br/>
 &#160 &#160  &#160  В открывшейся вкладке «Параметры безопасности» ВКЛЮЧИТЬ все «Элементы ActiveX и модули подключения».<br/> 
 <p align="center">
<img src="img/119.jpg"></p>
<li>Перейти из вкладки «Безопасность» на вкладку «Общие» -> История просмотра -> Параметры  </li><br/>
<p align="center">
<img src="img/120.jpg"><br/></p>
&#160 &#160  &#160 Установить флажок на «При каждом посещении веб-узла».<br/><p align="center">
<img src="img/121.jpg"><br/></p>
&#160 &#160  &#160 На вкладке «Общие» -> История просмотра -> «Удалить…»
<br/><p align="center">
<img src="img/122.jpg"><br/></p>
&#160 &#160  &#160 Удалить временные файлы Интернета
<p align="center">
<img src="img/123.jpg"><br/></p>

<li>Создать на рабочем столе пользователя ярлыки:</li>
<br/> 4.1 Для ИНФО: <br/>
  &#160 &#160  &#160 &#151  Расположение объекта: <a href="http://info">http://info</a><br/>
&#160 &#160  &#160 &#151  Название ярлыка: INFO<br/>
&#160 &#160  &#160 &#151  После запуска ярлыка в окне «Ввод сетевого пароля» ввести имя пользователя и пароль.<br>
4.2 Для ЕЭКК:<br/>
&#160 &#160  &#160 &#151  Расположение объекта: <a href="http://asrk:8888">http://asrk:8888</a><br/> 
&#160 &#160  &#160 &#151  Название ярлыка: ЕЭКК<br/>
&#160 &#160  &#160 &#151  После запуска ярлыка в окне «Ввод сетевого пароля» ввести имя пользователя и пароль.<br/>
<b>Пользователь:  48viewer</b>
<b>Пароль: 111222333</b>
<br/><br/>
<b>ОБЯЗАТЕЛЬНО ПОВТОРИТЬ</b> настройки Internet Explorer (п.1-п.3) после запуска АРМов с рабочего стола пользователя!
<br/><br/>
Консультации по телефонам:<br/>
2-55-92 – Ирина Александровна (инженер)

</p>
<br>

</ol>

</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
