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

if (isset($_POST['nomer']))		{$nomer=$_POST['nomer'];		if ($nomer=='')							{unset($nomer);}}
if (isset($_POST['dat']))		{$dat=$_POST['dat'];			if ($dat=='')							{unset($dat);}}
else
{
	if (isset($_POST['den']))		{$den=$_POST['den'];			if ($den=='')						{unset($den);}}
	if (isset($_POST['mes']))		{$mes=$_POST['mes'];			if ($mes=='')						{unset($mes);}}
	$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$mes'",$db);
	$mymes = mysql_fetch_array($resmes);
	$mes2=$mymes['den'];
	if (isset($_POST['god']))		{$god=$_POST['god'];			if ($god=='')						{unset($god);}}
	{
		$dat = $god."-".$mes2."-".$den;
	}
}

if (isset($_POST['station']))	{$station=$_POST['station'];	if ($station=='Выберите станцию...')	{unset($station);}}
if (isset($_POST['tlg']))		{$tlg=$_POST['tlg'];			if ($tlg=='')							{unset($tlg);}}
if (isset($_POST['mery']))		{$mery=$_POST['mery'];}

if (isset($_POST['submit']))	{$submit=$_POST['submit'];		if ($submit=='')						{unset($submit);}}

if (isset($_POST['id']))		{$id=$_POST['id'];				if ($id=='')							{unset($id);}}
if (isset($_POST['check']))		{$check=$_POST['check'];		if ($check=='')							{unset($check);}}
if (isset($_POST['del']))		{$del=$_POST['del'];			if ($del=='')							{unset($del);}}
if (isset($_POST['del2']))		{$del2=$_POST['del2'];			if ($del2=='')							{unset($del2);}}

$resgruppa = mysql_query("SELECT gruppa_remont FROM station WHERE station='$station'",$db);
$mygruppa = mysql_fetch_array($resgruppa);
$gruppa = $mygruppa['gruppa_remont'];

