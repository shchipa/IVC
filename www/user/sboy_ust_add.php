<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if ($left[5] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>С 14:00 до 15:00 проводятся технические работы!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>НЕТ ДОСТУПА!!!</p>");
	exit;
}

if (isset($_POST['check']))		{$check = $_POST['check'];		if ($check == '')		{unset($check);}}
if (isset($_POST['id']))		{$id = $_POST['id'];			if ($id == '')			{unset($id);}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Устранение сбоя - ".$_SESSION['adminUser'].".  Номер сбоя=".$id." ";?></title>
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
        	<td align="center" height="50" class="g18">Устраняемый сбой</td>
		</tr>
	</table>
 	<table border='1' cellpadding="0" cellspacing="1">
		<tr valign='center'>
			<td align='center' width='120' rowspan="2"><span class='r12'>Линейная группа</span></td>
			<td align='center' width='120' rowspan="2"><span class='r12'>Станция</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Служба</span></td>
			<td align='center' width='70' rowspan="2"><span class='r12'>Рабочее место</span></td>
			<td align='center' width='80' rowspan="2"><span class='r12'>Устройство</span></td>
			<td align='center' colspan="3"><span class='r12'>Дата заявки о сбое</span></td>
			<td align='center' colspan="3"><span class='r12'>Время заявки </br> о сбое</span></td>
			<td align='center' rowspan="2"><span class='r12'>Примечание</span></td>
		</tr>
		<tr valign='center'>
			<td align='center' width='30'><span class='r12'>день</span></td>
			<td align='center' width='30'><span class='r12'>мес</span></td>
			<td align='center' width='50'><span class='r12'>год</span></td>
			<td align='center' width='30'><span class='r12'>час</span></td>
			<td align='center' width='1'><span class='r12'>:</span></td>
			<td align='center' width='32'><span class='r12'>мин</span></td>
		</tr>
<?
if (isset($check) && isset($id) && isset($_SESSION['adminUser']))
{
	//Перечень всех выводимых заявок
	$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 and id = '$id' ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
	<form action='sboy_ust_add.php' method='post' name='form6' id='form6'>
		<tr valign='center' align='center'>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>:</span></td>
			<td><span class='g12'>%s</span></td>
			<td><span class='g12'>%s</span></td>
		</tr>
	</form>
	</table>
	", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim']);
	}
	while ($rowav = mysql_fetch_array($resav));
}
else 
{
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>Будьте внимательнее!!! Необходимо отметить птичкой устраняемый сбой.</p>";
	echo "<p class='r18'>_</p>";
	unset($id);
}

?>
            
	<form action='sboy_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center">
				<?php
					printf ("</br></br><span class='g16'> %s, заполните пожалуйста <span class='r16'>все</span> поля формы:</span></br></br>",$_SESSION['adminUser']);
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
					$dk = date("d");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['den']) && $mydata['den'] < $dk)
						{printf ("<option>%s</option>",$mydata['den']);}
						if (isset($mydata['den']) && $mydata['den'] == $dk)
						{printf ("<option selected>%s</option>",$dk);}
						if (isset($mydata['den']) && $mydata['den']>$dk)
						{printf ("<option>%s</option>",$mydata['den']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kmes">
				<option selected disabled>Месяц</option>
				<?php
					$mk = date("m");
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['mes']) && $mydata['id'] < $mk)
						{printf ("<option>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id'] == $mk)
						{printf ("<option selected>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id']>$mk)
						{printf ("<option>%s</option>",$mydata['mes']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kgod">
				<option selected disabled>Год</option>
				<?php
					$gk = date("Y");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['god']) && $mydata['god'] < $gk)
						{printf ("<option>%s</option>",$mydata['god']);}
						if (isset($mydata['god']) && $mydata['god'] == $gk)
						{printf ("<option selected>%s</option>",$gk);}
						if (isset($mydata['god']) && $mydata['god']>$gk)
						{printf ("<option>%s</option>",$mydata['god']);}
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
					$resgruppa = mysql_query("SELECT gruppa FROM mehanik WHERE mehanik='$_SESSION[adminUser]'",$db);
					$mygruppa = mysql_fetch_array($resgruppa);
					$gruppa = $mygruppa['gruppa'];

        			printf("<input name='id' type='hidden' value='%s'>						   
							<input name='gruppa' type='hidden' value='%s'>
							", $id, $gruppa);
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
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>