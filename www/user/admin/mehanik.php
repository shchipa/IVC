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


	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">�������� ������ ����� ��� �������� �� <br /> � ������� ������� � ���� <br /><span class="g14">�������� ������� "�������" ��� ��������������</span><br /><span class="r14">���������� ��� "������" ��� ��������</span></td>
		</tr>
	</table>
	<div style='background:#eeeeee; width:610px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center'><span class='g12'>�������</span></td>
			<td align='center'><span class='g12'>�������� ������</span></td>
			<td align='center'><span class='g12'>������� ������� � ����</span></td>
			<td align='center'><span class='g12'>�������������</span></td>
			<td align='center'><span class='r12'>�������</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM mehanik ORDER BY gruppa, mehanik",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<form action='mehanik_insert.php' method='post' name='form46' id='form46'>
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='left'> <input name='check' type='checkbox' value='ch'> <span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='b10' id='submit' value='��������-��'>
						</td>
						<td align='center'>
							<input name='del' type='checkbox' value='del'>
							<input name='del2' type='checkbox' value='del2'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='r10' id='submit' value='�������'>
						</td>
					</tr>
					</form>
				", $rowav['mehanik'], $rowav['gruppa'], $rowav['user'], $rowav['id'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
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

	</div>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td align="center"><span  class='g12'>����</span></td>
							<td align="center"><span  class='g12'>������ ��</span></td>
							<td align="center"><span  class='g12'>����������</span></td>
							<td align="center"><span  class='g12'>���. ���������</span></td>
							<td align="center"><span  class='g12'>����������</span></td>
							<td align="center"><span  class='g12'>��������������</span></td>
						</tr>
					   	<tr>
							<td align="center">2<sup>5</sup></td>
							<td align="center">2<sup>4</sup></td>
							<td align="center">2<sup>3</sup></td>
							<td align="center">2<sup>2</sup></td>
							<td align="center">2<sup>1</sup></td>
							<td align="center">2<sup>0</sup></td>
						</tr>
					   	<tr>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
							<td align="center">1</td>
						</tr>
					   	<tr>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
							<td align="center">0</td>
						</tr>
				</table>
</td>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>