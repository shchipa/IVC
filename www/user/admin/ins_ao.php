<td align="center">
<?
	$data = date("Y-m-j H:i:s");
	$insert = mysql_query ("INSERT INTO avtootvet (ao, ip, ki, station, rabmesto, vidki, fio, data) VALUES ('$ao', '$ip', '$ki', '$station', '$rabmesto', '$vidki', '$fio', '$data')");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>�������. ��������� ������� �������� � ���� ������!</br></br></br></br></span>
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
							<form method='post' action='add_ao.php'>
								<input type='submit' class='g14' title='�������� ��� ���� ���������' value='�������� ��� ���������'>
<!--								<input name='fio' type='hidden' value='$fio'> -->
							</form></br></br></br>
						</td>
					</tr>
				</table>
			", $fio);
	}
	else // ���� �� ���������� � ���� ������
	{
		echo "<span class='r18'>����������� ����! �������� �� ����� �� ��� ���������� ��� ����� ��������� ��� ����������. ��������� ���������� ���� ����� � ����������� � ������� ��������� ����������.</span><span class='g18'></br></br>���� ��� �� ������� - �������� ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
	}
?>
</td>