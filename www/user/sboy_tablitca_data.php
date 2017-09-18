<div style='background:#eeeeee; width:1060px'>
	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
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
		</tr>

<?
//				$resav = mysql_query ("SELECT * FROM avariya WHERE (ndate BETWEEN  '$gn-$mn-$dn 00:00:00' AND '$gk-$mk-$dk 23:59:59') OR (kdate BETWEEN  '$gn-$mn-$dn 00:00:00' AND '$gk-$mk-$dk 23:59:59') ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
//				$rowav = mysql_fetch_array($resav);
				switch ($radio)
				{
				case 1:
				{
				$resav = mysql_query ("SELECT * FROM avariya WHERE (ndat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') OR (kdat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				}
				break;
				case 2:
				{
				$resav = mysql_query ("SELECT * FROM avariya WHERE (ndat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				}
				break;
				case 3:
				{
				$resav = mysql_query ("SELECT * FROM avariya WHERE (kdat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				}
				break;

				default:
				{
				$resav = mysql_query ("SELECT * FROM avariya WHERE (ndat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') OR (kdat BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				}
				break;
				}

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
						<td align='center'><span class='k12'>%s Инв.№ %s</span></td>
					</tr>
				", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['kchas'], $rowav['kmin'], $rowav['prim'], $rowav['invnomer']);
				}
				while ($rowav = mysql_fetch_array($resav));
			?>
	</table>
</div>