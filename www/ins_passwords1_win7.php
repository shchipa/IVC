<?php
include ("db.php");//����������� � ����� ������
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>���������� ������� ������ Windows7. ��� �� ���</title>
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
<table width="100%" border="0"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr>
<?php
	include ("left.php"); //���������� ����� �����
?>
<td align="left">
	<p align="center"><b>���������� �� ��������� ����� �������� ������ � Windows 7</b><br><br></p>
<ol type="1">
	<li>����� <b>RAdmin'��</b> � ������ ��������� ������.</li>
	<li>��������� �������, ������� ������ ���� �������� ������ � ������������ <b>"net user [��� ������� ������] /expires:never"</b> (������ ��� ������� ������ User. � ������� ������� "net user" ����� ���������� ������ ������� �������).</li>
   	<li>���� ����� ���������� ������� ������������� ���������, �� ��� �������� ������ ����� ������ ��� ������������, ������� ����� ������ ������ �������� <b>"net user [��� ������� ������] [������]"</b> (�������� "123")</li>
	<li>������������� ���������. ������ � ������� ������ ������������ � ����� ������� � ������� ������.</li>

</p>
<br>
</td>
</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
