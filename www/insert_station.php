<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['station']))	{$station=$_POST['station'];	if ($station=='')	{unset($station);}}
if (isset($_POST['gruppa']))	{$gruppa=$_POST['gruppa'];		if ($gruppa=='')	{unset($gruppa);}}

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

if (isset($gruppa)&&isset($station))
{//Заносим информацию
	$insert = mysql_query ("INSERT INTO station (gruppa, station) VALUES ('$gruppa', '$station')");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>Спасибо. Станция успешно добавлена в базу данных!</br></br></br></br></span>
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
							<form method='post' action='add_station.php'>
								<input type='submit' class='g14' title='Добавить ещё одного механика' value='Добавить ещё станцию'>
								<input name='fio' type='hidden' value='$fio'> 
							</form></br></br></br>
						</td>
					</tr>
				</table>
			", $fio);
	}
	else // Если не добавилась в базу данных
	{
		echo "<span class='r18'>Технический сбой! Возможно такая станция уже существует. Проверьте наличие вводимой станции.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
	}
}
else
{//Если введена НЕ вся информация
	printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
		    <tr align='center'>
				<td>
 					<span class='g18'></br></br>Ваша станция <span class='r18'>НЕ</span> добавлена в базу данных!</br></span>
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

	?>
</td>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
