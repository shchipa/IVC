<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if ($left[1] == 0)
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
<title>Добавить телеграмму отдела ВЦТер. Два по Сто</title>
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
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>

<?php
	include ("left.php"); //Подключаем левую часть
?>
<td align="center">
	<form action='tlg_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
   	<tr>
		<td align="right" width="50%">
			<span class='g14'>Номер телеграммы:</span>
		</td>
		<td align="left">
			<input name='nomer' type='text' value='' size='10' maxlength='10'>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span class='g14'>Дата телеграммы:</span>
		</td>
<!--	<td align="right">
			<span  class='g14'>Дата телеграммы в формате <span  class='r14'>ГГГГ-ММ-ДД</span>:</span>
		</td>
		<td align="left">
			<input name='dat' type='text' value='' size='10' maxlength='10'>
		</td>
-->
		<td align="left">
   				<select name="den">
				<option selected disabled>День</option>
				<?php
					$dn = date("d");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['den']) && $mydata['den'] < $dn)
						{printf ("<option>%s</option>",$mydata['den']);}
						if (isset($mydata['den']) && $mydata['den'] == $dn)
						{printf ("<option selected>%s</option>",$dn);}
						if (isset($mydata['den']) && $mydata['den']>$dn)
						{printf ("<option>%s</option>",$mydata['den']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="mes">
				<option selected disabled>Месяц</option>
				<?php
					$mn = date("m");
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['mes']) && $mydata['id'] < $mn)
						{printf ("<option>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id'] == $mn)
						{printf ("<option selected>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id']>$mn)
						{printf ("<option>%s</option>",$mydata['mes']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="god">
				<option selected disabled>Год</option>
				<?php
					$gn = date("Y");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней месяца
						if (isset($mydata['god']) && $mydata['god'] < $gn)
						{printf ("<option>%s</option>",$mydata['god']);}
						if (isset($mydata['god']) && $mydata['god'] == $gn)
						{printf ("<option selected>%s</option>",$gn);}
						if (isset($mydata['god']) && $mydata['god']>$gn)
						{printf ("<option>%s</option>",$mydata['god']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Станция:</span>
		</td>
		<td align="left">
   				<select name="station">
				<option selected disabled>Выберите станцию...</option>
				<?php
					$result = mysql_query("SELECT station FROM station",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//вывод Названий линейных групп
						printf ("<option>%s</option>",$mystat['station']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>Текст телеграммы:</span>
		</td>
		<td align="left">
	        <textarea name='tlg' rows="8" cols="40"></textarea></br></br>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>Принятые меры:</span>
		</td>
		<td align="left">
	        <textarea name='mery' rows="4" cols="40"></textarea></br></br>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='Добавить телеграмму'></br></br>
		</td>
	</tr>
	</table>
	</form>

</td>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
