<?php
include ("db.php");//����������� � ����� ������

if (isset($_POST['fio']))			{$fio=$_POST['fio'];				if ($fio=='')								{unset($fio);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='')							{unset($gruppa);}}
if (isset($_POST['parol']))			{$parol=$_POST['parol'];			if ($parol=='')								{unset($parol);}}
if (isset($_POST['user']))			{$user=$_POST['user'];				if ($user=='')								{unset($user);}}

if (isset($_POST['submit']))		{$submit=$_POST['submit'];					if ($submit=='')		{unset($submit);}}

if (isset($_POST['id']))		{$id=$_POST['id'];				if ($id=='')		{unset($id);}}
if (isset($_POST['check']))		{$check=$_POST['check'];		if ($check=='')		{unset($check);}}
if (isset($_POST['del']))		{$del=$_POST['del'];			if ($del=='')		{unset($del);}}
if (isset($_POST['del2']))		{$del2=$_POST['del2'];			if ($del2=='')		{unset($del2);}}
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
	case "�������� ��������":
	{
		if (isset($gruppa)&&isset($fio)&&isset($parol)&&isset($user))
		{//������� ����������
			$insert = mysql_query ("INSERT INTO mehanik (gruppa, mehanik, pass, user) VALUES ('$gruppa', '$fio', '$parol', '$user')");
			if ($insert == 'true') 
			{
				printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							<tr align='center'>
								<td colspan='5'>
	  								<span class='g18'></br></br>�������. ������� ������� �������� � ���� ������!</br></br></br></br></span>
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
									<form method='post' action='mehanik_add.php'>
										<input type='submit' class='g14' title='�������� ��� ������ ��������' value='�������� ��� ��������'>
										<input name='fio' type='hidden' value='$fio'> 
									</form></br></br></br>
								</td>
							</tr>
						</table>
				", $fio);
			}
			else // ���� �� ���������� � ���� ������
			{
				echo "<span class='r18'>����������� ����! �������� ����� ������ ��� ����������. ���������� ������������������ � ������, ����� �������, �������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
			}
		}
		else
		{//���� ������� �� ��� ����������
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				    <tr align='center'>
						<td>
 							<span class='g18'></br></br>������� <span class='r18'>��</span> �������� � ���� ������!</br></span>
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
	}
	break;


	case "��������-��":
	{
		if (isset($check)&&isset($id))
		{
			include ("mehanik_redaktirovanie.php");
		}
		else
		{
			echo "<span class='r18'>�������������� ����������. ���������� ��������� \"������\" �������� ��������, ���������� � ������� ���������� ��������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
		}
	}
	break;

	case "�������������":
	{
		if (isset($id)&&isset($mehanik)&&isset($gruppa)&&isset($user))
		{//������� ����������
			$insert = mysql_query ("UPDATE mehanik SET mehanik = '$mehanik', gruppa = '$gruppa', user = '$user' WHERE id='$id'");
			if ($insert == 'true') 
			{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				<tr align='center'>
					<td colspan='5'>
	  					<span class='g18'></br></br>�������. ���������� � �������� ������� ���������!</br></br></br></br></span>
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
						<form method='post' action='mehanik.php'>
							<input type='submit' class='g14' value='�����'>
						</form></br></br></br>
					</td>
				</tr>
			</table>
			");
			}
			else // ���� �� ���������� � ���� ������
			{
				echo "<span class='r18'>����������� ����! �������� ������� �  ������ ��� ��� ����������. ��������� ������� �������� ���������� � ��������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
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
			$insert = mysql_query ("DELETE FROM mehanik WHERE id='$id'");
			if ($insert == 'true') 
			{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				<tr align='center'>
					<td colspan='5'>
	  					<span class='g18'></br></br>������� ������� �����!</br></br></br></br></span>
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
						<form method='post' action='mehanik.php'>
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
							<span class='g18'></br></br>������� <span class='r18'>��</span> ����� �� ���� ������!</br></span>
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
					<td><span class='g18'></br>����������, ��������� �������� <span class='r18'>���</span> ������ � ������ ���������� �������� � ��������� �������.</br></span></td>
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