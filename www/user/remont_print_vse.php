<?php
include ("avtorizatciya_admin.php");
if (isset($_GET['text']))	{$text = $_GET['text'];	if ($text=='')		{unset($text);}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>База ремонта ВЦТер. Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
</head>
<body>
<table border="0"	cellspacing="0"	cellpadding="0">
<tr>
<td align="center">
	<table align="left" border='1' cellpadding="0" cellspacing="1">
	<?
		printf("
			<tr  valign='center'>
				<td align='center' width='70'><span class='k12'><b>Линейная<br>группа</b></span></td>
				<td align='center' width='80'><span class='k12'><b>Станция</b></span></td>
				<td align='center' width='40'><span class='k12'><b>Служба</b></span></td>
				<td align='center' width='70'><span class='k12'><b>Рабочее место</b></span></td>
				<td align='center' width='80'><span class='k12'><b>Устройство</b></span></td>
				<td align='center' width='80'><span class='k12'><b>Состояние</b></span></td>
				<td align='center' width='30'><span class='k12'><b>Дата<br>поступления</b></span></td>
				<td align='center' width='30'><span class='k12'><b>Дата<br>возврата</b></span></td>
				<td align='center' width='20'><span class='k12'><b>№ акта</b></span></td>
				<td align='center' width='40'><span class='k12'><b>№ инвентарный</b></span></td>
				<td align='center' width='40'><span class='k12'><b>Характе-<br>ристика</b></span></td>
				<td align='center' width='110'><span class='k12'><b>Неисправные узлы</b></span></td>
				<td align='center' width='110'><span class='k12'><b>Необходимые<br>запчасти</b></span></td>
				<td align='center' width='50'><span class='k12'><b>Ф.И.О. специалиста</b></span></td>
			</tr>
			");
	
				$resav = mysql_query ("SELECT * FROM remont ORDER BY $text",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
					printf("
					<tr align='center' valign='center'>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['sost'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['akt'], $rowav['invnomer'], $rowav['haraktustr'], $rowav['polomka'], $rowav['zch'], $rowav['fiospetc']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
</td>
</tr>
</table>
</body>
</html>