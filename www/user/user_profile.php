<?php
include ("avtorizatciya_admin.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��� �� ���</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr  style="height:100%">

<?php
	include ("left.php"); //���������� ����� �����
?>
<td align="center" valign="top">

<br /><br /><br />




<span class="g18"><u>������� ������</u>
<br /><br />
________________________________________
<br /></span><br />
<?
if (isset($_POST['parol']))	{$parol=$_POST['parol'];	if ($parol=='')	{unset($parol);}}
if (isset($_POST['pass']))	{$pass=$_POST['pass'];		if ($pass=='')	{unset($pass);}}
if (isset($_POST['pass2']))	{$pass2=$_POST['pass2'];	if ($pass2=='')	{unset($pass2);}}
if (isset($_POST['norma']))	{$norma=$_POST['norma'];	if ($norma=='')	{unset($norma);}}

if (isset($_SESSION['adminUser'])&&$norma != 1)
{
					printf ("<table border='0'	cellspacing='15'	cellpadding='0'>
					<form method='post' action='user_profile.php'>
						<tr>
							<td align='right'>
			  					<span class='g18'>������ ������:</span>
							</td>
							<td align='left'>
								<input name='parol' type='password' size='25' input='input'>
							</td>
						</tr>
						<tr>
							<td align='right'>
								<span class='g18'>����� ������:</span>
							</td>
							<td align='left'>
								<input name='pass' type='password' size='25' input='input'>
							</td>
						</tr>
						<tr>
							<td align='right'>
				  				<span class='g18'>��������� ������:</span>
							</td>
							<td align='left'>
								<input name='pass2' type='password' size='25' input='input'>
							</td>
						</tr>
						<tr align='center' height='50'>
							<td colspan='2'>
								<input type='submit' class='r14' title='������� ������ ��� ����� ������� ������' value='������� ������'>
								<input name='norma' type='hidden' value='1'> 
							</td>
						</tr>
					</form>
				</table>
				", $_SESSION['adminUser'], $_SESSION['adminUser']);	
}
else
{
	if($norma == 1 &&isset($_SESSION['adminUser'])&&isset($parol)&&isset($pass)&&isset($pass2))
	{//���� ��������� ��� ����
		$res = mysql_query ("SELECT pass FROM mehanik WHERE mehanik='$_SESSION[adminUser]'",$db);
		$mypass = mysql_fetch_array($res);
		$parol2 = $mypass['pass'];
		
		if(($norma == 1) &&isset($_SESSION['adminUser']) && ($parol == $parol2) && ($pass == $pass2))
		{//���� ���������
				$update = mysql_query ("UPDATE mehanik SET pass='$pass' WHERE mehanik='$_SESSION[adminUser]'");
				if ($update == 'true') 
				{
					printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>%s, ��� ������ ������ �������!</br></br></br></br></span>
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
					<tr height='40' align='center'>
						<td colspan='5'> </td>
					</tr>
					<tr align='center'>
						<td>
							<form method='post' action='index.php'>
								<input type='submit' class='g14' title='���������� ������' value='���������� ������'>
								<input name='fio' type='hidden' value='$fio'> 
								<input name='parol' type='hidden' value='$pass'> 
							</form></br></br></br>
						</td>
					</tr>
				</table>
				", $_SESSION['adminUser']);
				}
				else // ���� �� ���������� � ���� ������
				{
					echo "<span class='r18'>����������� ����! ��� ������!!!</span><span class='g18'></br></br>�������� ����� ������ ��� ����������, ���������� ������� ����� ������� ������. ���� ��������� ���� �� �������, ���������� �������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
				}

		}
		else
		{//�� ��������� 
			echo "<span class='r18'></br>�� �� ��������� ����� ������. ��������� �������.</span>";
		}
	}
	else
	{//���� ������� �� ��� ����
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
			    <tr align='center'>
					<td>
	  					<span class='g18'></br></br>��� ������ <span class='r18'>��</span> ������!</br></span>
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
?>










</td>
</tr>
<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>
