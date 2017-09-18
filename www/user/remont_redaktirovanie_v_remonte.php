<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if ($left[4] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>С 14:00 до 15:00 проводятся технические работы!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>НЕТ ДОСТУПА!!!</p>");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">

</style>
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

<td>
<?
if (isset($_SESSION['adminUser']))
{
	include ("remont_tablitca_red_akt_v_remonte.php");
}
else
{
	printf("
	<table border='0'  align='center'	cellspacing='0'	cellpadding='0'>
		<tr>
			<td colspan='2' class='r16'></br></br>Необходимо авторизоваться!</td>
		</tr>
	</table>
	");
}

?><br>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
