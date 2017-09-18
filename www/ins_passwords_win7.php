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
	<p align="center"><b>Инструкция по установке срока действия пароля в Windows 7</b><br><br></p>
<ol type="1">
	<li>Войти в систему с правами доступа «Администратора системы».</li>
    &#160 &#160 &#49.&#49 Пуск > Завершение работы > Выйти из системы<br/>
    &#160 &#160 &#49.&#50 Войти в систему «Администратором»<br/>

<p align="center">
<img src="img/128.jpg">

	<li>Выполнить настройку пользователя «User».</li>
    &#160 &#160 &#50.&#49 Пуск > Панель управления<br/>
    <p align="center">    <img src="img/129.jpg"></p><br/>
    &#160 &#160 &#50.&#50 Элемент управления: Администрирование
    <p align="center">    <img src="img/130.jpg"></p><br/>
	&#160 &#160 &#50.&#51 Параметр: Управление компьютером
    <p align="center">    <img src="img/131.jpg"></p><br/>
	&#160 &#160 &#50.&#52  Пункт «Пользователи» в категории «Локальные пользователи и группы»
    <p align="center"><img src="img/132.jpg"></p>   <br/>
	&#160 &#160 &#50.&#53 Выбираем пользователя User
    <p align="center">  <img src="img/133.jpg"></p><br/>
	&#160 &#160 &#50.&#54 Устанавливаем параметры<br />
    &#160 &#160 &#160 &#160 &#151 «Запретить смену пароля пользователем» - отключить параметр<br />
	&#160 &#160 &#160 &#160  &#151 «Срок действия пароля не ограничен» - установить
    <p align="center">  <img src="img/134.jpg"></p><br/>


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
