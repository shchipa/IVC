<?php
include ("db.php");//����������� � ����� ������

if (isset($_POST['station']))		{$station=$_POST['station'];				if ($station=='')		{unset($station);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];					if ($gruppa=='')		{unset($gruppa);}}
if (isset($_POST['gruppa_remont']))	{$gruppa_remont=$_POST['gruppa_remont'];	if ($gruppa_remont=='')	{unset($gruppa_remont);}}

if (isset($_POST['submit']))		{$submit=$_POST['submit'];					if ($submit=='')		{unset($submit);}}

if (isset($_POST['id']))		{$id=$_POST['id'];				if ($id=='')		{unset($id);}}
if (isset($_POST['check']))		{$check=$_POST['check'];		if ($check=='')		{unset($check);}}
if (isset($_POST['del']))		{$del=$_POST['del'];			if ($del=='')		{unset($del);}}
if (isset($_POST['del2']))		{$del2=$_POST['del2'];			if ($del2=='')		{unset($del2);}}
//if (isset($_POST['submit1']))	{$submit1=$_POST['submit1'];	if ($submit1=='')	{unset($submit1);}}
//if (isset($_POST['submit2']))	{$submit2=$_POST['submit2'];	if ($submit2=='')	{unset($submit2);}}
/*
echo "station".$station."<br />";
echo "gruppa".$gruppa."<br />";
echo "gruppa_remont".$gruppa_remont."<br /><br />";

echo "submit".$submit."<br /><br />";

echo "id".$id."<br />";
echo "check".$check."<br />";
echo "del".$del."<br />";
echo "del2".$del2."<br />";
//echo "submit1".$submit1."<br />";
//echo "submit2".$submit2."<br />";
*/
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

	switch ($submit)
	{
		case "�������� �������":
		{
			if (isset($gruppa)&&isset($gruppa_remont)&&isset($station))
			{//������� ����������
				$insert = mysql_query ("INSERT INTO station (gruppa, gruppa_remont, station) VALUES ('$gruppa', '$gruppa_remont', '$station')");
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
						<td>
							<form method='post' action='station.php'>
								<input type='submit' class='g14' value='�����'>
							</form></br></br></br>
						</td>
					</tr>
				</table>
				");
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
						<td><span class='r18'></br>������� �� ��� ����������.</br></span></td>
					</tr>
					<tr height='20' align='center'>
						<td> </td>
					</tr>
					<tr align='center'>
						<td><span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ���� � ��������� �������.</br></span></td>
					</tr>
					<tr height='40' align='center'>
						<td> </td>
					</tr>
				</table>
				");
			}
		}
		break;



		case "��������-��":
		{
			if (isset($check)&&isset($id))
			{
				include ("station_redaktirovanie.php");
			}
			else
			{
				echo "<span class='r18'>�������������� ����������. ���������� ��������� \"������\" �������� �������, ������� ���������� ��������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
			}
		}
		break;

		case "�������������":
		{
			if (isset($id)&&isset($gruppa)&&isset($gruppa_remont)&&isset($station))
			{//������� ����������
				$insert = mysql_query ("UPDATE station SET gruppa = '$gruppa', gruppa_remont = '$gruppa_remont', station = '$station' WHERE id='$id'");
				if ($insert == 'true') 
				{
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>�������. ���������� � ������� ������� ���������!</br></br></br></br></span>
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
						<td>
							<form method='post' action='station.php'>
								<input type='submit' class='g14' value='�����'>
							</form></br></br></br>
						</td>
					</tr>
				</table>
				");
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
 							<span class='g18'></br></br>���� ������� <span class='r18'>��</span> �������� � ���� ������!</br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td> </td>
					</tr>
					<tr align='center'>
						<td><span class='r18'></br>������� �� ��� ����������.</br></span></td>
					</tr>
					<tr height='20' align='center'>
						<td> </td>
					</tr>
					<tr align='center'>
						<td><span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ���� � ��������� �������.</br></span></td>
					</tr>
					<tr height='40' align='center'>
						<td> </td>
					</tr>
				</table>
				");
			}
		}
		break;



		case "�������":
		{
			if (isset($id)&&isset($del)&&isset($del2)&&isset($check))
			{//������� ����������
				$insert = mysql_query ("DELETE FROM station WHERE id='$id'");
				if ($insert == 'true') 
				{
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>������� ������� �������!</br></br></br></br></span>
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
						<td>
							<form method='post' action='station.php'>
								<input type='submit' class='g14' value='�����'>
							</form></br></br></br>
						</td>
					</tr>
				</table>
				");
				}
				else // ���� �� ���������� � ���� ������
				{
					echo "<span class='r18'>����������� ����! �������� ����� ������� ��� ����������. ��������� ������� �������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
				}
			}
			else
			{//���� ������� �� ��� ����������
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				    <tr align='center'>
						<td>
 							<span class='g18'></br></br>���� ������� <span class='r18'>��</span> ������� �� ���� ������!</br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td> </td>
					</tr>
					<tr align='center'>
						<td><span class='r18'></br>������� �� ��� ����������.</br></span></td>
					</tr>
					<tr height='20' align='center'>
						<td> </td>
					</tr>
					<tr align='center'>
						<td><span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ���� � ��������� �������.</br></span></td>
					</tr>
					<tr height='40' align='center'>
						<td> </td>
					</tr>
				</table>
				");
			}
		}
		break;

		default:
		{
			include ("left0.php");
		}
		break;
	}

	?>
</td>


<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
