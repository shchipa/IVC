<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");
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
<?
	include ("high.php"); //���������� ����� �����
	include ("left.php"); //���������� ����� �����
?>
<td align="center">
<?
	include ("sboy_tab_neustr_meh.php");
?>
</td>

<?
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>