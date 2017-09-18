<?php
include ("db.php");//Соединяемся с базой данных
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>
<?php
//	include ("left.php"); //Подключаем левую часть
?>

<td align="center">
	<table width="100%" border="0"	width="100%"	cellspacing="0"	cellpadding="0">
	<tr align="center">
	    <td class="r16"><br /><br /></br>Необходимо авторизоваться!<br /><br /></br></td>
	</tr>
	<tr>
	    <td>


	<form action='avtorizatciya.php' method='post' name='avtoriz' id='avtoriz'>
	   </br>
	   <table border='0'  align='center'	cellspacing='10'	cellpadding='0'>
	   <tr  class='g18'>
			<td>Выберите Вашу рабочую группу:</td>
			<td width='25'> </td>
			<td>Выберите себя из списка:</td>
			<td width='25'> </td>
		   	<td>Введите Ваш пароль:</td>
	   </tr>
	   <tr>
	   	   	<td>
  				<div>
   				<select name="gruppa" onChange="top.location.href = this.options[this.selectedIndex].value">
					<option selected disabled>Выберите Вашу рабочую группу...</option>
                    <?php
						$result = mysql_query('SELECT gruppa FROM gruppa',$db);
						$myfio = mysql_fetch_array($result);
						do
						{//вывод ФИО механиков
							if (isset($gruppa) && $myfio['gruppa'] == $gruppa)
							{
								printf ("<option value='avtorizatciya.php?gruppa=%s' selected>%s</option>",$gruppa, $gruppa);
							}
							else
							{
								printf ("<option value='avtorizatciya.php?gruppa=%s'>%s",$myfio['gruppa'], $myfio['gruppa']);
							}
						}
							while ($myfio = mysql_fetch_array($result));
   			     	?>
				</select>
                </div>
			</td>
			<td width='35'> </td>
	   	   	<td>
  
   				<select name="formuser">
					<option selected disabled>Выберите Ваше ФИО...</option>
                    <?php
						$result = mysql_query("SELECT mehanik FROM mehanik WHERE gruppa='$gruppa' ORDER BY mehanik",$db);
						$myfio = mysql_fetch_array($result);
						do
						{//вывод ФИО механиков
						printf ("<option>%s</option>",$myfio['mehanik']);
						}
						while ($myfio = mysql_fetch_array($result));
   			     	?>
				</select>
			</td>
			<td width='35'> </td>
		   	<td><input name="formpassword" type="password" size="25" input="input"></td>
	   </tr>
       <tr  class='g18' height="100">
			<td colspan="5" align="center"><input name='submit' type='submit' class='g14' id='submit' value='Авторизоваться'></td>
	   </tr>
	   </table>
	</form> 
	</td>
	</tr>
	<tr  class='g18' height="80">
		<td align="center"><a href="../index.php">Вернуться на главную</a></td>
	</tr>
	</table>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>