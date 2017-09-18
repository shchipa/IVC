<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['fio']))			{$fio=$_POST['fio'];				if ($fio=='')								{unset($fio);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='')							{unset($gruppa);}}
if (isset($_POST['parol']))			{$parol=$_POST['parol'];			if ($parol=='')								{unset($parol);}}
if (isset($_POST['user']))			{$user=$_POST['user'];				if ($user=='')								{unset($user);}}

if (isset($_POST['submit']))		{$submit=$_POST['submit'];					if ($submit=='')		{unset($submit);}}

if (isset($_POST['id']))		{$id=$_POST['id'];				if ($id=='')		{unset($id);}}
if (isset($_POST['check']))		{$check=$_POST['check'];		if ($check=='')		{unset($check);}}
if (isset($_POST['del']))		{$del=$_POST['del'];			if ($del=='')		{unset($del);}}
if (isset($_POST['del2']))		{$del2=$_POST['del2'];			if ($del2=='')		{unset($del2);}}
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
	case "Добавить механика":
	{
		if (isset($gruppa)&&isset($fio)&&isset($parol)&&isset($user))
		{//Заносим информацию
			$insert = mysql_query ("INSERT INTO mehanik (gruppa, mehanik, pass, user) VALUES ('$gruppa', '$fio', '$parol', '$user')");
			if ($insert == 'true') 
			{
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							<tr align='center'>
								<td colspan='5'>
	  								<span class='g18'></br></br>Спасибо. Механик успешно добавлен в базу данных!</br></br></br></br></span>
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
									<form method='post' action='mehanik_add.php'>
										<input type='submit' class='g14' title='Добавить ещё одного механика' value='Добавить ещё механика'>
										<input name='fio' type='hidden' value='$fio'> 
									</form></br></br></br>
								</td>
							</tr>
						</table>
				", $fio);
			}
			else // Если не добавилась в базу данных
			{
				echo "<span class='r18'>Технический сбой! Возможно такой пароль уже существует. Попробуйте зарегистрироваться с другим, более сложным, паролем.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
			}
		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				    <tr align='center'>
						<td>
 							<span class='g18'></br></br>Механик <span class='r18'>НЕ</span> добавлен в базу данных!</br></span>
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
			include ("mehanik_redaktirovanie.php");
		}
		else
		{
			echo "<span class='r18'>Редактирование невозможно. Необходимо поставить \"птичку\" напротив механика, информацию о котором необходимо изменить.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
		}
	}
	break;

	case "Редактировать":
	{
		if (isset($id)&&isset($mehanik)&&isset($gruppa)&&isset($user))
		{//Заносим информацию
			$insert = mysql_query ("UPDATE mehanik SET mehanik = '$mehanik', gruppa = '$gruppa', user = '$user' WHERE id='$id'");
			if ($insert == 'true') 
			{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				<tr align='center'>
					<td colspan='5'>
	  					<span class='g18'></br></br>Спасибо. Информация о механике успешно обновлена!</br></br></br></br></span>
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
				echo "<span class='r18'>Технический сбой! Возможно механик с  такими ФИО уже существует. Проверьте наличие вводимой информации о механике.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
			}
		}
		else
		{//Если введена НЕ вся информация
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			    <tr align='center'>
					<td>
							<span class='g18'></br></br>Ваша станция <span class='r18'>НЕ</span> изменена в базе данных!</br></span>
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



	case "Удалить":
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