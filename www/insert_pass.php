<?php
include ("db.php");//Соединяемся с базой данных
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Добавление сбоя ".$ustroystvo." по станции ".$station." ".$fio." ";?></title>
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
if (isset($_POST['fio']))	{$fio=$_POST['fio'];		if ($fio=='')	{unset($fio);}}
if (isset($_POST['parol']))	{$parol=$_POST['parol'];	if ($parol=='')	{unset($parol);}}

if (isset($fio)&&isset($parol))
{//Обновляем пароль
	$update = mysql_query ("UPDATE mehanik SET pass='$parol' WHERE fio='$fio'");
	if ($update == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>%s, Ваш пароль изменён успешно!</br></br></br></br></span>
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
					<tr height='40' align='center'>
						<td colspan='5'> </td>
					</tr>
					<tr align='center'>
						<td>
							<form method='post' action='mehanik.php'>
								<input type='submit' class='g14' title='Продолжить работу' value='Продолжить работу'>
								<input name='fio' type='hidden' value='$fio'> 
							</form></br></br></br>
						</td>
					</tr>
				</table>
				", $fio);
	}
	else // Если не добавилась в базу данных
	{
		echo "<span class='r18'>Технический сбой! Вид пароль!!!</span><span class='g18'></br></br>Возможно такой пароль уже существует, попробуйте указать более сложный пароль. Если указанные меры не помогут, пожалуйста сообщите о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
	}
}
else
{
	if (isset($fio))
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
							<form method='post' action='re_pass.php'>
		    				    <input name='parol' type='password' size='25' input='input'>
					        	<input name='pass' type='password' size='25' input='input'>
		    				    <input name='pass2' type='password' size='25' input='input'>
				            	<input type='submit' class='g14' title='Изменить пароль' value='Изменить'>
								<input name='fio' type='hidden' value='$fio'> 
							</form>

	}
}











{//Если введена НЕ вся информация
	printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			    <tr align='center'>
					<td>
	  					<span class='g18'></br></br>Ваш пароль <span class='r18'>НЕ</span> изменён!</br></span>
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
			include ("bottom.php"); 
?>
</table>

</body>
</html>
