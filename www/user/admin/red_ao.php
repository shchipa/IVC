<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['upd']))		{$upd = $_POST['upd'];			if ($upd == '')			{unset($upd);}}
if (isset($_POST['check']))		{$check = $_POST['check'];		if ($check == '')		{unset($check);}}
if (isset($_POST['id']))		{$id=$_POST['id'];				if ($id=='')			{unset($id);}}
if (isset($_POST['ao']))		{$ao=$_POST['ao'];				if ($ao=='')			{unset($ao);}}
if (isset($_POST['ip']))		{$ip=$_POST['ip'];				if ($ip=='')			{unset($ip);}}
if (isset($_POST['ki']))		{$ki=$_POST['ki'];				if ($ki=='')			{unset($ki);}}
if (isset($_POST['station']))	{$station=$_POST['station'];	if ($station=='')		{unset($station);}}
if (isset($_POST['rabmesto']))	{$rabmesto=$_POST['rabmesto'];	if ($rabmesto=='')		{unset($rabmesto);}}
if (isset($_POST['vidki']))		{$vidki=$_POST['vidki'];		if ($vidki=='')			{unset($vidki);}}
if (isset($_POST['fio']))		{$fio=$_POST['fio'];			if ($fio=='')			{unset($fio);}}
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

<td align="center">

<?
if (isset($upd) && isset($id) && isset($ao) && isset($ip) && isset($ki) && isset($station) && isset($rabmesto) && isset($vidki) && isset($fio))
{
	include ("upd_ao.php");
}
else
{
	if (isset($check) && isset($id) && isset($ao) && isset($ip) && isset($ki) && isset($station) && isset($rabmesto) && isset($vidki) && isset($fio))
	{
		include ("ao_red.php");
	}
	else
	{
		include ("tab_ao_red.php");
	}
}
?>
</td>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
