<?php
include ("db.php");//����������� � ����� ������

if (isset($_POST['station']))	{$station=$_POST['station'];	if ($station=='')	{unset($station);}}
if (isset($_POST['gruppa']))	{$gruppa=$_POST['gruppa'];		if ($gruppa=='')	{unset($gruppa);}}

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
	<?php 

if (isset($gruppa)&&isset($station))
{//������� ����������
	$insert = mysql_query ("INSERT INTO station (gruppa, station) VALUES ('$gruppa', '$station')");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>�������. ������� ������� ��������� � ���� ������!</br></br></br></br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td colspan='5'> </td>
					</tr>

					<tr align='center'>
						<td colspan='30'>
			  				<span class='g18'></br>___________________________________________</br></span>
						</td>
					</tr>

					<tr align='center'>
						<td colspan='5'>
		  					<span class='g14'></br>��� ����������� ������ �������� �����:</br></span>
						</td>
					</tr>

					<tr height='40' align='center'>
						<td> </td>
					</tr>
				    
					<tr align='center'>
						<td>
							<form method='post' action='add_station.php'>
								<input type='submit' class='g14' title='�������� ��� ������ ��������' value='�������� ��� �������'>
								<input name='fio' type='hidden' value='$fio'> 
							</form></br></br></br>
						</td>
					</tr>
				</table>
			", $fio);
	}
	else // ���� �� ���������� � ���� ������
	{
		echo "<span class='r18'>����������� ����! �������� ����� ������� ��� ����������. ��������� ������� �������� �������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
	}
}
else
{//���� ������� �� ��� ����������
	printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
		    <tr align='center'>
				<td>
 					<span class='g18'></br></br>���� ������� <span class='r18'>��</span> ��������� � ���� ������!</br></span>
				</td>
			</tr>
			<tr height='10' align='center'>
				<td> </td>
			</tr>
			<tr align='center'>
				<td>
			  		<span class='r18'></br>������� �� ��� ����������.</br></span>
				</td>
			</tr>
			<tr height='20' align='center'>
				<td> </td>
			</tr>
			<tr align='center'>
				<td>
			  		<span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ���� � ��������� �������.</br></span>
				</td>
			</tr>
			<tr height='40' align='center'>
				<td> </td>
			</tr>
			</table>
			");
}

	?>
</td>


<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
