<?php
include ("db.php");//Соединяемся с базой данных
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкция по настройке КИ ССП RWSoft. Два по Сто</title>
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
	<p align="center"><b>Инструкция по настройке КИ ССП RWSoft</b><br><br></p>
<ol type="1">
	<li>Выяснить автоответ абонента;</li><br>
	<li>Выяснить IP-адрес ПК абонента;</li><br>
	<li><b><u>У абонента</u></b>. По автоответу или по названию станции определить к какому серверу подключен абонент. Для этого во <u>вкладке Абоненты</u> в разделе <b>Сортировка</b> установить <b>Нет</b>. Самый верхний автоответ и будет автоответом сервера:</li>
	<p align="center">
		<img src="img/50.jpg">
	</p>
		<ul>
			(11 4850 6)00	-	КИ Донецк «Солярис»;<br>
			(11 4850 6)99	-	КИ Донецк «ТСР 1»;<br>
			(11 4850 6)98	-	КИ Донецк «ТСР 2»;<br>
			(11 4820 2)00	-	КИ Донецк «ТСР 3»;<br>
			(9 50000 8)00	-	КИ Дебальцево;<br>
			(9 48780 5)00	-	КИ Иловайск;<br>
			(9 49000 0)00	-	КИ Красный Лиман;<br>
			(9 50710 3)00	-	КИ Луганск;<br>
			(9 49600 2)00	-	КИ Попасная.<br>
		</ul><br>
	<li><b><u>На сервере</u></b>. Зайти в Конфигуратор ССП.</li>
    <ol>
		<li value="4">1. <u>вкладка Абоненты</u>. Найти автоответ данного абонента. Для этого: в разделе <b>Канал(ы)</b> установить «птичку» <b>Все</b> чтобы отображались все автоответы, найти необходимый автоответ в разделе <b>Общий список абонентов</b>;</li>
		<p align="center">
			<img src="img/51.jpg">
		</p><br>
		<li value="4">2. <u>вкладка Абоненты</u>. Определить канал на котором прописан данный автоответ. Для этого: в разделе <b>Канал(ы)</b> посмотреть № канала рядом с «птичкой» <b>Все</b>;</li><br>
		<li value="4">3. <u>вкладка Каналы</u>. Определить IP-порт канала. Для этого зайти в <b>Параметры ТСР</b> канала на котором прописан автоответ (<u>двойной щелчок по ТСР</u> соответствующего канала или <u>выделить ТСР и кнопка Свойства</u>);</li>
		<p align="center">
			<img src="img/52.jpg">
			<img src="img/53.jpg">
		</p><br>
		<li value="4">4. <u>вкладка Каналы</u>. Определить тип конфигурации, которая используется для работы данного абонента. Для этого в окне <b>Параметры ТСР на канале ХХ</b> сверьте значения параметров по таблице:</li>
			<table align="center" border="1" cellpadding="1" cellspacing="0">
				<tr align="center">
					<td width="270"><b>Параметры</b></td>
					<td width="120"><b>2-х канальная выделенная</b></td>
					<td width="120"><b>2-х канальная коммутируемая</b></td>
					<td width="120"><b>4-х канальная коммутируемая</b></td>
				</tr>
				<tr>
					<td>Время в связи</td>
					<td align="center">0</td>
					<td align="center">6</td>
					<td align="center">1</td>
				</tr>
				<tr>
					<td>Время до переустановки соединения</td>
					<td align="center">0</td>
					<td align="center">7</td>
					<td align="center">0</td>
				</tr>
				<tr>
					<td>Период тестового запроса</td>
					<td align="center">35</td>
					<td align="center">0</td>
					<td align="center">0</td>
				</tr>
			</table>
	<p><u>значения параметров могут несколько изменяться, но значения параметров, которые равны 0 (нулю) должны точно совпадать</u>;</p><br>
	</ol>
	<li><b><u>У абонента</u></b>. Зайти в Конфигуратор ССП.</li><br>
	<li>В зависимости от <u>типа конфигурации</u> проверить настройки КИ абонента:</li><br>

			<table align="center" border="0" cellpadding="1" cellspacing="0">
				<tr align="center">
					<td><a href="ins_nastroyka_ki_2v.php">2-х канальная выделенная</a></td>
					<td width="20"></td>
					<td><a href="ins_nastroyka_ki_2k.php">2-х канальная коммутируемая</a></td>
					<td width="20"></td>
					<td><a href="ins_nastroyka_ki_4k.php">4-х канальная коммутируемая</a></td>
				</tr>
			</table>
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