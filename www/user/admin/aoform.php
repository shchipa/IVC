<td align="center">
	<form action='add_ao.php' method='post' name='insao' id='insao'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span class="g18">������� ������:</span></td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>���������:</span>
		</td>
		<td align="left">
			<input name='ao' type='text' value='' size='15' maxlength='13'>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>IP-������:</span>
		</td>
		<td align="left">
			<input name='ip' type='text' value='' size='15' maxlength='15'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>��������� ��:</span>
		</td>
		<td align="left">
   				<select name="ki">
				<option selected disabled>�������� ��...</option>
				<?php
					$result = mysql_query("SELECT ki FROM ki",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['ki']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������:</span>
		</td>
		<td align="left">
   				<select name="station">
				<option selected disabled>�������� �������...</option>
				<?php
					$result = mysql_query("SELECT station FROM station ORDER BY station",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['station']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>������� �����:</span>
		</td>
		<td align="left">
			<input name='rabmesto' type='text' value='' size='15' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>��� ������������:</span>
		</td>
		<td align="left">
   				<select name="vidki">
				<option selected disabled>�������� ��� ����....</option>
				<?php
					$result = mysql_query("SELECT * FROM vidki ORDER BY id",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['vidki']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
        	<input name='fio' type='hidden' value='Admin'>
			<input name='submit' type='submit' class='b14' id='submit' value='�������� ���������'></br></br>
		</td>
	</tr>
	</table>
	</form>
</td>