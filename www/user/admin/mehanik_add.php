<?php
require_once("adminOnly.php");
include ("db.php");//����������� � ����� ������
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��� �� ���</title>
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
	include ("high.php"); //���������� ����� �����
?>

<?php
	include ("left.php"); //���������� ����� �����
?>

<td align="center">
	<form action='mehanik_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>������� ������:</span></td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������� ������:</span>
		</td>
		<td align="left">
   				<select name="gruppa">
				<option selected disabled>�������� ���. ������...</option>
				<?php
					$result = mysql_query("SELECT gruppa FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['gruppa']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>������� ������� �.�.:</span>
		</td>
		<td align="left">
			<input name='fio' type='text' value='' size='20' maxlength='50'>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span class='g14'>������� ������:</span>
		</td>
		<td align="left">
			<input name="parol" type="password" size="25" input="input">
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span class='g14'>������:</span>
		</td>
		<td align="left">
			<input name="user" type="text" size="5" input="input">
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='�������� ��������'></br></br>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td width="150" align="center"><span  class='g12'>"������"</span></td>
							<td width="50" align="center"><span  class='g12'>����</span></td>
							<td width="50" align="center"><span  class='g12'>������ ��</span></td>
							<td width="50" align="center"><span  class='g12'>���. ���������</span></td>
						</tr>
					   	<tr>
							<td width="250" align="left">3 - ������� �������</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">7 - ������� � �������� � ������� ��</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">9 - ������� � �������� ������ � ������� ��</td>
							<td align="center">-</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">11 - ������� � �������� � ���. ���������</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">13 - ������� � �������� ������ � ���. ���������</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">15 - ������ ������</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">21 - �����</td>
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
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
