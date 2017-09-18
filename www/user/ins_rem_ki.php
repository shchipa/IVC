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
<title>Инструкция по удалению программного обеспечения КИ ССП RWSoft. Два по Сто</title>
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
	<p align="center"><b>Инструкция по удалению программного обеспечения КИ ССП RWSoft</b><br><br></p>
<ol type="1">
	<li><b><u>Выгрузить КОНЦЕНТРАТОР</u></b>;</li><br>
	<li>Если необходимо, сохранить конфигурацию (необходимо скопировать из папки <b>C:\Program Files \ RWSoft \ Concentr</b> файлы <b>concdev.cfg, concentr.cfg, concrun.cfg, conctabl.cfg, route.cfg</b>) желательно на другой логический диск, например <b>D:</b>;</li><br>
	<li>Для правильного удаления предварительно правильно установленного ПО КИ ССП RWSoft необходимо выполнить <b><u>одно из двух</u></b> действий:</li>
    <ol type="a">
		<li type="disc"><b>Пуск > Программы > RWSoft > Uninstall > Uninstall Concentr 2.5X.XX Client License;</b></li>
		<li type="disc"><b>Пуск > Настройка > Панель управления > Установка и удаление программ > RWSoft Concentr 2.5X.XX Client License;</b></li>
    </ol>
<p align="center">
<img src="img/5.jpg">
</p>
	<li>В появившемся окне выбрать <b>«Удалить»</b>:</li>
<p align="center">
<img src="img/6.jpg">
<img src="img/7.jpg">
</p>
	<li>Начнётся удаление программы, после завершения которого появится надпись об успешном удалении концентратора RWSoft <b>«Uninstall successfully completed»</b>. После нажать <b>ОК</b>.</li>
	<li>Удаление завершено.</li>
</ol>
<b>Если при удалении возникают различные ошибки и удаления не происходит, необходимо удалить в корзину папку <u>Concentr</u>, которая стандартно находится <u>C:\Program Files \ RWSoft \</u></b>
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
