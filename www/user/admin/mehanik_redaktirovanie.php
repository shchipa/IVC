<?php
	$res = mysql_query("SELECT * FROM mehanik WHERE id='$id'",$db);
	$myst = mysql_fetch_array($res);
	do
	{
		$mehanik=$myst['mehanik'];
		$gruppa=$myst['gruppa'];
		$user=$myst['user'];
	}
	while ($myst = mysql_fetch_array($res));

?>
<form action='mehanik_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>������� / �������� ������:</span></td>
	</tr>
   	<tr>
		<td align="right" width="50%">
			<span  class='g14'>������� �.�.:</span>
		</td>
		<td align="left">
			<input name='mehanik' type='text' value='<? echo $mehanik; ?>' size='14' maxlength='50'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������� ������:</span>
		</td>
		<td align="left">
   				<select name="gruppa">
				<option><? echo $gruppa; ?></option>
				<?php
					$result = mysql_query("SELECT gruppa FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['gruppa']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>������:</span>
		</td>

		<td align="left">
			<input name='user' type='text' value='<? echo $user; ?>' size='5' maxlength='2'>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='�������������'></br></br>
				<input name='id' type='hidden' value='<? echo $id; ?>'>
		</td>
	</tr>
	</table>
</form>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td width="150" align="center"><span  class='g12'>"������"</span></td>
							<td width="50" align="center"><span  class='g12'>����</span></td>
							<td width="50" align="center"><span  class='g12'>������ ��</span></td>
							<td width="50" align="center"><span  class='g12'>���. ���������</span></td>
						</tr>
					   	<tr>
							<td width="250" align="left">3 - ������� �������</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">7 - ������� � �������� � ������� ��</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">9 - ������� � �������� ������ � ������� ��</td>
							<td align="center">-</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">11 - ������� � �������� � ���. ���������</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">13 - ������� � �������� ������ � ���. ���������</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">15 - ������ ������</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">21 - �����</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
				</table>	<br />