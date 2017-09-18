<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka.php");

/*
if (isset($_POST['id']))				{$id = $_POST['id'];							if ($id=='')								{unset($id);}}
*/
if (isset($_GET['invnomer']))			{$invnomer=$_GET['invnomer'];					if ($invnomer=='')							{unset($invnomer);}}
/*
if (isset($_POST['invnomer']))			{$invnomer=$_POST['invnomer']."%";				if ($invnomer=='')							{unset($invnomer);}}
if (isset($_POST['otvetstvenniy']))		{$otvetstvenniy1=$_POST['otvetstvenniy'];		if ($otvetstvenniy1=='')					{unset($otvetstvenniy1);}}
if (isset($_POST['otvetstvenniy']))		{$otvetstvenniy=$_POST['otvetstvenniy']."%";	if ($otvetstvenniy=='')						{unset($otvetstvenniy);}}

if (isset($_POST['ustroystvo']))		{$ustroystvo=$_POST['ustroystvo'];				if ($ustroystvo=='Выберите устройство...')	{unset($ustroystvo);}}
if (isset($_POST['sost']))				{$sost=$_POST['sost'];							if ($sost=='Выберите состояние...')			{unset($sost);}}
if (isset($_POST['gruppa']))			{$gruppa=$_POST['gruppa'];						if ($gruppa=='Выберите группу...')			{unset($gruppa);}}
if (isset($_POST['station']))			{$station=$_POST['station'];					if ($station=='Выберите станцию...')		{unset($station);}}
*/

//echo $invnomer;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инвентарная ведомость. Два по Сто</title>
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
		include ("tehnika_history_tabl.php");
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