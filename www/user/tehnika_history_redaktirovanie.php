<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka.php");

if (isset($_POST['flag']))				{$flag=$_POST['flag'];						if ($flag=='')				{unset($flag);}}
if (isset($_POST['invnomer']))			{$invnomer=$_POST['invnomer'];				if ($invnomer=='')			{unset($invnomer);}}
if (isset($_POST['otvetstvenniy']))		{$otvetstvenniy=$_POST['otvetstvenniy'];	if ($otvetstvenniy=='')		{unset($otvetstvenniy);}}
if (isset($_POST['naimenovanie']))		{$naimenovanie=$_POST['naimenovanie'];		if ($naimenovanie=='')		{unset($naimenovanie);}}
if (isset($_POST['ustroystvo']))		{$ustroystvo=$_POST['ustroystvo'];			if ($ustroystvo=='')		{unset($ustroystvo);}}
if (isset($_POST['harakteristika']))	{$harakteristika=$_POST['harakteristika'];	if ($harakteristika=='')	{unset($harakteristika);}}
if (isset($_POST['sost']))				{$sost=$_POST['sost'];						if ($sost=='')				{unset($sost);}}
//if (isset($_POST['gruppa']))			{$gruppa=$_POST['gruppa'];					if ($gruppa=='')			{unset($gruppa);}}
if (isset($_POST['station']))			{$station=$_POST['station'];				if ($station=='')			{unset($station);}}
if (isset($_POST['slujba']))			{$slujba=$_POST['slujba'];					if ($slujba=='')			{unset($slujba);}}
if (isset($_POST['rabmesto']))			{$rabmesto=$_POST['rabmesto'];				if ($rabmesto=='')			{unset($rabmesto);}}
if (isset($_POST['dopinfo']))			{$dopinfo=$_POST['dopinfo'];				if ($dopinfo=='')			{unset($dopinfo);}}
if (isset($_POST['vdate']))				{$vdate=$_POST['vdate'];					if ($vdate=='')				{unset($vdate);}}
if (isset($_POST['srok']))				{$srok=$_POST['srok'];						if ($srok=='')				{unset($srok);}}
if (isset($_POST['stoimost']))			{$stoimost=$_POST['stoimost'];				if ($stoimost=='')		{unset($stoimost);}}

$resgruppa = mysql_query("SELECT gruppa FROM station WHERE station='$station'",$db);
$mygruppa = mysql_fetch_array($resgruppa);
$gruppa = $mygruppa['gruppa'];

$date = date("Y-m-d");

/*
echo "flag="; echo $flag; echo "<br />";
echo "invnomer="; echo $invnomer; echo "<br />";
echo "otvetstvenniy="; echo $otvetstvenniy; echo "<br />";
echo "naimenovanie="; echo $naimenovanie; echo "<br />";
echo "ustroystvo="; echo $ustroystvo; echo "<br />";
echo "harakteristika="; echo $harakteristika; echo "<br />";
echo "sost="; echo $sost; echo "<br />";
echo "gruppa="; echo $gruppa; echo "<br />";
echo "station="; echo $station; echo "<br />";
echo "slujba="; echo $slujba; echo "<br />";
echo "rabmesto="; echo $rabmesto; echo "<br />";
echo "dopinfo="; echo $dopinfo; echo "<br />";
echo "vdate="; echo $vdate; echo "<br />";
echo "srok="; echo $srok; echo "<br />";
echo "stoimost="; echo $stoimost; echo "<br />";
echo "date="; echo $date; echo "<br />";
echo "fio="; echo $_SESSION['adminUser']; echo "<br />";
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. ".$_SESSION['adminUser']." ";?></title>
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
<?
$r = mysql_query ("SELECT * FROM tehnika WHERE invnomer = '$invnomer'",$db);
$res = mysql_fetch_array($r);
/*
echo "invnomer="; echo $res['invnomer']; echo "<br />";
echo "otvetstvenniy="; echo $res['otvetstvenniy']; echo "<br />";
echo "naimenovanie="; echo $res['naimenovanie']; echo "<br />";
echo "ustroystvo="; echo $res['ustroystvo']; echo "<br />";
echo "harakteristika="; echo $res['harakteristika']; echo "<br />";
echo "sost="; echo $res['sost']; echo "<br />";
echo "gruppa="; echo $res['$gruppa']; echo "<br />";
echo "station="; echo $res['station']; echo "<br />";
echo "slujba="; echo $res['slujba']; echo "<br />";
echo "rabmesto="; echo $res['rabmesto']; echo "<br />";
echo "dopinfo="; echo $res['dopinfo']; echo "<br />";
echo "vdate="; echo $res['vdate']; echo "<br />";
echo "srok="; echo $res['srok']; echo "<br />";
echo "stoimost="; echo $res['stoimost']; echo "<br />";
echo "date="; echo $res['date']; echo "<br />";
echo "fio="; echo $_SESSION['adminUser']; echo "<br />";
*/

