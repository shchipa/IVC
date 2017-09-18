	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Таблица неустранённых сбоев до <? $yesterday  = mktime(0, 0, 0, date("m")  , date("d"), date("Y")); echo strftime("%d.%m.%Y", $yesterday); ?></td>
		</tr>
	</table>

	 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
			<td align='center' width='20'>&nbsp;</td>
			<td align='center' width='100'><span class='r12'>Линейная группа</span></td>
			<td align='center' width='80'><span class='r12'>Станция</span></td>
			<td align='center' width='50'><span class='r12'>Служба</span></td>
			<td align='center' width='70'><span class='r12'>Рабочее место</span></td>
			<td align='center' width='80'><span class='r12'>Устройство</span></td>
			<td align='center'><span class='r12'>Дата заявки </br> о сбое </span></td>
			<td align='center'><span class='r12'>Время </br> заявки </br>о сбое</span></td>
			<td align='center'><span class='r12'>Примечание</span></td>

			<td align='center' width='85'><span class='r12'>Редактировать</span></td>
		</tr>
<?
				//Перечень всех выводимых заявок
//				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
//				$den = strftime("%d", $yesterday);
//				$mes = strftime("%m", $yesterday);
//				$god = strftime("%Y", $yesterday);
				$res = mysql_query ("SELECT gruppa FROM mehanik WHERE mehanik = '$_SESSION[adminUser]'",$db);
				$row = mysql_fetch_array($res);
				do
				{
					$gruppa = $row['gruppa'];
				}
				while ($row = mysql_fetch_array($res));


if ($gruppa == 'ИВЦ 5, 10 этаж')
{
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0 ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='sboy_redak.php' method='post' name='form6' id='form6'>
							<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td><input name='check' type='checkbox' value='ch'></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s.%s.%s</span></td>
								<td><span class='k12'>%s:%s</span></td>
								<td><span class='k12'>%s Инв.№ %s</span></td>

								<td>
									<input name='id' type='hidden' value='%s'>
									<input name='submit' type='submit' class='b10' id='submit' value='Редактир-ть'>
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
									<input name='invnomer' type='hidden' value='%s'> 
									<input name='ustroystvo' type='hidden' value='%s'> 
								</td>
							</tr>
						</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer'], $rowav['id'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['ust'], $rowav['slujba'], $rowav['rabmesto'], $rowav['invnomer'], $rowav['ustroystvo']);
				}
				while ($rowav = mysql_fetch_array($resav));
}


else
{
				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = 0  AND gruppa = '$gruppa' ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
		   				<form action='sboy_redak.php' method='post' name='form6' id='form6'>
							<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td><input name='check' type='checkbox' value='ch'></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s</span></td>
								<td><span class='k12'>%s.%s.%s</span></td>
								<td><span class='k12'>%s:%s</span></td>
								<td><span class='k12'>%s Инв.№ %s</span></td>

								<td>
									<input name='id' type='hidden' value='%s'>
									<input name='submit' type='submit' class='b10' id='submit' value='Редактир-ть'>
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
									<input name='invnomer' type='hidden' value='%s'> 
									<input name='ustroystvo' type='hidden' value='%s'> 
								</td>
							</tr>
						</form>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer'], $rowav['id'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['ust'], $rowav['slujba'], $rowav['rabmesto'], $rowav['invnomer'], $rowav['ustroystvo']);
				}
				while ($rowav = mysql_fetch_array($resav));
}
?>
			</table>