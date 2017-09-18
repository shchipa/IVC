<?php
include ("avtorizatciya_admin.php");

if (isset($_POST['upd']))			{$upd = $_POST['upd'];			if ($upd == '')			{unset($upd);}}
if (isset($_POST['id']))			{$id = $_POST['id'];			if ($id == '')			{unset($id);}}
if (isset($_POST['nden']))			{$nden = $_POST['nden'];		if ($nden == '')		{unset($nden);}}

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

if (isset($_POST['ngod']))			{$ngod = $_POST['ngod'];		if ($ngod == '')						{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas = $_POST['nchas'];		if ($nchas == '')						{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin = $_POST['nmin'];		if ($nmin == '')						{unset($nmin);}}

if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer'];	if ($invnomer=='' or $invnomer==' ')	{$invnomer=' ';}}
if (isset($_POST['prim']))			{$prim = $_POST['prim'];		if ($prim == '')						{unset($prim);}}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Редактирование (обновление) сбоя - ".$_SESSION['adminUser']."   ";?></title>
<link href="style.css" rel="stylesheet" type="text/css">

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

if (isset($upd)&&isset($id)&&isset($_SESSION['adminUser'])&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($prim))
{//Заносим информацию
	$insert = mysql_query ("UPDATE tehnika SET nden='$nden', nmes='$nmes', ngod='$ngod', nchas='$nchas', nmin='$nmin', invnomer='$invnomer', prim='$prim' WHERE id='$id'");
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

					<tr align='center'>
						<td>
							<form method='post' action='sboy_svoi.php'>
								<input type='submit' class='g14' title='Продолжить работу' value='Далее'>
								<input name='fio' type='hidden' value='$fio'> 
								<input name='parol' type='hidden' value='$pass'> 
							</form></br></br></br>
						</td>
							</form></br></br></br>
						</td>
					</tr>



				</table>
				", $_SESSION['adminUser']);
	}
	else // Если не добавилась в базу данных
	{
				echo "<span class='r18'>Технический сбой! Вид update!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
	}
}
else
{
	echo "Опять забыли птичкой отметить?!";
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