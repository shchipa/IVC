<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['ao']))		{$ao=$_POST['ao'];				if ($ao=='')							{unset($ao);}}
if (isset($_POST['ip']))		{$ip=$_POST['ip'];				if ($ip=='')							{unset($ip);}}
if (isset($_POST['ki']))		{$ki=$_POST['ki'];				if ($ki=='Выберите КИ...')				{unset($ki);}}
if (isset($_POST['station']))	{$station=$_POST['station'];	if ($station=='Выберите станцию...')	{unset($station);}}
if (isset($_POST['rabmesto']))	{$rabmesto=$_POST['rabmesto'];	if ($rabmesto=='')						{unset($rabmesto);}}
if (isset($_POST['vidki']))		{$vidki=$_POST['vidki'];		if ($vidki=='Выберите вид конф....')	{unset($vidki);}}
if (isset($_POST['fio']))		{$fio=$_POST['fio'];			if ($fio=='')							{unset($fio);}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто ao=".$ao." ip=".$ip." ki=".$ki." stat=".$station." rab=".$rabmesto." v=".$vidki." fio=".$fio." ";?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>

<?php
	include ("left.php"); //Подключаем левую часть
?>


<?

if (isset($ao) && isset($ip) && isset($ki) && isset($station) && isset($rabmesto) && isset($vidki) && isset($fio))
{
	include ("ins_ao.php");
}
else
{
	include ("aoform.php");
}
?>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
