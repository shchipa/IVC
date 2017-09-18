	<div style='background:#eeeeee; width:480px'>
	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width='150' rowspan="2"><span class='g14'>Линейная группа</span></td>
			<td align='center' width='150' colspan="4"><span class='g14'>Вышли из строя</span></td>
			<td align='center' width='150' colspan="4"><span class='g14'>Устранено</span></td>
		</tr>
		<tr valign='center'>
			<td align='center' width='50'><span class='g12'>ПЭВМ</span></td>
			<td align='center' width='50'><span class='g12'>ИБП</span></td>
			<td align='center' width='50'><span class='g12'>Сетевое оборудо- </br>вание</span></td>
			<td align='center' width='50'><span class='g12'>Принтер</span></td>
			<td align='center' width='50'><span class='g12'>ПЭВМ</span></td>
			<td align='center' width='50'><span class='g12'>ИБП</span></td>
			<td align='center' width='50'><span class='g12'>Сетевое оборудо- </br>вание</span></td>
			<td align='center' width='50'><span class='g12'>Принтер</span></td>
		</tr>


<?
		$KNS=0; $INS=0;	$SNS=0;	$PNS=0;
		$KKS=0;	$IKS=0;	$SKS=0;	$PKS=0;


					$resav = mysql_query ("SELECT gruppa FROM gruppa ORDER BY id",$db);
					$rowav = mysql_fetch_array($resav);
					do
					{
						printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['gruppa']);
						$gruppa=$rowav['gruppa'];

						$KN=0; $IN=0;	$SN=0;	$PN=0;
						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Системный блок' or ustroystvo='Монитор' or ustroystvo='ПО') and (gruppa='$gruppa' and (ndat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$KN++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $KN);
						$KNS=$KNS+$KN;

						$res = mysql_query ("SELECT * FROM avariya WHERE (ustroystvo='ИБП' and (gruppa='$gruppa' and (ndat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$IN++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $IN);
						$INS=$INS+$IN;

						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Модем' or ustroystvo='Коммутатор' or ustroystvo='Маршрутизатор') and (gruppa='$gruppa' and (ndat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$SN++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $SN);
						$SNS=$SNS+$SN;

						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Принтер' or ustroystvo='МФУ') and (gruppa='$gruppa' and (ndat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$PN++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $PN);
						$PNS=$PNS+$PN;


						$KK=0;	$IK=0;	$SK=0;	$PK=0;
						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Системный блок' or ustroystvo='Монитор' or ustroystvo='ПО') and (gruppa='$gruppa' and (kdat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$KK++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $KK);
						$KKS=$KKS+$KK;

						$res = mysql_query ("SELECT * FROM avariya WHERE (ustroystvo='ИБП' and (gruppa='$gruppa' and (kdat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$IK++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $IK);
						$IKS=$IKS+$IK;

						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Модем' or ustroystvo='Коммутатор' or ustroystvo='Маршрутизатор') and (gruppa='$gruppa' and (kdat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$SK++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $SK);
						$SKS=$SKS+$SK;

						$res = mysql_query ("SELECT * FROM avariya WHERE ((ustroystvo='Принтер' or ustroystvo='МФУ') and (gruppa='$gruppa' and (kdat BETWEEN  '$gn-$mn-01' and '$gn-$mn-31')))",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$PK++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $PK);
						$PKS=$PKS+$PK;
					}
					while ($rowav = mysql_fetch_array($resav));
					printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td align='center'><span class='k12'><strong>ВСЕГО:</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
					</tr>", $KNS, $INS, $SNS, $PNS, $KKS, $IKS, $SKS, $PKS);
?>
	</table>
</div>