    <table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">������������ ����</td>
		</tr>
	</table>
 	<table border='1' cellpadding="0" cellspacing="1">
		<tr valign='center'>
			<td align='center' width='100'><span class='g12'>�������� ������</span></td>
			<td align='center' width='100'><span class='g12'>�������</span></td>
			<td align='center' width='80'><span class='g12'>������</span></td>
			<td align='center' width='70'><span class='g12'>������� �����</span></td>
			<td align='center' width='80'><span class='g12'>����������</span></td>
			<td align='center' width='80'><span class='g12'>���� ������ � ����</span></td>
			<td align='center' width='80'><span class='g12'>����� ������ </br> � ����</span></td>
			<td align='center'><span class='g12'>����������</span></td>
		</tr>
<?
				$res = mysql_query ("SELECT gruppa FROM mehanik WHERE mehanik = '$_SESSION[adminUser]'",$db);
				$row = mysql_fetch_array($res);
				do
				{
					$gruppa = $row['gruppa'];
				}
				while ($row = mysql_fetch_array($res));
//echo $gruppa;
if ($gruppa == '��� 5, 10 ����')
{
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr valign='center'>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s.%s.%s</span></td>
						<td><span class='k12'>%s:%s</span></td>
						<td><span class='k12'>%s ���.� %s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer']);
				}
				while ($rowav = mysql_fetch_array($resav));
}
else
{
				//�������� ���� ��������� ������
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 AND gruppa = '$gruppa' ORDER BY ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr valign='center'>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s.%s.%s</span></td>
						<td><span class='k12'>%s:%s</span></td>
						<td><span class='k12'>%s ���.� %s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer']);
				}
				while ($rowav = mysql_fetch_array($resav));
}

		?>
		</table>
</br>