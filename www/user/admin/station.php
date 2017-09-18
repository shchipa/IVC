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
        	<td align="center" height="50" class="g18">Станции Донецкой ЖД</td>
		</tr>
	</table>
	<div style='background:#eeeeee; width:450px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center'><span class='g12'>Станция</span></td>
			<td align='center'><span class='g12'>Линейная группа для сбоев</span></td>
			<td align='center'><span class='g12'>Линейная группа для ремонта</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM station ORDER BY gruppa",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
					</tr>
				", $rowav['station'], $rowav['gruppa'], $rowav['gruppa_remont']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
</td>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
