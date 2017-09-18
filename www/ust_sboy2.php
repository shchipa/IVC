<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['fio']))	{$fio = $_POST['fio'];		if ($fio == '')		{unset($fio);}}
if (isset($_POST['parol']))	{$parol=$_POST['parol'];	if ($parol=='')		{unset($parol);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Устранение сбоя - ".$fio." ";?></title>
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

<td>
	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Таблица сбоев</td>
		</tr>
	</table>
 	<table border='1' cellpadding="0" cellspacing="1">
		<tr valign='center'>
			<td align='center' width='20' rowspan="2">&nbsp;</td>
			<td align='center' width='120' rowspan="2"><span class='r12'>Линейная группа</span></td>
			<td align='center' width='120' rowspan="2"><span class='r12'>Станция</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Служба</span></td>
			<td align='center' width='70' rowspan="2"><span class='r12'>Рабочее место</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Устройство</span></td>
			<td align='center' colspan="4"><span class='r12'>Дата заявки о сбое</span></td>
			<td align='center' colspan="4"><span class='r12'>Время заявки </br> о сбое</span></td>
			<td align='center' width='300' rowspan="2"><span class='r12'>Примечание</span></td>
			<td align='center' width='85' rowspan="2"><span class='r12'>Устранить</span></td>
		</tr>
		<tr valign='center'>
			<td align='center' width='30'><span class='r12'>день</span></td>
			<td align='center' width='30'><span class='r12'>мес</span></td>
			<td align='center' width='50'><span class='r12'>год</span></td>
			<td align='center' width='5'><span class='r12'> </span></td>
			<td align='center' width='5'><span class='r12'> </span></td>
			<td align='center' width='30'><span class='r12'>час</span></td>
			<td align='center' width='1'><span class='r12'>:</span></td>
			<td align='center' width='32'><span class='r12'>мин</span></td>
		</tr>
	</table>
<?
				$res = mysql_query ("SELECT gruppa FROM mehanik WHERE mehanik = '$fio'",$db);
				$row = mysql_fetch_array($res);
				do
				{
					$gruppa = $row['gruppa'];
				}
				while ($row = mysql_fetch_array($res));
				
if ($gruppa == 'ИВЦ 5 этаж')
{
				//Перечень всех выводимых заявок
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
				<form action='ust_add_sboy.php' method='post' name='form6' id='form6'>
				<table border='1' cellpadding='0' cellspacing='1'>
					<tr valign='center'>
						<td align='center' width='20'><input name='check' type='checkbox' value='ch'></td>
						<td align='center' width='120'><span class='g12'>%s</span></td>
						<td align='center' width='120'><span class='g12'>%s</span></td>
						<td align='center' width='80'><span class='g12'>%s</span></td>
						<td align='center' width='70'><span class='g12'>%s</span></td>
						<td align='center' width='80'><span class='g12'>%s</span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='50'><span class='g12'>%s</span></td>
						<td align='center' width='5'><span class='g12'> </span></td>
						<td align='center' width='5'><span class='g12'> </span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='1'><span class='g12'>:</span></td>
						<td align='center' width='32'><span class='g12'>%s</span></td>
						<td align='center' width='300'><span class='g12'>%s</span></td>
						<td align='center' width='85'>
							<input name='id' type='hidden' value='%s'> 
							<input name='fio' type='hidden' value='%s'> 
							<input name='parol' type='hidden' value='%s'> 
							<input name='submit' type='submit' class='b10' id='submit' value='Устранить'></span>
						</td>
					</tr>
				</table>
				</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['id'], $fio, $parol);
				}
				while ($rowav = mysql_fetch_array($resav));
}
else
{

				//Перечень всех выводимых заявок
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 AND gruppa = '$gruppa' ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
				<form action='ust_add_sboy.php' method='post' name='form6' id='form6'>
				<table border='1' cellpadding='0' cellspacing='1'>
					<tr valign='center'>
						<td align='center' width='20'><input name='check' type='checkbox' value='ch'></td>
						<td align='center' width='120'><span class='g12'>%s</span></td>
						<td align='center' width='120'><span class='g12'>%s</span></td>
						<td align='center' width='80'><span class='g12'>%s</span></td>
						<td align='center' width='70'><span class='g12'>%s</span></td>
						<td align='center' width='80'><span class='g12'>%s</span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='50'><span class='g12'>%s</span></td>
						<td align='center' width='5'><span class='g12'> </span></td>
						<td align='center' width='5'><span class='g12'> </span></td>
						<td align='center' width='30'><span class='g12'>%s</span></td>
						<td align='center' width='1'><span class='g12'>:</span></td>
						<td align='center' width='32'><span class='g12'>%s</span></td>
						<td align='center' width='300'><span class='g12'>%s</span></td>
						<td align='center' width='85'>
							<input name='id' type='hidden' value='%s'> 
							<input name='fio' type='hidden' value='%s'> 
							<input name='parol' type='hidden' value='%s'> 
							<input name='submit' type='submit' class='b10' id='submit' value='Устранить'></span>
						</td>
					</tr>
				</table>
				</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['id'], $fio, $parol);
				}
				while ($rowav = mysql_fetch_array($resav));

}

		?>

</td>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>