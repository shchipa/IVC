<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

$data = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$den = strftime("%d", $data);
$mes = strftime("%m", $data);
$god = strftime("%Y", $data);

//echo $zdn." ".$zmnt." ".$zgn."<br>";
//echo $dn." ".$mnt." ".$gn."<br>";
//echo $dk." ".$mkt." ".$gk."<br>";

$df=0;
$mf=0;
$gf=0;

if (isset($_POST['zdn']))
{
	$df=1;
	$dn = $_POST['zdn'];
	$dk = $_POST['zdn'];
}
else
{
	$dn = $den;
	$dk = $den;
}


if (isset($_POST['zmnt']))
{
	$mf=1;
	$mnt=$_POST['zmnt'];
	$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mnt'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mn = $mymes['id'];
	$mk = $mymes['id'];
}
else
{
	$mn = $mes;
	$mk = $mes;
}


if (isset($_POST['zgn']))
{
	$gf=1;
	$gn=$_POST['zgn'];
	$gk=$_POST['zgn'];
}
else
{
	$gn = $god;
	$gk = $god;
}


//echo "Z".$dn." ".$mn." ".$gn."<br>";
//echo "Z".$dk." ".$mk." ".$gk."<br>";
//echo "Z".$df." ".$mf." ".$gf."<br>";

if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['dn']))
	{
		$dn = $_POST['dn'];
	}
	else {$dn = $den;}
}

if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['mnt']))
	{
		$nmt=$_POST['mnt'];
		$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mnt'",$db);
		$mymes = mysql_fetch_array($resmes);
		$mn = $mymes['id'];
	}
	else {$mn = $mes;}
}


if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['gn']))
	{
		$gn=$_POST['gn'];
	}
	else {$gn = $god;}
}


if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['dk']))
	{
		$dk=$_POST['dk'];
	}
	else {$dk = $den;}
}

if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['mkt']))
	{
		$nmt=$_POST['mkt'];
		$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mkt'",$db);
		$mymes = mysql_fetch_array($resmes);
		$mk = $mymes['id'];
	}
	else {$mk = $mes;}
}

if($df==0 && $mf==0 && $gf==0)
{
	if (isset($_POST['gk']))
	{
		$gk=$_POST['gk'];
	}
	else {$gk = $god;}
}

//echo $dn." ".$mn." ".$gn."<br>";
//echo $dk." ".$mk." ".$gk."<br>";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr  style="height:100%">

<?php
	include ("left.php"); //Подключаем левую часть
?>


<td align="center">
	
	<?php
		include ("sboy_arhiv.php");
		include ("sboy_tablitca_data.php");
		include ("sboy_tablitca_neustr.php");
		include ("sboy_tablitca_sum.php");
	?>
	<a href="sboy_stat.php" title="Статистика за месяц">статистика</a>
	<br>
	<br>
</td>

</tr>
<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
