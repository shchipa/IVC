<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['upd']))			{$upd = $_POST['upd'];					if ($upd == '')			{unset($upd);}}
if (isset($_POST['id']))			{$id = $_POST['id'];					if ($id == '')			{unset($id);}}
if (isset($_POST['fio']))			{$fio = $_POST['fio'];					if ($fio == '')			{unset($fio);}}
//if (isset($_POST['parol']))			{$parol = $_POST['parol'];				if ($parol == '')		{unset($parol);}}
if (isset($_POST['nden']))			{$nden = $_POST['nden'];				if ($nden == '')		{unset($nden);}}

if (isset($_POST['nmes']))
	{
		$nmes=$_POST['nmes'];
		if ($nmes=='Месяц')
		{
			unset($nmes);
		}
		else
		{
			$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$nmes'",$db);
			$mymes = mysql_fetch_array($resmes);
			$nmes=$mymes['den'];
		}
	}

if (isset($_POST['ngod']))			{$ngod = $_POST['ngod'];				if ($ngod == '')		{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas = $_POST['nchas'];				if ($nchas == '')		{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin = $_POST['nmin'];				if ($nmin == '')		{unset($nmin);}}
if (isset($_POST['kden']))			{$kden = $_POST['kden'];				if ($kden == '')		{unset($kden);}}

if (isset($_POST['kmes']))
	{
		$kmes=$_POST['kmes'];
		if ($kmes=='Месяц')
		{
			unset($kmes);
		}
		else
		{
			$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$kmes'",$db);
			$mymes = mysql_fetch_array($resmes);
			$kmes=$mymes['den'];
		}
	}

if (isset($_POST['kgod']))			{$kgod = $_POST['kgod'];				if ($kgod == '')		{unset($kgod);}}
if (isset($_POST['kchas']))			{$kchas = $_POST['kchas'];				if ($kchas == '')		{unset($kchas);}}
if (isset($_POST['kmin']))			{$kmin = $_POST['kmin'];				if ($kmin == '')		{unset($kmin);}}
if (isset($_POST['prim']))			{$prim = $_POST['prim'];				if ($prim == '')		{unset($prim);}}
if (isset($_POST['ust']))			{$ust = $_POST['ust'];					if ($ust == '')			{unset($ust);}}
if (isset($_POST['station']))		{$station = $_POST['station'];			if ($station == '')		{unset($station);}}
if (isset($_POST['slujba']))		{$slujba = $_POST['slujba'];			if ($slujba == '')		{unset($slujba);}}
if (isset($_POST['rabmesto']))		{$rabmesto = $_POST['rabmesto'];		if ($rabmesto == '')	{unset($rabmesto);}}
if (isset($_POST['ustroystvo']))	{$ustroystvo = $_POST['ustroystvo'];	if ($ustroystvo == '')	{unset($ustroystvo);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Редактирование (обновление) сбоя - ".$fio."   id=".$id." обнова=".$upd." ";?></title>
<link href="../style.css" rel="stylesheet" type="text/css">

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

if (isset($upd)&&isset($id)&&isset($fio)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($prim)&&isset($ust)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo))
{//Заносим информацию
	$r = mysql_query("SELECT kdat FROM avariya WHERE id='$id'",$db);
	$m = mysql_fetch_array($r);
	$kdat = $m['kdat'];

	if ($ust == 0)
	{$kden=''; $kmes=''; $kgod=''; $kchas=''; $kmin=''; $kdat='0000-00-00';}
	$insert = mysql_query ("UPDATE avariya SET station='$station', slujba='$slujba', rabmesto='$rabmesto', ustroystvo='$ustroystvo', nden='$nden', nmes='$nmes', ngod='$ngod', nchas='$nchas', nmin='$nmin', kden='$kden', kmes='$kmes', kgod='$kgod', kchas='$kchas', kmin='$kmin', prim='$prim', ust='$ust', kdat='$kdat' WHERE id='$id'");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td>
		  					<span class='g18'></br></br>Спасибо, %s. Ваша информация с обновлением сбоя успешно добавлена в базу данных!</br></br></br></br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td> </td>
					</tr>

				</table>
				", $fio);
	}
	else // Если не добавилась в базу данных
	{
				echo "<span class='r18'>Технический сбой! Вид update!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
				
echo $upd;
echo $id;
echo $fio;
echo $nden;
echo $nmes;
echo $ngod;
echo $nchas;
echo $nmin;
echo $kden;
echo $kmes;
echo $kgod;
echo $kchas;
echo $kmin;
echo $prim;
echo $ust;
echo $slujba;
echo $rabmesto;
echo $ustroystvo;
	}
}
else
{
	echo "А ничё нет?!";
}
?>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>