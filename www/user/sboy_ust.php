<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");

if ($left[5] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>� 14:00 �� 15:00 ���������� ����������� ������!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>��� �������!!!</p>");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "��� �� ���. ���������� ���� - ".$_SESSION['adminUser']." ";?></title>
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
<td>
	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">������� ������������ �����</td>
		</tr>
	</table> 
 	<table border='1' cellpadding="0" cellspacing="1">
		<tr valign='center'>
			<td align='center' width='20'>&nbsp;</td>
			<td align='center' width='100'><span class='r12'>�������� ������</span></td>
			<td align='center' width='80'><span class='r12'>�������</span></td>
			<td align='center' width='80'><span class='r12'>������</span></td>
			<td align='center' width='70'><span class='r12'>������� �����</span></td>
			<td align='center' width='80'><span class='r12'>����������</span></td>
			<td align='center'><span class='r12'>���� ������ � ����</span></td>
			<td align='center'><span class='r12'>����� ������ </br> � ����</span></td>
			<td align='center'><span class='r12'>����������</span></td>
			<td align='center' width='80'><span class='r12'>���������</span></td>
		</tr>
<?
				$res = mysql_query ("SELECT gruppa FROM mehanik WHERE mehanik = '$_SESSION[adminUser]'",$db);
				$row = mysql_fetch_array($res);
				do
				{
					$gruppa = $row['gruppa'];
				}
				while ($row = mysql_fetch_array($res));
				
if ($gruppa == '��� 5, 10 ����')
{
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
				<form action='sboy_ust_add.php' method='post' name='form6' id='form6'>
					<tr valign='center' align='center' class='k12'>
						<td><input name='check' type='checkbox' value='ch'></td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s</td>
						<td>%s.%s.%s</td>
						<td>%s:%s</td>
						<td>%s ���.� %s</td>
						<td>
							<input name='id' type='hidden' value='%s'> 
							<input name='submit' type='submit' class='b10' id='submit' value='���������'></span>
						</td>
					</tr>
				</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
}
else
{

				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 AND gruppa = '$gruppa' ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
				<form action='sboy_ust_add.php' method='post' name='form6' id='form6'>
					<tr valign='center' align='center'>
						<td><input name='check' type='checkbox' value='ch'></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>:</span></td>
						<td><span class='g12'>%s</span></td>
						<td><span class='g12'>%s ���.� %s</span></td>
						<td>
							<input name='id' type='hidden' value='%s'> 
							<input name='submit' type='submit' class='b10' id='submit' value='���������'></span>
						</td>
					</tr>
				</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));

}

		?>
	</table>
</td>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>