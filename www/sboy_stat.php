<?php
include ("db.php");//Соединяемся с базой данных


$data = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$den = strftime("%d", $data);
$mes = strftime("%m", $data);
$god = strftime("%Y", $data);

if (isset($_POST['dn']))
{
	$dn = $_POST['dn'];
}
else {$dn = $den;}


if (isset($_POST['mnt']))
{
	$nmt=$_POST['mnt'];
	$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mnt'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mn = $mymes['id'];
}
else {$mn = $mes;}


if (isset($_POST['gn']))
{
	$gn=$_POST['gn'];
}
else {$gn = $god;}

/*
if (isset($_POST['dk']))
{
	$dk=$_POST['dk'];
}
else {$dk = $den;}


if (isset($_POST['mkt']))
{
	$nmt=$_POST['mkt'];
	$resmes = mysql_query("SELECT id, mes FROM data WHERE mes='$mkt'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mk = $mymes['id'];
}
else {$mk = $mes;}


if (isset($_POST['gk']))
{
	$gk=$_POST['gk'];
}
else {$gk = $god;}
*/

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


<td align="center" valign="top">
	
	<?php
		include ("stat_data.php");
		include ("stat_sum.php");
	?>
	</br>	
</td>

</tr>
<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
