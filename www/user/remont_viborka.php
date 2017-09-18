<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if (isset($_POST['invnomer']))		{$invnomer1=$_POST['invnomer'];		if ($invnomer1=='')							{unset($invnomer1);}}
if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer']."%";	if ($invnomer=='')							{unset($invnomer);}}

if (isset($_POST['polomka']))		{$polomka1=$_POST['polomka'];		if ($polomka1=='')							{unset($polomka1);}}
if (isset($_POST['polomka']))		{$polomka=$_POST['polomka']."%";	if ($polomka=='')							{unset($polomka);}}

if (isset($_POST['zch']))			{$zch1=$_POST['zch'];				if ($zch1=='')								{unset($zch1);}}
if (isset($_POST['zch']))			{$zch=$_POST['zch']."%";			if ($zch=='')								{unset($zch);}}

if (isset($_POST['ustroystvo']))	{$ustroystvo=$_POST['ustroystvo'];	if ($ustroystvo=='Выберите устройство...')	{unset($ustroystvo);}}
if (isset($_POST['sost']))			{$sost=$_POST['sost'];				if ($sost=='Выберите состояние...')			{unset($sost);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='Выберите группу...')			{unset($gruppa);}}
if (isset($_POST['station']))		{$station=$_POST['station'];		if ($station=='Выберите станцию...')		{unset($station);}}
if (isset($_POST['flag']))			{$flag=$_POST['flag'];				if ($flag=='')								{unset($flag);}}

/*
$den = "день";
$mes = "месяц";
$god = "год";

if (isset($_POST['dn']) && $_POST['dn'] != "день" && isset($_POST['mnt']) && $_POST['mnt'] != "месяц" && isset($_POST['gn']) && $_POST['gn'] != "год")
{
	$dn = $_POST['dn'];
	$nmt=$_POST['mnt'];
	$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mnt'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mn = $mymes['id'];
	$gn=$_POST['gn'];
}
else
{// Начальная дата
	$dn = "01";
	$mn = "01";
	$gn = "1995";
}

if (isset($_POST['dk']) && $_POST['dk'] != "день" && isset($_POST['mkt']) && $_POST['mkt'] != "месяц" && isset($_POST['gk']) && $_POST['gk'] != "год")
{
	$dk=$_POST['dk'];
	$nmt=$_POST['mkt'];
	$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mkt'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mk = $mymes['id'];
	$gk=$_POST['gk'];
}
else
{// Конечная дата
	$dk = "31";
	$mk = "12";
	$gk = "2024";
}
*/

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
<table width="100%" border="0"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php");
?>
<tr>
<?php
	include ("left.php");
?>
<td align="center" valign="top">
	<?php
		include ("remont_viborka_tabl.php");
	?>
    </br>
</td>
</tr>
<?php
	include ("bottom.php");
?>
</table>
</body>
</html>