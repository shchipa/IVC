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
        	<td align="center" height="50" class="g18">������� �������� �� <br /><span class="g14">�������� ������� "�������" ��� ��������������</span><br /><span class="r14">���������� ��� "������" ��� ��������</span></td>
		</tr>
	</table>
	<div style='background:#eeeeee; width:750px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width="180"><span class='g12'>�������</span></td>
			<td align='center'><span class='g12'>�������� ������ ��� �����</span></td>
			<td align='center'><span class='g12'>�������� ������ ��� �������</span></td>
			<td align='center'><span class='g12'>�������������</span></td>
			<td align='center' width="150"><span class='r12'>�������</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM station ORDER BY gruppa",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<form action='station_insert.php' method='post' name='form45' id='form45'>
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='left'> <input name='check' type='checkbox' value='ch'> <span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'>
							<input name='submit' type='submit' class='b10' id='submit' value='��������-��'>
							<input name='id' type='hidden' value='%s'>
						</td>
						<td align='center'>
							<input name='del' type='checkbox' value='del'>
							<input name='del2' type='checkbox' value='del2'>
							<input name='submit' type='submit' class='r10' id='submit' value='�������'>
							<input name='id' type='hidden' value='%s'>
						</td>
					</tr>
					</form>
				", $rowav['station'], $rowav['gruppa'], $rowav['gruppa_remont'], $rowav['id'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
</td>


<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
