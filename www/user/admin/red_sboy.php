<?php
include ("../db.php");//Соединяемся с базой данных

if (isset($_POST['check']))			{$check = $_POST['check'];				if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];					if ($id == '')			{unset($id);}}
if (isset($_POST['fio']))			{$fio = $_POST['fio'];					if ($fio == '')			{unset($fio);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Устранение сбоя - ".$fio."   id=".$id." ";?></title>
<link href="../style.css" rel="stylesheet" type="text/css">
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
	include ("../high.php"); //Подключаем шапку сайта
?>

<?php
	include ("../left.php"); //Подключаем левую часть
?>

<td>
	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Таблица сбоев</td>
		</tr>
	</table>
 	<table border='1' cellpadding="0" cellspacing="1">
		<tr valign='center'>
			<td align='center' width='120' rowspan="2"><span class='r12'>Линейная группа</span></td>
			<td align='center' width='120' rowspan="2"><span class='r12'>Станция</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Служба</span></td>
			<td align='center' width='70' rowspan="2"><span class='r12'>Рабочее место</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Устройство</span></td>
			<td align='center' colspan="4"><span class='r12'>Дата заявки о сбое</span></td>
			<td align='center' colspan="4"><span class='r12'>Время заявки </br> о сбое</span></td>
			<td align='center' width='300' rowspan="2"><span class='r12'>Примечание</span></td>
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
if (isset($check) && isset($id) && isset($fio))
{
	//Перечень всех выводимых заявок
	$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 and id = '$id' ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
	<form action='ust_add_sboy.php' method='post' name='form6' id='form6'>
 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
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
		</tr>
		<tr valign='center'>
			</tr>
	</table>
	</form>
	", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim']);
	}
	while ($rowav = mysql_fetch_array($resav));
}
else 
{
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>Будьте внимательнее!!! Необходимо отметить птичкой устраняемый сбой.</p>";
	unset($id);
}

?>
            
	<form action='../insert_sboy.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center">
				<?php
					printf ("</br></br><span class='g16'> %s, заполните пожалуйста <span class='r16'>все</span> поля формы:</span></br></br>",$fio);
				?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Дата устранения сбоя:</span>
		</td>
		<td align="left">
   				<select name="kden">
				<option selected disabled>День</option>
				<?php
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['den']))
						printf ("<option> %s</option>",$mydata['den']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kmes">
				<option selected disabled>Месяц</option>
				<?php
					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод месяцев
						if (isset($mydata['mes']))
						printf ("<option> %s</option>",$mydata['mes']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kgod">
				<option selected disabled>Год</option>
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод годов
						if (isset($mydata['god']))
						printf ("<option> %s</option>",$mydata['god']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Время устранения сбоя:</span>
		</td>
		<td align="left">
   				<select name="kchas">
				<option selected disabled>Часы</option>
				<?php
					$resdata = mysql_query("SELECT chas FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Часов
						if (isset($mydata['chas']))
						printf ("<option> %s</option>",$mydata['chas']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kmin">
				<option selected disabled>Минуты</option>
				<?php
					$resdata = mysql_query("SELECT min FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Минут
						if (isset($mydata['min']))
						printf ("<option> %s</option>",$mydata['min']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>Примечание</br>(Предпринятые меры </br> по устранению сбоя):</span>
		</td>
		<td align="left">
				<textarea name='prim' cols='40' rows='5'></textarea>
				<?
					$resgruppa = mysql_query("SELECT gruppa FROM mehanik WHERE mehanik='$fio'",$db);
					$mygruppa = mysql_fetch_array($resgruppa);
					$gruppa = $mygruppa['gruppa'];

        			printf("<input name='fio' type='hidden' value='%s'>
							<input name='id' type='hidden' value='%s'>						   
							<input name='gruppa' type='hidden' value='%s'>",$fio, $id, $gruppa);
				?>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='Устранить сбой'></br></br>
		</td>
	</tr>
	</table>
	</form>
</td>


<?php
	include ("../bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
