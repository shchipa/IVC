<?php
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['check']))			{$check = $_POST['check'];				if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];					if ($id == '')			{unset($id);}}
if (isset($_POST['fio']))			{$fio = $_POST['fio'];					if ($fio == '')			{unset($fio);}}
if (isset($_POST['parol']))			{$parol = $_POST['parol'];				if ($parol == '')		{unset($parol);}}
if (isset($_POST['nden']))			{$nden = $_POST['nden'];				if ($nden == '')		{unset($nden);}}
if (isset($_POST['nmes']))			{$nmes = $_POST['nmes'];				if ($nmes == '')		{unset($nmes);}}
if (isset($_POST['ngod']))			{$ngod = $_POST['ngod'];				if ($ngod == '')		{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas = $_POST['nchas'];				if ($nchas == '')		{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin = $_POST['nmin'];				if ($nmin == '')		{unset($nmin);}}
if (isset($_POST['kden']))			{$kden = $_POST['kden'];				if ($kden == '')		{unset($kden);}}
if (isset($_POST['kmes']))			{$kmes = $_POST['kmes'];				if ($kmes == '')		{unset($kmes);}}
if (isset($_POST['kgod']))			{$kgod = $_POST['kgod'];				if ($kgod == '')		{unset($kgod);}}
if (isset($_POST['kchas']))			{$kchas = $_POST['kchas'];				if ($kchas == '')		{unset($kchas);}}
if (isset($_POST['kmin']))			{$kmin = $_POST['kmin'];				if ($kmin == '')		{unset($kmin);}}
if (isset($_POST['prim']))			{$prim = $_POST['prim'];				if ($prim == '')		{unset($prim);}}
if (isset($_POST['ust']))			{$ust = $_POST['ust'];					if ($ust == '')			{unset($ust);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Редактирование сбоя - ".$fio."   id=".$id." ust=".$ust." ";?></title>
<link href="../style.css" rel="stylesheet" type="text/css">

</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("../high.php"); //Подключаем шапку сайта
?>
<tr>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td> </br>

<?
if (isset($check) && isset($id) && isset($fio) && isset($parol) && isset($ust))
{
	//Перечень всех выводимых заявок
	$resav = mysql_query ("SELECT * FROM avariya WHERE id = '$id'",$db);
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
			<td align='center' width='60'><span class='g12'>%s.%s.%s</span></td>
			<td align='center' width='35'><span class='g12'>%s:%s</span></td>
			<td align='center' width='60'><span class='g12'>%s.%s.%s</span></td>
			<td align='center' width='35'><span class='g12'>%s:%s</span></td>
			<td align='center' width='300'><span class='g12'>%s</span></td>
			<td align='center' width='15'><span class='g12'>%s</span></td>
		</tr>
		<tr valign='center'>
			</tr>
	</table>
	</form>
	", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['ust']);
	$station = $rowav['station'];
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
            
	<form action='update_sboy.php' method='post' name='inssboy' id='inssboy'>
	<table border='0' cellpadding='12' width='100%'>
	<tr>
		<td colspan='2' align='center'>
				<?php
					printf ("</br></br><span class='g16'> %s, заполните пожалуйста <span class='r16'>все</span> поля формы:</span></br></br>",$fio);
				?>
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
					$resust = mysql_query("SELECT * FROM station ORDER BY station",$db);
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
				<span  class='g14'>Подразделение/служба:</span>
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
				<span  class='g14'>Устройство, вышедшее из строя:</span>
		</td>
		<td align="left">
   				<select name="ustroystvo">
				<?php
				printf ("<option selected>$ustroystvo</option>");
					$resust = mysql_query("SELECT * FROM ustroystvo",$db);
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
				<span  class='g14'>Дата заявки о сбое:</span>
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
				<span  class='g14'>Время заявки о сбое:</span>
		</td>
		<td align='left'>
   				<select name='nchas'>
				<?php
				printf ("<option selected>$nchas</option>");
					$resdata = mysql_query("SELECT chas FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Часов
						if (isset($mydata['chas']))
						printf ("<option>%s</option>",$mydata['chas']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='nmin'>
				<?php
				printf ("<option selected>$nmin</option>");
					$resdata = mysql_query("SELECT min FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Минут
						if (isset($mydata['min']))
						printf ("<option>%s</option>",$mydata['min']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span  class='g14'>Дата устранения сбоя:</span>
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
				<span  class='g14'>Время устранения сбоя:</span>
		</td>
		<td align='left'>
   				<select name='kchas'>
				<?php
				printf ("<option selected>$kchas</option>");
					$resdata = mysql_query("SELECT chas FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Часов
						if (isset($mydata['chas']))
						printf ("<option>%s</option>",$mydata['chas']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='kmin'>
				<?php
				printf ("<option selected>$kmin</option>");
					$resdata = mysql_query("SELECT min FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод Минут
						if (isset($mydata['min']))
						printf ("<option>%s</option>",$mydata['min']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Устранено:</span>
		</td>
		<td align='left'>
       		<select name='ust'>
            <?
				printf ("<option selected>%s</option>",$ust);
			?>
				<option>0</option>
				<option>1</option>
			</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>Примечание</br>(Предпринятые меры </br> по устранению сбоя):</span>
		</td>
		<td align='left'>
				<?php
				printf("<textarea name='prim' cols='40' rows='5'>$prim</textarea>");
					$resgruppa = mysql_query("SELECT gruppa FROM mehanik WHERE mehanik='$fio'",$db);
					$mygruppa = mysql_fetch_array($resgruppa);
					$gruppa = $mygruppa['gruppa'];

        			printf("<input name='fio' type='hidden' value='%s'>
							<input name='id' type='hidden' value='%s'>						   
							<input name='upd' type='hidden' value='%s'>						   
							<input name='gruppa' type='hidden' value='%s'>",$fio, $id, '5', $gruppa);
				?>
		</td>
	</tr>
   	<tr>
		<td colspan='2' align='center'>
				<input name='submit' type='submit' class='b14' id='submit' value='Редактировать сбой'></br></br>
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