//Проверка что изменили хотя бы одно поле

if (isset($_SESSION['adminUser']) && isset($invnomer) && isset($otvetstvenniy) && isset($naimenovanie) && isset($ustroystvo) && isset($harakteristika) && isset($sost) && isset($gruppa) && isset($station) && isset($slujba) && isset($rabmesto) && isset($dopinfo) && isset($vdate) && isset($srok) && isset($stoimost))
{//Введена вся инфо
	if (isset($_SESSION['adminUser'])&&($invnomer==$res['invnomer'])&&($otvetstvenniy==$res['otvetstvenniy'])&&($naimenovanie==$res['naimenovanie'])&&($ustroystvo==$res['ustroystvo'])&&($harakteristika==$res['harakteristika'])&&($sost==$res['sost'])&&($gruppa==$res['gruppa'])&&($station==$res['station'])&&($slujba==$res['slujba'])&&($rabmesto==$res['rabmesto'])&&($dopinfo==$res['dopinfo'])&&($vdate==$res['vdate'])&&($srok==$res['srok'])&&($stoimost==$res['stoimost']))
	{//Такая инфо уже существует, ничего не изменилось - заносить нельзя
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			<tr align='center'>
				<td>
		  			<span class='r18'>Данная информация уже есть в базе данных, либо Вы не изменили ни одного параметра.<br /></span>
				</td>
			</tr>
			<tr height='10' align='center'>
				<td> </td>
			</tr>
			<tr align='center'>
				<td>
					<form method='post' action='tehnika_history.php?invnomer=%s'>
						<input type='submit' class='g14' title='Продолжить работу' value='Назад'>
					</form></br></br></br>
				</td>
			</tr>
		</table>
		", $invnomer);
	}
	else
	{//Заносим информацию
		$insert1 = mysql_query ("UPDATE tehnika SET otvetstvenniy='$otvetstvenniy', naimenovanie='$naimenovanie', ustroystvo='$ustroystvo', harakteristika='$harakteristika', sost='$sost', station='$station', gruppa='$gruppa', slujba='$slujba', rabmesto='$rabmesto', dopinfo='$dopinfo', vdate='$vdate', srok='$srok', stoimost='$stoimost', fio='$_SESSION[adminUser]', date='$date' WHERE invnomer='$invnomer'");
		$insert2 = mysql_query ("INSERT INTO history (invnomer, otvetstvenniy, naimenovanie, ustroystvo, harakteristika, sost, station, gruppa, slujba, rabmesto, dopinfo, vdate, srok, stoimost, fio, date) VALUES ('$invnomer', '$otvetstvenniy', '$naimenovanie', '$ustroystvo', '$harakteristika', '$sost', '$station', '$gruppa', '$slujba', '$rabmesto', '$dopinfo', '$vdate', '$srok', '$stoimost', '$_SESSION[adminUser]', '$date')");
		if(($insert1 == 'true') && ($insert2 == 'true'))
		{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
						<tr align='center'>
							<td>
		  						<span class='g18'></br></br>Спасибо, %s. Ваша информация занесена в базу данных!<br /></span>
							</td>
						</tr>
						<tr height='10' align='center'>
							<td> </td>
						</tr>

						<tr align='center'>
							<td>
								<form method='post' action='tehnika_history.php?invnomer=%s'>
									<input type='submit' class='g14' title='Продолжить работу' value='Далее'>
								</form></br></br></br>
							</td>
						</tr>
					</table>
					", $_SESSION['adminUser'], $invnomer);
		}
		else // Если не добавилась в базу данных
		{
			echo "<span class='r18'>Технический сбой!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
		}
	}
}
else
{//Введена НЕ вся инфо
		echo "<span class='r18'>Данная информация НЕ добавлена в базу данны. </span>";
		echo "<span class='r18'>Вы ввели НЕ все данные.</span>";
}




?>
</td>

<?php
			include ("bottom.php"); 
?>
</table>

</body>
</html>