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
<title>���������� �� ������� Ping. ��� �� ���</title>
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


<td align="center">
	<b>����������� ������� <u>PING</u></b><br><br>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td><span class="k12"><strong>��������</strong></span></td>
			<td><span class="k12"><strong>����������</strong></span></td>
			<td><span class="k12"><strong>����������</strong></span></td>
			<td><span class="k12"><strong>������</strong></span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-t</b></span></td>
			<td><span class="k12">�������� ������� �� ���������  ���� �� ������� ����������</span></td>
			<td><span class="k12">��� ������ ���������� � ����������� ������� &lt;Ctrl&gt;+&lt;Break&gt;,<br> ��� ����������� - &lt;Ctrl&gt;+&lt;C&gt;</span></td>
			<td><span class="k12">ping 10.7.100.1 -t</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-a</b></span></td>
			<td><span class="k12">����������� ������� �� ������ �����</span></td>
			<td><span class="k12">&nbsp;</span></td>
			<td><span class="k12">&nbsp;</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-n �����</b></span></td>
			<td><span class="k12">������ ������ ��������</span></td>
			<td><span class="k12">�� ��������� n = 4</span></td>
			<td><span class="k12">ping 10.7.100.1 �n 50</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-l ������</b></span></td>
			<td><span class="k12">����� ������������ ��������</span></td>
			<td><span class="k12">�� ��������� l = 32 ����</span></td>
			<td><span class="k12">ping 10.7.100.1 �l 200</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-f</b></span></td>
			<td><span class="k12">��������� �����, ������������ ������������ ������</span></td>
			<td><span class="k12">&nbsp;</span></td>
			<td><span class="k12">ping 10.7.100.1 �f</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-i TTL</b></span></td>
			<td><span class="k12">������� ����� ����� ������ (���� "Time To Live")</span></td>
			<td><span class="k12">�� ��������� TTL=128, max=255</span></td>
			<td><span class="k12">ping 10.7.100.1 �i 255</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-r �����</b></span></td>
			<td><span class="k12">������ �������� ��� ���������� ����� ���������</span></td>
			<td><span class="k12">������� ������� tracert, �� ����� ������������.<br>max   r = 9</span></td>
			<td><span class="k12">ping 10.7.100.1 �r 9</span></td>
		</tr>
		<tr>
			<td><span class="k12"><b>-w �������</b></span></td>
			<td><span class="k12">������� ������� ������ � �������������</span></td>
			<td><span class="k12">w ����������� � �������������<br>w 10000 = 10 ���</span></td>
			<td><span class="k12">ping 10.7.100.1 �w 10000</span></td>
		</tr>
	</table>
    </br>
	<span class="k12">����� ������������ ������������ ��������� ����������.<br>	��������: <strong>Ping 10.7.100.1 �t �w 20000</strong>
    <br><br>��� ������ ������� ������������ �������	<strong>ping /?</strong></span>
</td>
</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
