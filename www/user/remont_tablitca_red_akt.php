<table border='1' cellpadding='0' cellspacing='1'>
		<caption align='top' class="g18"><br />Редактировать АКТ <br /> </caption>
				<tr>
					<td align='center' width='20'>&nbsp;</td>
					<td align='center' width='80'><span class='g12'>№ акта</span></td>
					<td align='center' width='120'><span class='g12'>Линейная<br>группа</span></td>
					<td align='center' width='120'><span class='g12'>Станция</span></td>
					<td align='center' width='80'><span class='g12'>Служба</span></td>
					<td align='center' width='70'><span class='g12'>Рабочее место</span></td>
					<td align='center' width='80'><span class='g12'>Устройство</span></td>
					<td align='center' width='80'><span class='g12'>№ инвентарный</span></td>
					<td align='center' width='80'><span class='g12'>Состояние</span></td>
					<td align='center' width='80'><span class='g12'>Дата<br>поступления</span></td>
					<td align='center' width='80'><span class='g12'>Дата<br>возврата</span></td>
					<td align='center'><span class='g12'>Характе-<br />ристика</span></td>
					<td align='center'><span class='g12'>Неисправные узлы</span></td>
					<td align='center'><span class='g12'>Необходимые запчасти</span></td>
					<td align='center' width='50'><span class='g12'>&nbsp;</span></td>
				</tr>

<?
				$resav = mysql_query ("SELECT * FROM remont ORDER BY akt DESC",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='remont_redakt_akt.php' method='post' name='form16' id='form16'>
							<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td><input name='check' type='checkbox' value='ch'></td>
								<td><span class='k12' title='ФИО Специалиста %s'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12' title='ФИО Специалиста %s'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s-%s-%s</td>
								<td><span class='k12'>%s-%s-%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td><span class='k12'>%s</td>
								<td>
									<input name='id' type='hidden' value='%s'>
									<input name='submit' type='submit' class='b10' id='submit' value='Редакт.'>
								</td>
							</tr>
						</form>
				", $rowav['fiospetc'], $rowav['akt'], $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['fiospetc'], $rowav['invnomer'], $rowav['sost'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['haraktustr'], $rowav['polomka'], $rowav['zch'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
?>
</table>