<div style='background:#eeeeee; width:1060px'>
	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width='90'><span class='r12'>�������� ������</span></td>
			<td align='center' width='120'><span class='r12'>�������</span></td>
			<td align='center' width='50'><span class='r12'>������</span></td>
			<td align='center' width='70'><span class='r12'>������� �����</span></td>
			<td align='center' width='80'><span class='r12'>����������</span></td>
			<td align='center' width='60'><span class='r12'>���� ������ </br> � ���� </span></td>
			<td align='center' width='40'><span class='r12'>����� </br> ������ � </br> ����</span></td>
			<td align='center' width='60'><span class='r12'>���� </br> ���������� </br> ����</span></td>
			<td align='center' width='40'><span class='r12'>����� </br> �������- </br> ��� ����</span></td>
			<td align='center' width='400'><span class='r12'>����������</span></td>
		</tr>

<?
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $dn and nmes = $mn and ngod = $gn) or (kden = $dn and kmes = $mn and kgod = $gn) ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
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
						<td align='center'><span class='k12'>%s.%s.%s</span></td>
						<td align='center'><span class='k12'>%s:%s</span></td>
						<td align='center'><span class='k12'>%s.%s.%s</span></td>
						<td align='center'><span class='k12'>%s:%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim']);
				}
				while ($rowav = mysql_fetch_array($resav));
			?>
	</table>
</div>