/*
echo $id."<br>";
echo $nomer."<br>";
echo $dat."<br>";
echo $station."<br>";
echo $gruppa."<br>";
echo $tlg."<br>";
echo $mery."<br>";
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
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
	<?php 
switch ($submit)
{
	case "Добавить телеграмму":
	{
		if (isset($nomer)&&isset($dat)&&isset($gruppa)&&isset($station)&&isset($tlg))
		{//Заносим информацию
			$insert = mysql_query ("INSERT INTO tlg (nomer, dat, gruppa, station, tlg, mery) VALUES ('$nomer', '$dat', '$gruppa', '$station', '$tlg', '$mery')");
			if ($insert == 'true') 
			{
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							<tr align='center'>
								<td colspan='5'>
	  								<span class='g18'></br></br>Спасибо. Телеграмма успешно добавлена в базу данных!</br></br></br></br></span>
								</td>
							</tr>
							<tr height='10' align='center'>
								<td colspan='5'> </td>
							</tr>

							<tr align='center'>
								<td colspan='30'>
			  						<span class='g18'></br>___________________________________________</br></span>
								</td>
							</tr>

							<tr align='center'>
								<td colspan='5'>
		  							<span class='g14'></br>Для продолжения работы сделайте выбор:</br></span>
								</td>
							</tr>

							<tr height='40' align='center'>
								<td> </td>
							</tr>
				    
							<tr align='center'>
								<td>
									<form method='post' action='tlg_add.php'>
										<input type='submit' class='g14' title='Добавить ещё одну телеграмму' value='Добавить ещё телеграмму'>
									</form></br></br></br>
								</td>
							</tr>
						</table>
				", $_SESSION['adminUser']);
			}
			else // Если не добавилась в базу данных
			{
				echo "<span class='r18'>Технический сбой! </span><span class='g18'></br></br>Сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
			}
		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				    <tr align='center'>
						<td>
 							<span class='g18'></br></br>Телеграмма <span class='r18'>НЕ</span> добавлена в базу данных!</br></span>
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
					</table>
			");
		}
	}
	break;


	case "Редактир-ть":
	{
		if (isset($check)&&isset($id))
		{
			include ("tlg_redaktirovanie.php");
		}
		else
		{
			echo "<span class='r18'>Редактирование невозможно. Необходимо поставить \"птичку\" напротив номера телеграммы, информацию о которой необходимо изменить.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
		}
	}
	break;

	case "Редактировать":
	{
		if (isset($id)&&isset($nomer)&&isset($dat)&&isset($gruppa)&&isset($station)&&isset($tlg))
		{//Заносим информацию
			$insert = mysql_query ("UPDATE tlg SET nomer = '$nomer', dat = '$dat', gruppa = '$gruppa', station = '$station', tlg = '$tlg', mery = '$mery' WHERE id='$id'");
			if ($insert == 'true') 
			{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				<tr align='center'>
					<td colspan='5'>
	  					<span class='g18'></br></br>Спасибо. Информация о телеграмме успешно обновлена!</br></br></br></br></span>
					</td>
				</tr>
				<tr height='10' align='center'>
					<td colspan='5'> </td>
				</tr>
				<tr align='center'>
					<td colspan='30'>
		  				<span class='g18'></br>___________________________________________</br></span>
					</td>
				</tr>
				<tr align='center'>
					<td>
						<form method='post' action='tlg.php'>
							<input type='submit' class='g14' value='Далее'>
						</form></br></br></br>
					</td>
				</tr>
			</table>
			");
			}
			else // Если не добавилась в базу данных
			{
				echo "<span class='r18'>Технический сбой! Проверьте правильность вводимой информации, особенно формат даты.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
			}
		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			    <tr align='center'>
					<td>
							<span class='g18'></br></br>Телеграмма <span class='r18'>НЕ</span> изменена в базе данных!</br></span>
					</td>
				</tr>
				<tr height='10' align='center'>
					<td> </td>
				</tr>
				<tr align='center'>
					<td><span class='r18'></br>Введена не вся информация.</br></span></td>
				</tr>
				<tr height='20' align='center'>
					<td> </td>
				</tr>
				<tr align='center'>
					<td><span class='g18'></br>Пожалуйста, правильно заполните <span class='r18'>ВСЕ</span> поля и повторите попытку.</br></span></td>
				</tr>
				<tr height='40' align='center'>
					<td> </td>
				</tr>
			</table>
			");
		}
	}
	break;



/*	case "Удалить":
	{
		if (isset($id)&&isset($del)&&isset($del2)&&isset($check))
		{//Заносим информацию
			$insert = mysql_query ("DELETE FROM mehanik WHERE id='$id'");
			if ($insert == 'true') 
			{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				<tr align='center'>
					<td colspan='5'>
	  					<span class='g18'></br></br>Механик успешно удалён!</br></br></br></br></span>
					</td>
				</tr>
				<tr height='10' align='center'>
					<td colspan='5'> </td>
				</tr>
				<tr align='center'>
					<td colspan='30'>
		  				<span class='g18'></br>___________________________________________</br></span>
					</td>
				</tr>
				<tr align='center'>
					<td>
						<form method='post' action='mehanik.php'>
							<input type='submit' class='g14' value='Далее'>
						</form></br></br></br>
					</td>
				</tr>
			</table>
			");
			}
			else // Если не добавилась в базу данных
			{
				echo "<span class='r18'>Технический сбой! Возможно такой станции уже существует. Проверьте наличие станции.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
			}
		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			    <tr align='center'>
					<td>
							<span class='g18'></br></br>Механик <span class='r18'>НЕ</span> удалён из базы данных!</br></span>
					</td>
				</tr>
				<tr height='10' align='center'>
					<td> </td>
				</tr>
				<tr align='center'>
					<td><span class='r18'></br>Введена не вся информация.</br></span></td>
				</tr>
				<tr height='20' align='center'>
					<td> </td>
				</tr>
				<tr align='center'>
					<td><span class='g18'></br>Пожалуйста, правильно отметьте <span class='r18'>ВСЕ</span> птички в строке удаляемого механика и повторите попытку.</br></span></td>
				</tr>
				<tr height='40' align='center'>
					<td> </td>
				</tr>
			</table>
			");
		}
	}
	break;
*/
	default:
	{
		include ("left0.php");
	}
	break;
}

	?>
</td>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>