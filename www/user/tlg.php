<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Телеграммы отдела ВЦТер. Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
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
<td align="center">
<br />
	<div style='background:#eeeeee; width:1000px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width="70"><span class='g12'>Номер</span></td>
			<td align='center'><span class='g12'>Дата</span></td>
			<td align='center'><span class='g12'>Линейная группа</span></td>
			<td align='center' width="120"><span class='g12'>Станция</span></td>
			<td align='center'><span class='g12'>Текст телеграммы</span></td>
			<td align='center'><span class='g12'>Принятые меры</span></td>
			<td align='center'><span class='g12'>Редактировать</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM tlg ORDER BY dat DESC",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<form action='tlg_insert.php' method='post' name='form48' id='form48'>
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='left'> <input name='check' type='checkbox' value='ch'> <span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='b10' id='submit' value='Редактир-ть'>
						</td>
					</tr>
					</form>
				", $rowav['nomer'], $rowav['dat'], $rowav['gruppa'], $rowav['station'], $rowav['tlg'], $rowav['mery'], $rowav['id'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
</br>
</td>
</tr>
<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>
</body>
</html>