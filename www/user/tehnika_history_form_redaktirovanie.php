<form action='tehnika_history_redaktirovanie.php' method='post' name='form6' id='form6'>
<?
	$reslast = mysql_query ("SELECT * FROM history WHERE invnomer = '$invnomer' ORDER BY id DESC",$db);
	$rowlast = mysql_fetch_array($reslast);
?>
<table border='0' cellpadding='2' cellspacing='0' class='k12'>
	<caption align='top' class='g18'>�������� ��� ������������ �<? echo $rowlast['invnomer']; ?></caption>
	<tr>
		<th align='right' width='90'>�����������<br />�������������<br />����:</th>
		<td align='left'><? printf("<input name='otvetstvenniy'  type='text' value='%s' size='12' maxlength='30'>",$rowlast['otvetstvenniy']);?></td>
		<th align='right'>������������<br />(�����������):</th>
		<td align='left'><? printf("<textarea name='naimenovanie' cols='15' rows='4'>%s</textarea>",$rowlast['naimenovanie']);?></td>
		<th align='right'>��������������<br />���������:</th>
		<td align='left'><? printf("<input name='stoimost' type='text' value='%s' size='10' maxlength='15'>",$rowlast['stoimost']);?></td>
		<th align='right'>�����������<br />����<br />������������:</th>
		<td align='left'><? printf("<input name='srok' type='text' value='%s' size='10' maxlength='11'>",$rowlast['srok']);?></td>
	</tr>
	<tr>
		<th align='right'>�������:</th>
		<td align='left'>
			<select name='station'>
				<?php
				printf ("<option selected>$rowlast[station]</option>");
					$resdata = mysql_query("SELECT station FROM station",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//�����
						if (isset($mydata['station']))
						printf ("<option>%s</option>",$mydata['station']);
					}
					while ($mydata = mysql_fetch_array($resdata));
				?>
			</select>
		</td>
		<th align='right'>������:</th>
		<td align='left'><? printf("<input name='slujba' type='text' value='%s' size='10' maxlength='20'>",$rowlast['slujba']);?></td>
		<th align='right'>������� <br /> �����:</th>
		<td align='left'><? printf("<input name='rabmesto' type='text' value='%s' size='10' maxlength='20'>",$rowlast['rabmesto']);?></td>
		<th align='right'>����<br />����� �<br />������������:</th>
		<td align='left'><? printf("<input name='vdate' type='text' value='%s' size='10' maxlength='10'>",$rowlast['vdate']);?></td>
	</tr>
	<tr>
		<th align='right' width='100'>����������:</th>
		<td align='left'>
			<select name='ustroystvo'>
			<?php
				printf ("<option selected>$rowlast[ustroystvo]</option>");
					$resdata = mysql_query("SELECT ustroystvo FROM ustroystvo",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//�����
						if (isset($mydata['ustroystvo']))
						printf ("<option>%s</option>",$mydata['ustroystvo']);
					}
					while ($mydata = mysql_fetch_array($resdata));
			?>
			</select>
		</td>
	    <th align='right'>��������������<br />(������)</th>
		<td align='left'><? printf("<textarea name='harakteristika' cols='15' rows='4'>%s</textarea>",$rowlast['harakteristika']);?></td>
		<th align='right'>���������:</th>
		<td align='left'>
			<select name='sost'>
				<?php
				printf ("<option selected>$rowlast[sost]</option>");
					$resdata = mysql_query("SELECT sost FROM sost",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//�����
						if (isset($mydata['sost']))
						printf ("<option>%s</option>",$mydata['sost']);
					}
					while ($mydata = mysql_fetch_array($resdata));
				?>
			</select>
		</td>
		<th align='right'>��������������<br />����������:</th>
		<td align='left'><? printf("<textarea name='dopinfo' cols='10' rows='4'>%s</textarea>",$rowlast['dopinfo']);?></td>
	</tr>
	<tr height="50" align="center">
		<td colspan="8">
			<input name='submit' type='submit' class='r14' id='submit' value='������� ���������'>
            <input name='invnomer' type="hidden" value='<? echo $rowlast['invnomer'];?>'>
            <input name='flag' type='hidden' value='1'>
		</td>
	</tr>
</table>
</form>
<br /><br />
<?
/*		printf("<tr class='k12'>
					<th align='center' width='80'>����</th>
					<th align='center' width='80'>�<br />�����������</th>
					<th align='center' width='90'>�����������<br />�������������<br />����</th>
					<th align='center' width='100'>����������</th>
				    <th align='center'>��������������<br />(������)</th>
					<td align='center'>�������</td>
					<td align='center'>������</td>
					<td align='center'>������� <br /> �����</td>
					<td align='center'>������������<br />(�����������)</td>
					<td align='center'>���������</td>
					<td align='center'>����<br />����� �<br />������������</td>
					<td align='center'>��������������<br />���������</td>
					<td align='center'>�����������<br />����<br />������������</td>
					<td align='center'>��������������<br />����������</td>
			</tr>");
				
		$resav = mysql_query ("SELECT * FROM mehanik WHERE mehanik = '$fio' ORDER BY id DESC",$db);
		$rowav = mysql_fetch_array($resav);
		echo $rowav['mehanik'];
		echo $rowav['status'];
//		if ($_SESSION['adminUser'])
			
		printf("<tr class='k12'>
					<th colspan='14' align='center' class='g14' width='80'>��� ��������� ������ ������� ��������� � ��������������� �����</th>
				</tr>");
		
		printf("
				<form action='tehnika_update.php' method='post' name='inssboy' id='inssboy'>
				<tr class='k12'>
					<td align='center'><input name='date' class='k10' type='text' value='%s' size='10' maxlength='10'></td>
					<td align='center'><input name='invnomer' class='k10' type='text' value='%s' size='12' maxlength='20'></td>
					<td align='center'><input name='otvetstvenniy' class='k10' type='text' value='%s' size='12' maxlength='30'></td>
				",1,2,3);


		include ("tehnika_ustroystvo.php");

		printf("
					<td align='center'><textarea class='k10' name='harakteristika' cols='10' rows='4'>%s</textarea></td>
				",5);

		include ("tehnika_station.php");

		printf("
					<td align='center'><input name='slujba' class='k10' type='text' value='%s' size='8' maxlength='20'></td>
					<td align='center'><input name='rabmesto' class='k10' type='text' value='%s' size='10' maxlength='20'></td>
					<td align='center'><textarea class='k10' name='naimenovanie' cols='8' rows='4'>%s</textarea></td>
				",8,9,10);

		include ("tehnika_sost.php");

		printf("
					<td align='center'><input name='vdate' class='k10' type='text' value='%s' size='10' maxlength='10'></td>
					<td align='center'><input name='stoimost' class='k10' type='text' value='%s' size='8' maxlength='15'></td>
					<td align='center'><input name='srok' class='k10' type='text' value='%s' size='8' maxlength='10'></td>
					<td align='center'><textarea class='k10' name='dopinfo' cols='8' rows='4'>%s</textarea></td>
				</tr>
				</form>
				",11,12,13,14);
		
		printf("<tr class='k12'>
					<th colspan='14' height='30' align='center' class='g18' width='80'>&darr;&darr;&darr; ������� &darr;&darr;&darr;</th>
				</tr>");
*/
?>