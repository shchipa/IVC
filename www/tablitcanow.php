<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">������� ����� �� <? echo date("d.m.Y �� H:i:s");?></td>
		</tr>
</table>
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
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
				$den = strftime("%d", $yesterday);
				$mes = strftime("%m", $yesterday);
				$god = strftime("%Y", $yesterday);
				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den and nmes = $mes and ngod = $god) or (kden = $den and kmes = $mes and kgod = $god) ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
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
