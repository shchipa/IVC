<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>���� ������� �����. ��� �� ���</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>
</head>
<body>
<table width="100%" border="0"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr>
<?php
	include ("left.php"); //���������� ����� �����
?>
<td align="center">
	<?php
//		include ("remont_tabl.php");
		include ("remont_tabl_akt.php");
	?>
    </br>
</td>
</tr>
<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>
</body>
</html>