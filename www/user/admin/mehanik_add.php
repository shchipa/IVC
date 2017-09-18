<?php
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных
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
	<form action='mehanik_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>Введите данные:</span></td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Линейная группа:</span>
		</td>
		<td align="left">
   				<select name="gruppa">
				<option selected disabled>Выберите лин. группу...</option>
				<?php
					$result = mysql_query("SELECT gruppa FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//вывод Названий линейных групп
						printf ("<option>%s</option>",$mystat['gruppa']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>Введите Фамилию И.О.:</span>
		</td>
		<td align="left">
			<input name='fio' type='text' value='' size='20' maxlength='50'>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span class='g14'>Введите пароль:</span>
		</td>
		<td align="left">
			<input name="parol" type="password" size="25" input="input">
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span class='g14'>Доступ:</span>
		</td>
		<td align="left">
			<input name="user" type="text" size="5" input="input">
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='Добавить механика'></br></br>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td width="150" align="center"><span  class='g12'>"Доступ"</span></td>
							<td width="50" align="center"><span  class='g12'>Сбои</span></td>
							<td width="50" align="center"><span  class='g12'>Ремонт ВТ</span></td>
							<td width="50" align="center"><span  class='g12'>Инв. Ведомость</span></td>
						</tr>
					   	<tr>
							<td width="250" align="left">3 - обычный механик</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">7 - механик с доступом к Ремонту ВТ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">9 - механик с доступом только к Ремонту ВТ</td>
							<td align="center">-</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">11 - механик с доступом к Инв. Ведомости</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">13 - механик с доступом только к Инв. Ведомости</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">15 - полный доступ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">21 - админ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
				</table>
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
