<?php 
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser = $_POST['avtootvet_ser'];		if ($avtootvet_ser=='')		{$avtootvet_ser = 0;}}
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom = $_POST['avtootvet_nom'];		if ($avtootvet_nom=='')		{$avtootvet_nom = 0;}}
if (isset($_POST['rabmesto']))			{$rabmesto = $_POST['rabmesto'];				if ($rabmesto=='')			{$rabmesto = 0;}}
if (isset($_POST['ip']))				{$ip = 	$_POST['ip'];							if ($ip=='')				{$ip = 0;}}
if (isset($_POST['slujba']))			{$slujba = $_POST['slujba'];					if ($slujba=='')			{$slujba = 0;}}
if (isset($_POST['station']))			{$station = $_POST['station'];					if ($station=='')			{$station = 0;}}
if (isset($_POST['id']))				{$id = $_POST['id'];							if ($id=='')				{$id = 0;}}
if (isset($_POST['p']))					{$p = $_POST['p'];								if ($p=='')					{$p = 0;}}
if (isset($_POST['add_avtootveta']))	{$add_avtootveta = $_POST['add_avtootveta'];	if ($add_avtootveta=='')	{$add_avtootveta = 0;}}
if (isset($_POST['gruppa']))			{$gruppa = $_POST['gruppa'];					if ($gruppa=='')			{$gruppa = 0;}}
if (isset($_POST['p2']))				{$p2 = $_POST['p2'];							if ($p2=='')				{$p2 = 0;}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellspacing="0"	cellpadding="0" >
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>

<?php
	include ("left.php"); //Подключаем левую часть
?>


<td>
<p class='g18' align="center">Добавление новой серии автоответов</p>

<form action="avtootvet_insert.php" method="post" name="avtootvetu" >

<table width="100%" border="0" cellpadding="5" cellspacing="0" align="center">
	<tr class="g14">
		<td align="right" width="50%">Автоответ:</td>
		<td align="left">
			<input name='avtootvet_ser' type='text' size="7" maxlength="9" value='<? echo $add_avtootveta; ?>'>
			<input name='avtootvet_nom' type='text' size="2" maxlength="2" value='<? echo $avtootvet_nom; ?>'>
		</td>
	</tr>
	<tr class="g14">
		<td align="right">Станция:</td>
		<td align="left"><select name="station" size="1" >
						<option selected disabled>Выберите станцию...</option>
	      <? 
			$resav = mysql_query ("SELECT station FROM station ",$db);
			$rowav = mysql_fetch_array($resav);
			do
			{
				printf("<option>%s</option>",$rowav['station']);
				$p2=$rowav['station'] ;
			}
			while ($rowav = mysql_fetch_array($resav));
			?>
			</select>
		</td>
	</tr>
	<tr class="g14">
		<td align="right">Рабочеее место:</td>
		<td align="left"><input  name="rabmesto" type="text" size="20" maxlength="20"></td>
	</tr>
	<tr class="g14">
		<td align="right">Служба:</td>
		<td align="left"><input name="slujba" type="text" size="20" maxlength="20"></td>
	</tr>
	<tr class="g14">
		<td align="right">IP адрес:</td>
		<td align="left"><input  name="ip" type="text" size="15" maxlength="15"></td>
	</tr>
	<tr height="50" valign="bottom">
		<td colspan="2" align="center">
			<input name="submit" class="b14" type="submit" value="Добавить автоответ" class="bor" id="submit" >
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