	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">������� �����������</td>
		</tr>
	</table>

	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
			<td align='center' width='20'>&nbsp;</td>
			<td align='center' width='90'><span class='g12'>���������</span></td>
			<td align='center' width='90'><span class='g12'>IP-������</span></td>
			<td align='center' width='130'><span class='g12'>��</span></td>
			<td align='center' width='130'><span class='g12'>�������</span></td>
			<td align='center' width='150'><span class='g12'>������� �����</span></td>
			<td align='center' width='60'><span class='g12'>��� ������������</span></td>
			<td align='center' width='70'><span class='g12'>�.�.�. �����������</span></td>
			<td align='center' width='70'><span class='g12'>���� ����������</span></td>

			<td align='center' width='85'><span class='r12'>�������������</span></td>
		</tr>
	</table>

<?
				//�������� ���� ��������� ������
//				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
//				$den = strftime("%d", $yesterday);
//				$mes = strftime("%m", $yesterday);
//				$god = strftime("%Y", $yesterday);
/*				$res = mysql_query ("SELECT gruppa FROM mehanik WHERE mehanik = '$fio'",$db);
				$row = mysql_fetch_array($res);
				do
				{
					$gruppa = $row['gruppa'];
				}
				while ($row = mysql_fetch_array($res));


if ($gruppa == '��� 5 ����')
{
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='redak_sboy.php' method='post' name='form6' id='form6'>
						<table border='1' cellpadding='0' cellspacing='1'>
							<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td width='20' align='center'><input name='check' type='checkbox' value='ch'></td>
								<td width='90' align='center'><span class='k12'>%s</span></td>
								<td width='120' align='center'><span class='k12'>%s</span></td>
								<td width='50' align='center'><span class='k12'>%s</span></td>
								<td width='70' align='center'><span class='k12'>%s</span></td>
								<td width='80' align='center'><span class='k12'>%s</span></td>
								<td width='60' align='center'><span class='k12'>%s.%s.%s</span></td>
								<td width='40' align='center'><span class='k12'>%s:%s</span></td>
								<td width='400' align='center'><span class='k12'>%s</span></td>

								<td width='85' align='center'>
									<input name='id' type='hidden' value='%s'>
									<input name='fio' type='hidden' value='%s'>
									<input name='parol' type='hidden' value='%s'>
									<input name='submit' type='submit' class='b10' id='submit' value='��������-��'>
									<input name='nden' type='hidden' value='%s'>
									<input name='nmes' type='hidden' value='%s'>
									<input name='ngod' type='hidden' value='%s'>
									<input name='nchas' type='hidden' value='%s'>
									<input name='nmin' type='hidden' value='%s'>
									<input name='kden' type='hidden' value='%s'>
									<input name='kmes' type='hidden' value='%s'>
									<input name='kgod' type='hidden' value='%s'>
									<input name='kchas' type='hidden' value='%s'>
									<input name='kmin' type='hidden' value='%s'>
									<input name='prim' type='hidden' value='%s'> 
									<input name='ust' type='hidden' value='%s'> 
									<input name='slujba' type='hidden' value='%s'> 
									<input name='rabmesto' type='hidden' value='%s'> 
									<input name='ustroystvo' type='hidden' value='%s'> 
								</td>
							</tr>
						</table>
						</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['id'], $fio, $parol, $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['ust'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo']);
				}
				while ($rowav = mysql_fetch_array($resav));
}


else
{*/
				$resav = mysql_query ("SELECT * FROM avtootvet ORDER BY ao",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='red_ao.php' method='post' name='form6' id='form6'>
						<table border='1' cellpadding='0' cellspacing='1'>
							<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td width='20' align='center'><input name='check' type='checkbox' value='ch'></td>
								<td width='90' align='center'><span class='k12'>%s</span></td>
								<td width='90' align='center'><span class='k12'>%s</span></td>
								<td width='130' align='center'><span class='k12'>%s</span></td>
								<td width='130' align='center'><span class='k12'>%s</span></td>
								<td width='150' align='center'><span class='k12'>%s</span></td>
								<td width='60' align='center'><span class='k12'>%s</span></td>
								<td width='70' align='center'><span class='k12'>%s</span></td>
								<td width='70' align='center'><span class='k12'>%s</span></td>

								<td width='85' align='center'>
									<input name='submit' type='submit' class='b10' id='submit' value='��������-��'>
									<input name='id' type='hidden' value='%s'>
									<input name='ao' type='hidden' value='%s'>
									<input name='ip' type='hidden' value='%s'>
									<input name='ki' type='hidden' value='%s'>
									<input name='station' type='hidden' value='%s'>
									<input name='rabmesto' type='hidden' value='%s'>
									<input name='vidki' type='hidden' value='%s'>
									<input name='fio' type='hidden' value='%s'>
									<input name='data' type='hidden' value='%s'>
								</td>
							</tr>
						</table>
						</form>
				", $rowav['ao'], $rowav['ip'], $rowav['ki'], $rowav['station'], $rowav['rabmesto'], $rowav['vidki'], $rowav['fio'], $rowav['data'], $rowav['id'], $rowav['ao'], $rowav['ip'], $rowav['ki'], $rowav['station'], $rowav['rabmesto'], $rowav['vidki'], $rowav['fio'], $rowav['data']);
				}
				while ($rowav = mysql_fetch_array($resav));
//}
?>