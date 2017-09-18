<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if ($left[5] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>С 14:00 до 15:00 проводятся технические работы!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>НЕТ ДОСТУПА!!!</p>");
	exit;
}

if (isset($_POST['id']))			{$id=$_POST['id'];					if ($id=='')								{unset($id);}}
if (isset($_POST['flag']))			{$flag=$_POST['flag'];				if ($flag=='')								{unset($flag);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='')							{unset($gruppa);}}
if (isset($_POST['station']))		{$station=$_POST['station'];		if ($station=='Выберите станцию...')		{unset($station);}}
if (isset($_POST['slujba']))		{$slujba=$_POST['slujba'];			if ($slujba=='')							{unset($slujba);}}
if (isset($_POST['rabmesto']))		{$rabmesto=$_POST['rabmesto'];		if ($rabmesto=='')							{unset($rabmesto);}}
if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer'];		if ($invnomer=='')							{$invnomer=' ';}}
if (isset($_POST['ustroystvo']))	{$ustroystvo=$_POST['ustroystvo'];	if ($ustroystvo=='Выберите устройство...')	{unset($ustroystvo);}}
if (isset($_POST['nden']))			{$nden=$_POST['nden'];				if ($nden=='День')							{unset($nden);}}
if (isset($_POST['ngod']))			{$ngod=$_POST['ngod'];				if ($ngod=='Год')							{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas=$_POST['nchas'];			if ($nchas=='Часы')							{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin=$_POST['nmin'];				if ($nmin=='Минуты')						{unset($nmin);}}
if (isset($_POST['prim']))			{$prim=$_POST['prim'];				if ($prim=='')								{unset($prim);}}

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

if (isset($_POST['kden']))			{$kden=$_POST['kden'];				if ($kden=='День' or $kden=='')							{unset($kden);}}
if (isset($_POST['kgod']))			{$kgod=$_POST['kgod'];				if ($kgod=='Год' or $kgod=='')							{unset($kgod);}}
if (isset($_POST['kchas']))			{$kchas=$_POST['kchas'];			if ($kchas=='Часы' or $kchas=='')						{unset($kchas);}}
if (isset($_POST['kmin']))			{$kmin=$_POST['kmin'];				if ($kmin=='Минуты' or $kmin=='')						{unset($kmin);}}

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

	$resgruppa = mysql_query("SELECT gruppa FROM station WHERE station='$station'",$db);
	$mygruppa = mysql_fetch_array($resgruppa);
	$gruppa = $mygruppa['gruppa'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. ".$_SESSION['adminUser']." Добавление сбоя ".$ustroystvo." по станции ".$station." ";?></title>
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
$nowden = date("j");
$nowmes = date("m");
$nowgod = date("Y");

if (isset($id)&&isset($_SESSION['adminUser'])&&isset($kden)&&isset($kmes)&&isset($kgod)&&isset($kchas)&&isset($kmin)&&isset($prim))
{//Заносим информацию если это ввод инфо об устранении сбоя
	$kdate = date("Y-m-j H:i:s");
	$kdat=$kgod."-".$kmes."-".$kden;
	if ($nowden == $kden && $nowmes == $kmes && $nowgod == $kgod)
	{
		$insert = mysql_query ("UPDATE avariya SET kden='$kden', kmes='$kmes', kgod='$kgod', kchas='$kchas', kmin='$kmin', prim='$prim', ust='1', kfio='$_SESSION[adminUser]', kdate='$kdate', kdat='$kdat' WHERE id='$id'");
		if ($insert == 'true') 
		{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
						<tr align='center'>
							<td>
		  						<span class='g18'></br></br>Спасибо, %s. Ваша информация об устранении сбоя успешно добавлена в базу данных!</br></br></br></br></span>
							</td>
						</tr>
						<tr height='10' align='center'>
							<td> </td>
						</tr>

						<tr align='center'>
							<td>
								<form method='post' action='sboy_svoi.php'>
									<input type='submit' class='g14' title='Продолжить работу' value='Далее'>
								</form></br></br></br>
							</td>
						</tr>
					</table>
					", $_SESSION['adminUser']);
		}
		else // Если не добавилась в базу данных
		{
			echo "<span class='r18'>Технический сбой! Вид 1!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
		}
	}
	else
	{
		echo "<span class='r18'>Сбой не добавлен! Дата устранения должна быть текущими сутками!!!</span><span class='g18'> </br> </br>Будьте внимательнее. Спасибо.</span>";
	}
}
else
{//Если не устранение сбоя
	if (isset($_SESSION['adminUser'])&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($kden)&&isset($kmes)&&isset($kgod)&&isset($kchas)&&isset($kmin)&&isset($prim))
	{//Заносим информацию если это ввод полной инфо о сбое (поступление и устранение)
		
		$flag=0;
		$res = mysql_query("SELECT * FROM avariya",$db);
		$my = mysql_fetch_array($res);
		do
		{//Проверка уникальности записи
			if ($gruppa==$my['gruppa']&&$station==$my['station']&&$slujba==$my['slujba']&&$rabmesto==$my['rabmesto']&&$invnomer==$my['invnomer']&&$ustroystvo==$my['ustroystvo']&&$ngod==$my['ngod']&&$nmes==$my['nmes']&&$nden==$my['nden']&&$nchas==$my['nchas']&&$nmin==$my['nmin'])
			{
				$flag=2;
			}
		}
		while ($my = mysql_fetch_array($res));
		
		if ($flag == 0)
		{
		
			$ndate = date("Y-m-j H:i:s");
			$kdate = date("Y-m-j H:i:s");
			$ndat=$ngod."-".$nmes."-".$nden;
			$kdat=$kgod."-".$kmes."-".$kden;

			if ($nowden == $kden && $nowmes == $kmes && $nowgod == $kgod && $nowden == $nden && $nowmes == $nmes && $nowgod == $ngod)
			{
				$insert = mysql_query ("INSERT INTO avariya (mehanik, gruppa, station, slujba, rabmesto, invnomer, ustroystvo, nden, nmes, ngod, nchas, nmin, kden, kmes, kgod, kchas, kmin, prim, ust, nfio, ndate, kfio, kdate, ndat, kdat) VALUES ('$_SESSION[adminUser]', '$gruppa', '$station', '$slujba', '$rabmesto', '$invnomer', '$ustroystvo', '$nden', '$nmes', '$ngod', '$nchas', '$nmin', '$kden', '$kmes', '$kgod', '$kchas', '$kmin', '$prim', '1', '$_SESSION[adminUser]', '$ndate', '$_SESSION[adminUser]', '$kdate', '$ndat', '$kdat')");
				if ($insert == 'true') 
				{
					printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							    <tr align='center'>
									<td colspan='5'>
										<span class='g18'></br></br>Спасибо, %s. Ваша информация об уже устранённом сбое успешно добавлена в базу данных!</br></br></br></br></span>	
									</td>
								</tr>
								<tr height='10' align='center'>
									<td colspan='5'> </td>
								</tr>
								<tr align='center'>
									<td>
										<form method='post' action='sboy_svoi.php'>
											<input type='submit' class='g14' title='Продолжить работу' value='Далее'>
										</form></br></br></br>
									</td>
								</tr>
							</table>
							", $_SESSION['adminUser']);
				}
				else // Если не добавилась в базу данных
				{
					echo "<span class='r18'>Технический сбой! Вид 2!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
				}

			}
			else
			{
				echo "<span class='r18'>Сбой не добавлен! Дата заявки/устранения должна быть текущими сутками!!!</span><span class='g18'> </br> </br>Будьте внимательнее. Спасибо.</span>";
			}
		}
		else
		{
			echo "<span class='r18'>Данная информация уже добавлена в базу данных</span>";	
		}
	}

	else
	{//Если это НЕ ввод полной инфо о сбое (поступление и устранение) - это ввод инфо только о сбое
		if (isset($_SESSION['adminUser'])&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($prim))
		{//Заносим информацию если это ввод инфо только о сбое
		
			$flag=0;
			$res = mysql_query("SELECT * FROM avariya",$db);
			$my = mysql_fetch_array($res);
			do
			{//Проверка уникальности записи
				if ($gruppa==$my['gruppa']&&$station==$my['station']&&$slujba==$my['slujba']&&$rabmesto==$my['rabmesto']&&$invnomer==$my['invnomer']&&$ustroystvo==$my['ustroystvo']&&$ngod==$my['ngod']&&$nmes==$my['nmes']&&$nden==$my['nden']&&$nchas==$my['nchas']&&$nmin==$my['nmin'])
				{
					$flag=2;
				}
			}
			while ($my = mysql_fetch_array($res));

			if ($flag == 0)
			{

				$ndate = date("Y-m-j H:i:s");
				$ndat=$ngod."-".$nmes."-".$nden;

				if ($nowden == $nden && $nowmes == $nmes && $nowgod == $ngod)
				{

					$insert = mysql_query ("INSERT INTO avariya (mehanik, gruppa, station, slujba, rabmesto, invnomer, ustroystvo, nden, nmes, ngod, nchas, nmin, prim, nfio, ndate, ndat) VALUES ('$_SESSION[adminUser]', '$gruppa', '$station', '$slujba', '$rabmesto', '$invnomer', '$ustroystvo', '$nden', '$nmes', '$ngod', '$nchas', '$nmin', '$prim', '$_SESSION[adminUser]', '$ndate', '$ndat')");
					if ($insert == 'true') 
					{
						printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							    <tr align='center'>
									<td colspan='5'>
	  								<span class='g18'></br></br>Спасибо, %s. Ваш сбой успешно добавлен в базу данных!</br></br></br></br></span>
									</td>
								</tr>
								<tr height='10' align='center'>
									<td colspan='5'> </td>
								</tr>
								<tr align='center'>
									<td colspan='5'>
	  								<span class='g18'></br>Не забывайте сразу после устранения введённого сбоя добавить информацию о его устранении</br></span>
									</td>
								</tr>
								<tr align='center'>
									<td>
										<form method='post' action='sboy_svoi.php'>
											<input type='submit' class='g14' title='Продолжить работу' value='Далее'>
										</form></br></br></br>
									</td>
									</tr>
						</table>
					", $_SESSION['adminUser']);
					}
					else // Если не добавилась в базу данных
					{
						echo "<span class='r18'>Технический сбой! Вид 3!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
					}
				}
				else
				{
					echo "<span class='r18'>Сбой не добавлен! Дата устранения должна быть текущими сутками!!!</span><span class='g18'> </br> </br>Будьте внимательнее. Спасибо.</span>";
				}
			}
			else
			{
				echo "<span class='r18'>Данная информация уже добавлена в базу данных</span>";	
			}

		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				     <tr align='center'>
						 <td>
		  					 <span class='g18'></br></br>Ваш сбой <span class='r18'>НЕ</span> добавлен в базу данных!</br></span>
						 </td>
					 </tr>
					<tr height='10' align='center'>
						 <td> </td>
					 </tr>
					<tr align='center'>
						 <td>
			  				 <span class='r18'></br>Введена не вся информация.</br></span>
						 </td>
					 </tr>
					<tr height='20' align='center'>
						 <td> </td>
					 </tr>
					<tr align='center'>
						 <td>
			  				 <span class='g18'></br>Пожалуйста, правильно заполните <span class='r18'>ВСЕ</span> поля и повторите попытку.</br></span>
						 </td>
					 </tr>
					<tr height='40' align='center'>
						 <td> </td>
					 </tr>
		    
<!--				<tr align='center'>
					 <td>
					 	<form method='post' action='sboy_add.php'>
						<input type='submit' class='g14' title='Вернуться и повторить попытку введения полной информации о сбое' value='Повторить ввод'>
						</form></br></br></br>
					 </td>
					 </tr>
-->				 </table>
			");
		}
	}
}
?>
</td>

<?php
			include ("bottom.php"); 
?>
</table>

</body>
</html>