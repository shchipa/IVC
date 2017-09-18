	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Полная таблица сбоев до <? $yesterday  = mktime(0, 0, 0, date("m")  , date("d"), date("Y")); echo strftime("%d.%m.%Y", $yesterday); ?></td>
		</tr>
	</table>

	 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center' width='20'>&nbsp;</td>
			<td align='center' width='90'><span class='r12'>Линейная группа</span></td>
			<td align='center' width='120'><span class='r12'>Станция</span></td>
			<td align='center' width='50'><span class='r12'>Служба</span></td>
			<td align='center' width='70'><span class='r12'>Рабочее место</span></td>
			<td align='center' width='80'><span class='r12'>Устройство</span></td>
			<td align='center' width='60'><span class='r12'>Дата заявки </br> о сбое </span></td>
			<td align='center' width='40'><span class='r12'>Время </br> заявки о </br> сбое</span></td>
			<td align='center' width='60'><span class='r12'>Дата </br> устранения </br> сбоя</span></td>
			<td align='center' width='40'><span class='r12'>Время </br> устране- </br> ния сбоя</span></td>
			<td align='center' width='400'><span class='r12'>Примечание</span></td>
			<td align='center' width='70'><span class='r12'>Добавил сбой</span></td>
			<td align='center' width='65'><span class='r12'>Время записи</span></td>
			<td align='center' width='70'><span class='r12'>Устранил сбой</span></td>
			<td align='center' width='65'><span class='r12'>Время записи</span></td>
			<td align='center' width='40'><span class='r12'>Устра </br> нено</span></td>
			<td align='center' width='85'><span class='r12'>Удалить</span></td>
		</tr>
<?
				//Перечень всех выводимых заявок
//				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
//				$den = strftime("%d", $yesterday);
//				$mes = strftime("%m", $yesterday);
//				$god = strftime("%Y", $yesterday);
				$resav = mysql_query ("SELECT * FROM avariya ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='delete_sboy_admin_vybor.php' method='post' name='form6' id='form6'>
							<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td width='20' align='center'><input name='check' type='checkbox' value='ch'></td>
								<td width='90' align='center'><span class='k12'>%s</span></td>
								<td width='120' align='center'><span class='k12'>%s</span></td>
								<td width='50' align='center'><span class='k12'>%s</span></td>
								<td width='70' align='center'><span class='k12'>%s</span></td>
								<td width='80' align='center'><span class='k12'>%s</span></td>
								<td width='60' align='center'><span class='k12'>%s.%s.%s</span></td>
								<td width='40' align='center'><span class='k12'>%s:%s</span></td>
								<td width='60' align='center'><span class='k12'>%s.%s.%s</span></td>
								<td width='40' align='center'><span class='k12'>%s:%s</span></td>
								<td width='400' align='center'><span class='k12'>%s</span></td>

								<td width='70' align='center'><span class='k12'>%s</span></td>
								<td width='65' align='center'><span class='k12'>%s</span></td>
								<td width='70' align='center'><span class='k12'>%s</span></td>
								<td width='65' align='center'><span class='k12'>%s</span></td>
								<td width='40' align='center'><span class='k12'>%s</span></td>
								<td width='85' align='center'>
									<input name='id' type='hidden' value='%s'>
									<input name='fio' type='hidden' value='%s'>
									<input name='parol' type='hidden' value='%s'>
									<input name='submit' type='submit' class='b10' id='submit' value='Удалить'>
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
						</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['nfio'], $rowav['ndate'], $rowav['kfio'], $rowav['kdate'], $rowav['ust'], $rowav['id'], $fio, $parol, $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['ust'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo']);
				}
				while ($rowav = mysql_fetch_array($resav));
			?>
	</table>