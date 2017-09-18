<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if ($left[4] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>С 14:00 до 15:00 проводятся технические работы!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>НЕТ ДОСТУПА!!!</p>");
	exit;
}

if (isset($_POST['check']))			{$check = $_POST['check'];				if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];					if ($id == '')			{unset($id);}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто. Редактирование акта</title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td> </br>

<?
if (isset($check) && isset($id) && isset($_SESSION['adminUser']))
{
	//Перечень всех выводимых заявок
	$resav = mysql_query ("SELECT * FROM remont WHERE id = '$id'",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
	<form action='ust_add_sboy.php' method='post' name='form6' id='form6'>
 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
			<td align='center' width='30'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s</td>
			<td align='center' width='100'><span class='g12'>%s</td>
			<td align='center' width='100'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s</td>
			<td align='center' width='80'><span class='g12'>%s</td>
			<td align='center' width='50'><span class='g12'>%s</td>
			<td align='center' width='80'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s-%s-%s</td>
			<td align='center' width='60'><span class='g12'>%s-%s-%s</td>
			<td align='center' width='150'><span class='g12'>%s</td>
			<td align='center' width='80'><span class='g12'>%s</td>
			<td align='center' width='80'><span class='g12'>%s</td>
			<td align='center' width='80'><span class='g12'>%s</td>
		</tr>
		<tr valign='center'>
			</tr>
	</table>
	</form>
	", $rowav['akt'], $rowav['invnomer'], $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['sost'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['haraktustr'], $rowav['polomka'], $rowav['zch'], $rowav['fiospetc']);
	$akt = $rowav['akt'];
	$station = $rowav['station'];
	$slujba = $rowav['slujba'];
	$rabmesto = $rowav['rabmesto'];
	$ustroystvo = $rowav['ustroystvo'];
	$invnomer = $rowav['invnomer'];
	$sost = $rowav['sost'];
	$nden = $rowav['nden'];
	$nmes = $rowav['nmes'];
	$ngod = $rowav['ngod'];
	$kden = $rowav['kden'];
	$kmes = $rowav['kmes'];
	$kgod = $rowav['kgod'];
	$haraktustr = $rowav['haraktustr'];
	$polomka = $rowav['polomka'];
	$zch = $rowav['zch'];
	$fiospetc = $rowav['fiospetc'];
//	$priznak = $rowav['priznak'];
	}
	while ($rowav = mysql_fetch_array($resav));
}
else 
{
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>Будьте внимательнее!!! Необходимо отметить \"птичкой\" акт, который Вы желаете отредактировать.</p>";
	unset($id);
}

?>
            
	<form action='remont_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border='0' cellpadding='12' width='100%'>
	<tr>
		<td colspan='2' align='center'>
				<?php
					printf ("</br><span class='g16'> %s, заполните пожалуйста форму:</span></br>",$_SESSION['adminUser']);
				?>
		</td>
	</tr>
  	<tr>
		<td align="right">
				<span  class='g14'>Номер акта:</span>
		</td>
		<td align="left">
        <?
				printf ("<input name='akt' type='text' value='$akt' size='20' maxlength='4'>");
		?>
		</td>
	</tr>
  	<tr>
		<td align="right">
				<span  class='g14'>Инвентарный номер:</span>
		</td>
		<td align="left">
        <?
				printf ("<input name='invnomer' type='text' value='$invnomer' size='20' maxlength='15'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Состояние:</span>
		</td>
		<td align="left">
   				<select name="sost">
				<?php
				printf ("<option selected>$sost</option>");
					$resust = mysql_query("SELECT sost FROM sost WHERE remont = '1' ORDER BY sost",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['sost']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Станция:</span>
		</td>
		<td align="left">
   				<select name="station">
				<?php
				printf ("<option selected>$station</option>");
					$resust = mysql_query("SELECT station FROM station ORDER BY station",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['station']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
  	<tr>
		<td align="right">
				<span  class='g14'>Служба:</span>
		</td>
		<td align="left">
        <?
				printf ("<input name='slujba' type='text' value='$slujba' size='20' maxlength='20'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>Рабочее место:</span>
		</td>
		<td align="left">
		<?
				printf ("<input name='rabmesto' type='text' value='$rabmesto' size='20' maxlength='20'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Устройство:</span>
		</td>
		<td align="left">
   				<select name="ustroystvo">
				<?php
				printf ("<option selected>$ustroystvo</option>");
					$resust = mysql_query("SELECT ustroystvo FROM ustroystvo WHERE remont = '1' ORDER BY ustroystvo",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['ustroystvo']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span  class='g14'>Дата поступления:</span>
		</td>
		<td align='left'>
   				<select name='nden'>
				<?php
				printf ("<option selected>$nden</option>");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['den']))
						printf ("<option>%s</option>",$mydata['den']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='nmes'>
				<?php

				$resdata = mysql_query("SELECT mes FROM data WHERE id=$nmes",$db);
				$mydata = mysql_fetch_array($resdata);
				$nmes=$mydata['mes'];

				printf ("<option selected>$nmes</option>");
					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод месяцев
						if (isset($mydata['mes']))
						printf ("<option>%s</option>",$mydata['mes']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='ngod'>
				<?php
				printf ("<option selected>$ngod</option>");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод годов
						if (isset($mydata['god']))
						printf ("<option>%s</option>",$mydata['god']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span  class='g14'>Дата возврата:</span>
		</td>
		<td align='left'>
   				<select name='kden'>
				<?php
				printf ("<option selected>$kden</option>");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['den']))
						printf ("<option>%s</option>",$mydata['den']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='kmes'>
				<?php

				$resdata = mysql_query("SELECT mes FROM data WHERE id=$kmes",$db);
				$mydata = mysql_fetch_array($resdata);
				$kmes=$mydata['mes'];

				printf ("<option selected>$kmes</option>");
					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод месяцев
						if (isset($mydata['mes']))
						printf ("<option>%s</option>",$mydata['mes']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='kgod'>
				<?php
				printf ("<option selected>$kgod</option>");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод годов
						if (isset($mydata['god']))
						printf ("<option>%s</option>",$mydata['god']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Характеристика<br>устройства:</span>
		</td>
		<td align='left'>
			<?
				printf("<textarea name='haraktustr' cols='20' rows='1'>$haraktustr</textarea>");
			?>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Неисправные узлы:</span>
		</td>
		<td align='left'>
			<?
				printf("<textarea name='polomka' cols='20' rows='2'>$polomka</textarea>");
			?>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Необходимые запчасти<br>для ремонта:</span>
		</td>
		<td align='left'>
			<?
				printf("<textarea name='zch' cols='20' rows='3'>$zch</textarea>");
			?>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Фамилия<br>специалиста:</span>
		</td>
		<td align='left'>
			<?
				printf("<textarea name='fiospetc' cols='20' rows='2'>$fiospetc</textarea>
						<input name='id' type='hidden' value='%s'>						   
						<input name='upd' type='hidden' value='%s'>						   
						<input name='gruppa' type='hidden' value='%s'>", $id, '5', $gruppa);
			?>
		</td>
	</tr>
   	<tr>
		<td colspan='2' align='center'>
				<input name='submit' type='submit' class='b14' id='submit' value='Редактировать акт'></br></br>
		</td>
	</tr>
	</table>
	</form>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
