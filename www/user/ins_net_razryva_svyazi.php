<?php
include ("db.php");//����������� � ����� ������

$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>���������� �� ���������� ��������� � ������� ����� � ��. ��� �� ���</title>
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
	<p align="center"><b>��� ������� �����</b><br><br></p>
��� ���� ����� �� ������� ������ �� ���������� �� <b>������� ����Ȼ</b> ���������� ������ � ������� �� ��� ���������.
<br><br>
��� ����� ���������� ������� ���������:<br>
<ol type="1">
	<li>��������� ������������ �� <b>(���� > ��������� > RWSoft > Concentr Setup)</b>;</li>
	<li>������� �� ������� <b>������</b>;</li>
	<li>����� � ��������� ������ <b>00(00)</b>;</li>
	<li>� ����������� ���� <b>��������� CANNEL �� ������ 00</b> �������� �������� <b>�������� �� ���������� ������</b>;</li>
	<li>����������  ������ <b>&#8744;</b> �� �������� <b>�� �������� �� ������� ������</b>;</li>
	<li>���������� ��������� ����� <b>01(00)</b>;</li>
	<li>� ����������� ���� <b>��������� CANNEL �� ������ 01</b> �������� �������� <b>�������� �� ���������� ������</b>;</li>
	<li>����������  ������ <b>&#8744;</b> �� �������� <b>�� �������� �� ������� ������</b>;</li>
	<li>��������� ���������.</li>
</ol>
<br>
<br>
</td>
</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
