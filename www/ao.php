<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">������� ����������� �������� ��</td>
		</tr>
</table>
<div style='background:#eeeeee; width:700px'>
	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width='90'><span class='g12'>���������</span></td>
			<td align='center' width='90'><span class='g12'>IP-������</span></td>
			<td align='center' width='130'><span class='g12'>��</span></td>
			<td align='center' width='130'><span class='g12'>�������</span></td>
			<td align='center' width='150'><span class='g12'>������� �����</span></td>
			<td align='center' width='60'><span class='g12'>��� ������������</span></td>
		</tr>

<?
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avtootvet ORDER BY ao",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
					</tr>
				", $rowav['ao'], $rowav['ip'], $rowav['ki'], $rowav['station'], $rowav['rabmesto'], $rowav['vidki']);
				}
				while ($rowav = mysql_fetch_array($resav));
			?>
	</table>
</div>
