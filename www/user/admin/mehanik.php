<?php
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
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
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td align="center">


	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Механики отдела ВЦТер ИВЦ Донецкой ЖД <br /> и уровень доступа к базе <br /><span class="g14">отметить станцию "птичкой" при редактировании</span><br /><span class="r14">установить все "птички" при удалении</span></td>
		</tr>
	</table>
	<div style='background:#eeeeee; width:610px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center'><span class='g12'>Механик</span></td>
			<td align='center'><span class='g12'>Линейная группа</span></td>
			<td align='center'><span class='g12'>Уровень доступа к базе</span></td>
			<td align='center'><span class='g12'>Редактировать</span></td>
			<td align='center'><span class='r12'>Удалить</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM mehanik ORDER BY gruppa, mehanik",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<form action='mehanik_insert.php' method='post' name='form46' id='form46'>
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='left'> <input name='check' type='checkbox' value='ch'> <span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='b10' id='submit' value='Редактир-ть'>
						</td>
						<td align='center'>
							<input name='del' type='checkbox' value='del'>
							<input name='del2' type='checkbox' value='del2'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='r10' id='submit' value='Удалить'>
						</td>
					</tr>
					</form>
				", $rowav['mehanik'], $rowav['gruppa'], $rowav['user'], $rowav['id'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td width="150" align="center"><span  class='g12'>"Доступ"</span></td>
							<td width="50" align="center"><span  class='g12'>Сбои</span></td>
							<td width="50" align="center"><span  class='g12'>Ремонт ВТ</span></td>
							<td width="50" align="center"><span  class='g12'>Инв. Ведомость</span></td>
						</tr>
					   	<tr>
							<td width="250" align="left">3 - обычный механик</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">7 - механик с доступом к Ремонту ВТ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">9 - механик с доступом только к Ремонту ВТ</td>
							<td align="center">-</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">11 - механик с доступом к Инв. Ведомости</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">13 - механик с доступом только к Инв. Ведомости</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">15 - полный доступ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">21 - админ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
				</table>

	</div>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td align="center"><span  class='g12'>Сбои</span></td>
							<td align="center"><span  class='g12'>Ремонт ВТ</span></td>
							<td align="center"><span  class='g12'>Автоответы</span></td>
							<td align="center"><span  class='g12'>Инв. Ведомость</span></td>
							<td align="center"><span  class='g12'>Телеграммы</span></td>
							<td align="center"><span  class='g12'>Администратору</span></td>
						</tr>
					   	<tr>
							<td align="center">2<sup>5</sup></td>
							<td align="center">2<sup>4</sup></td>
							<td align="center">2<sup>3</sup></td>
							<td align="center">2<sup>2</sup></td>
							<td align="center">2<sup>1</sup></td>
							<td align="center">2<sup>0</sup></td>
						</tr>
					   	<tr>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
						</tr>
					   	<tr>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
						</tr>
				</table>
</td>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>