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
<title>����������. ��� �� ���</title>
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
	<table border="0" cellpadding="10" cellspacing="0">
		<tr align="center"><td colspan="4"><span class="g18">� � � � � � � � � �</span></td></tr>
		<tr align="center">
			<td><span class="g16">�����</span></td>
			<td><span class="g16">RWSoft</span></td>
			<td><span class="g16">WinTerm</span></td>
			<td><span class="g16">Windows7</span></td>

		</tr>
		<tr align="center">
			<td><a href='ins_ping.php' class='p1' title="���������� �� ������� Ping">���������� Ping</a></br></td>
			<td><a href='ins_vnutr_osh_ki.php' class='p1' title="���������� �� ���������� ������ ��">���������� ������ ��</a></br></td>
			<td><a href='ins_cnc.php' class='p1' title="���������� �� ������ CNC � WinTerm">������ CNC</a></br></td>
			<td><a href='ins_otkljrwin7.php' class='p1' title="���������� �� ���������� ������� ������ WIN 7">���������� ������� ������ Windows7</a></br></td>
        </tr>
		<tr align="center">
			<td><a href='ins_printer300.php' class='p1' title="��������� ������ ��������� �������� Epson LX-300">��������� Epson LX-300</a></br></td>
			<td><a href='ins_vyravn_konf_ki.php' class='p1' title="���������� �� ������������ ������������ ��">������������ ������������ ��</a></br></td>
			<td><a href='ins_ins_wt.php' class='p1' title="��������� ��������� �������� ����� - WinTerm">��������� WinTerm</a></br></td>
			<td><a href='ins_INFO(EEKK)for_win7_mk.php' class='p1' title="���������� INFO (����) ��� Windows7(��������� ������)">���������� INFO (����) ��� Windows7 <br/>(��������� ������)</a></br></td>
        </tr>
		<tr align="center">
			<td><a href='ins_printer890.php' class='p1' title="��������� ������ ��������� �������� Epson FX-890">��������� Epson FX-890</a></br></td>
			<td><a href='ins_rem_ki.php' class='p1' title="�������� �� ��� RWSoft">�������� �� ��� RWSoft</a></td>
			<td>&nbsp;</td>
			<td><a href='ins_INFO(EEKK)for_win7.php' class='p1' title="���������� INFO (����) ��� Windows7">���������� INFO (����) ��� Windows7<br/></a></br></td>
		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_ins_ki.php' class='p1' title="��������� �� ��� RWSoft">��������� �� ��� RWSoft</a></br></td>
			<td>&nbsp;</td>
<td><a href='ins_INFO(EEKK)_win7.php' class='p1' title="���������� INFO (����) Windows7">���������� INFO (����) Windows7</a></br></td> 

		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_net_razryva_svyazi.php' class='p1' title="���������� �� ���������� ��������� � ������� ����� � ��">��� ������� �����</a></br></td>
			<td>&nbsp;</td>
            <td> <a href='ins_win7_natr_shabl.php' class='p1' title="���������� ������� ��������� � ���">����������_������� ��������� � ���</a></br></td> 

		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_nastroyka_ki.php' class='p1' title="���������� �� ��������� �� ��� RWSoft">��������� �� ��� RWSoft</a></br></td>
			<td>&nbsp;</td>
            <td> <a href='http://10.7.100.100:8080/nastroyka_win7_ARM.pdf' class='p1' title="��������� Windows 7 ��� ����">��������� Windows 7 ��� ����</a></br></td> 
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><a href='ins_ins_ki_win7.php' class='p1' title="��������� �� ��� RWSoft">��������� �� ��� RWSoft <u>��� Windows 7</u></a></br></td>
			<td>&nbsp;</td>
            <td><a href='ins_passwords_win7.php' class='p1' title="���������� �� ��������� ����� �������� ������ � Windows 7">���������� �� ��������� ����� �������� <br/>  ������ � Windows 7</u></a></br></td>
		</tr>
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</br></td>
			<td>&nbsp;</td>
            <td><a href='ins_passwords1_win7.php' class='p1' title="������ ��� ������������ � Windows 7">������ ��� ������������ �  <br/> Windows 7</u></a></br></td>
		</tr>
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</br></td>
			<td>&nbsp;</td>
            <td><a href='ins_koncentrator_win7.php' class='p1' title="��������� � ������ ������������� RWSoft ������ 2.56 � 2.57 ��� Windows 7">��������� � ������ ������������� RWSoft<br> ������ 2.56 � 2.57 ��� Windows 7</u></a></br></td>
		</tr>

	</table>
    </br>
</td>
</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
