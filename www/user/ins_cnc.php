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
<title>���������� �� ���������� ������ CNC � WinTerm. ��� �� ���</title>
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
	<p align="center"><b>������ ��� ������������� CNC ����������</b><br><br></p>
<b>���� WinTerm ����� ���� ������� ��� ������������� CNC ���������� �������� ����� ���� ������� ��������:</b><br>
<ol type="1">
	<li><b><u>�� ������� ������������.</u></b> ���������� ��������� ������������ (����� �� ������� ����� Concentr 2.XX Client License), � ����� � ������ ������� ��� ������������� CNC ���������� ������ ���;</li><br>
	<li><b><u>�������� ����� ����� ����� WinTerm.</u></b> ���������� ������� ��� ����� WinTerm � ������ ��������� WinTerm, �� ������ ���� ���;</li><br>
	<li><b><u>� ������������ WinTerm �� ������� ��������.</u></b> ����������:</li>
    <ol type="a">
		<li type="disc">� ���� ������� ��� ������������� CNC ���������� ������ ����;</li>
		<li type="disc">����� � ���� ���������� \ �������������� � ������ ������ ������ ��������� �� ������������;</li>
		<li type="disc">� ����������� ���� ����������� ����������� ���������� (������ ��� ���� ���� ��������� � ��������� ����� (11 4801 9)00 ) � ������ ������ �������� ��� WinTerm�.</li>
    </ol>
</ol>
<p align="center">
<img src="img/2.jpg">
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
