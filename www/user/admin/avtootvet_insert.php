<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser=$_POST['avtootvet_ser'];		if ($avtootvet_ser=='')		{unset($avtootvet_ser);}}
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom=$_POST['avtootvet_nom'];		if ($avtootvet_nom=='')		{unset($avtootvet_nom);}}
if (isset($_POST['station']))			{$station=$_POST['station'];					if ($station=='')			{unset($station);}}
if (isset($_POST['slujba']))			{$submit=$_POST['slujba'];						if ($slujba=='')			{unset($slujba);}}
if (isset($_POST['rabmesto']))			{$rabmesto=$_POST['rabmesto'];					if ($rabmesto=='')			{unset($rabmesto);}}
if (isset($_POST['submit']))			{$submit=$_POST['submit'];						if ($submit=='')			{unset($submit);}}
if (isset($_POST['add_avtootveta1']))	{$add_avtootveta1 = $_POST['add_avtootveta1'];	if ($add_avtootveta1=='')	{$add_avtootveta1 = 0;}}
if (isset($_POST['avtoonvet_ser1']))	{$avtoonvet_ser1 = $_POST['avtoonvet_ser1'];	if ($avtoonvet_ser1=='')	{$avtoonvet_ser1 = 0;}}
if (isset($_POST['avtoonvet_nom1']))	{$avtoonvet_nom1 = $_POST['avtoonvet_nom1'];	if ($avtoonvet_nom1 =='')	{$avtoonvet_nom1 = 0;}}
if (isset($_POST['ip']))				{$ip = 	$_POST['ip'];							if ($ip=='')				{$ip = 0;}}
if (isset($_POST['del']))				{$del=$_POST['del'];							if ($del=='')				{unset($del);}}
if (isset($_POST['del2']))				{$del2=$_POST['del2'];							if ($del2=='')				{unset($del2);}}

if (isset($station))
{
	$resgruppa = mysql_query("SELECT gruppa FROM station WHERE station='$station'",$db);
	$mygruppa = mysql_fetch_array($resgruppa);
	$gruppa = $mygruppa['gruppa'];
}
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
<table width="100%" border="0" cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td align="center">
	<?php 

	switch ($submit)
	{
		case "Добавить автоответ":
		{
			if (isset($avtootvet_ser) && isset($avtootvet_nom) && isset($rabmesto) && isset ($slujba) && isset($ip) && isset($station)&& isset($gruppa))
			{
				$result = mysql_query("INSERT INTO abonent (avtootvet_ser, avtootvet_nom, station, rabmesto, slujba, ip, gruppa, fio) VALUES ('$avtootvet_ser', '$avtootvet_nom', '$station', '$rabmesto', '$slujba', '$ip', '$gruppa', '$_SESSION[adminUser]')");
 			 	if ($result=='true')
				{
					printf("Ваши данные успешно занесены!<br><br> <br>
						<form method='post' action='avtootvet.php'>
							<input name='avtootvet_ser' type='hidden' value='%s'>
							<input type='submit' class='g14' value='Далее'>
						</form>", $avtootvet_ser);
 				}
				else 
				{
					printf("Данные не внесены. Проверьте все ли поля заполнены<br><br><br>
						<form method='post' action='avtootvet.php'>
							<input type='submit' class='g14' value='Далее'>
						</form>");
				}	
			}
			else 
			{
				printf("Данные не внесены <br><br><br>
						<form method='post' action='avtootvet.php'>
							<input type='submit' class='g14' value='Далее'>
						</form>");
			} 
		}
//	}
		break;

		default:
		{
			include ("left0.php");
		}
		break;
	}

	?>
</td>
<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>
</body>
</html>