<table border="0" cellpadding="1" cellspacing="0">
	<tr height="35" valign="bottom"><td><a href='index.php' class='p1' title="������� ��������">�������</a></br></td></tr>
	<tr height="35" valign="bottom"><td><a href='sboy.php' class='p1' title="���������� � ����� �� �������� ��">�������� �����</a></br></td></tr>
	<tr><td>. <a href='sboy_svoi.php' class='p1' title="���������� � ����� ������">����</a></br></td></tr>
	<tr><td>. <a href='sboy_add.php' class='p1' title="�������� ����� ����">��������</a></br></td></tr>
	<tr><td>. <a href='sboy_ust.php' class='p1' title="��������� ����� ����������� ����">���������</a></br></td></tr>
	<tr><td>. <a href='sboy_add_ust.php' class='p1' title="�������� ���������� ����">���. ����������</a></br></td></tr>
	<tr><td>. <a href='sboy_redaktirovanie.php' class='p1' title="������������� ������������ ����">�������������</a></br></td></tr>
	<tr height="35" valign="bottom"><td><a href='remont.php' class='p1' title="���������� �� �����������, ����������� � ������� �� ��� ������">������ ��</a></br></td></tr>
	<tr height="45" valign="bottom"><td><a href='tehnika.php' class='p1' title="����������� ���������">����������� ���������</a></br></td></tr>
	<tr height="35" valign="middle"><td><a href='instruktcii.php' class='p1' title="���������� �� ��������� � ��������� �� � ������������">����������</a></br></td></tr>
	<tr height="35"><td><a href='files.php' class='p1' title="�����, ����������� � ������">�����</a></br></td></tr>
	<tr><td>
<?
printf("<table border='0' cellspacing='0' cellpadding='0'>
			<tr align='center' class='k12'>
				<td><b>����� ����������, </b></td>
			</tr>
		    <tr align='center' class='g12'>
			    <td><u>%s</u></td>
			</tr>
			<tr align='center'><td><a href='user_profile.php' class='p1' title='��������� ������� ������������'>�������</a></br></br></td></tr>
			</tr>
			<tr align='center' class='g12'>
				<form action='userlogout.php' method='post' name='logout' id='logout'>
				<td><input name='submit' class='r12' type='submit' id='submit' value='�����'></td>
				</form> 
			</tr>
		</table> <br />	", $_SESSION['adminUser']);
?>
	</td></tr>
</table>