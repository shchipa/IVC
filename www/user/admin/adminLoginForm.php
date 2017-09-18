<html>
<head>
<title>Авторизация Два по сто</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=Windows-1251">
</head>
<link rel="stylesheet" type="text/css" href="../style.css">

<body bgcolor="<?echo $bgcolor?>">

<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">

<table cellspacing="2" cellpadding="2" border="0" width="100%">
<tr>
   <td>
<!-- ячейка шапки страницы -->

   </td>
</tr>
<tr>
   <td valign="top" class="table" width="100%" bgcolor="<?echo $tablecolor?>">
<!-- главная ячейка -->
<br><br><br>
<div align="center">
<blockquote>
<form method="post" name="adminLoginForm" action="adminLogin.php">

	<?php $loginAttempts = !isset($_POST['loginAttempts'])?1:$_POST['loginAttempts'] + 1;?>
	<input type="hidden" name="loginAttempts" value="<?php echo $loginAttempts;?>">

<table border="0" cellpadding="5">
	<tr>
		<th colspan=2><span class='r14'>Только для Администраторов данного сервера</span></th>
	</tr>
	<tr>
		<td colspan=2 height="15"> </td>
	</tr>
	<tr>
		<th colspan=2><span class='g18'>Введите данные:</span></th>
	</tr>
	<tr>
  		<td><span class='g14'>Логин:</span></td>
		<td>
    		<input type="text" name="formuser" value="<?php echo $formuser;?>">
		</td>
	</tr>
	<tr>
		<td><span class='g14'>Пароль:</span></td>
		<td>
			<input type="password" name="formpassword" value="<?php echo $formpassword;?>">
		</td>
	</tr>
	<tr>
		<td colspan=2 align="center">
		<input  class='g14' type="submit" name="submit" value="Вход">
		</td>
	</tr>
</table>

</form>
</blockquote> 
</div> 
<!--END of adminLoginForm.php -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</td>
</tr>
</table>

</body>
</html>