    <table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">����</td>
		</tr>
	</table>
    <div style='background:#eeeeee;'>
 	<table border='1' cellpadding="0" cellspacing="1">
<?
	printf("
		<tr  valign='center'>
			<td align='center' width='120'><span class='g12'>��������<br>������</span></td>
			<td align='center' width='120'><span class='g12'>�������</span></td>
			<td align='center' width='80'><span class='g12'>������</span></td>
			<td align='center' width='70'><span class='g12'>������� �����</span></td>
			<td align='center' width='60'><span class='g12'>����������</span></td>
			<td align='center' width='80'><span class='g12'>���������</span></td>
			<td align='center' width='80'><span class='g12'>����<br>�����������</span></td>
			<td align='center' width='80'><span class='g12'>����<br>��������</span></td>
			<td align='center' width='80'><span class='g12'>� ����</span></td>
			<td align='center' width='80'><span class='g12'>� �����������</span></td>
			<td align='center'><span class='g12'>��������������</span></td>
			<td align='center'><span class='g12'>����������� ����</span></td>
			<td align='center'><span class='g12'>����������� ��������</span></td>
			<td align='center' width='50'><span class='g12'>������� �.�. �����������</span></td>
		</tr>
		");
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM remont ORDER BY akt DESC",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['sost'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['akt'], $rowav['invnomer'], $rowav['haraktustr'], $rowav['polomka'], $rowav['zch'], $rowav['fiospetc']);
				}
				while ($rowav = mysql_fetch_array($resav));

		?>
		</table>
        </div>
</br>