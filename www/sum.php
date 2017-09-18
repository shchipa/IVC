	<table border='0' width="100%" cellpadding="0" cellspacing="0">
		<tr valign='center'>
        	<td align="center" height="50" class="g18">Итоговая таблица</td>
		</tr>
	</table>

<div style='background:#eeeeee; width:565px'>
	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width='70' rowspan="2"><span class='g14'>Дата</span></td>
			<td align='center' width='150' colspan="3"><span class='g14'>Вышли из строя</span></td>
			<td align='center' width='150' colspan="3"><span class='g14'>Устранено</span></td>
		</tr>
		<tr valign='center'>
			<td align='center' width='50'><span class='g12'>ПЭВМ</span></td>
			<td align='center' width='50'><span class='g12'>Сетевое оборудо- </br>вание</span></td>
			<td align='center' width='50'><span class='g12'>Принтер</span></td>
			<td align='center' width='50'><span class='g12'>ПЭВМ</span></td>
			<td align='center' width='50'><span class='g12'>Сетевое оборудо- </br>вание</span></td>
			<td align='center' width='50'><span class='g12'>Принтер</span></td>
		</tr>


<?
//0
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
				$den0 = strftime("%d", $yesterday);
				$mes0 = strftime("%m", $yesterday);
				$god0 = strftime("%Y", $yesterday);

				$KN0=0;
				$SN0=0;
				$PN0=0;
				$KK0=0;
				$SK0=0;
				$PK0=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nmes = $mes0 and ngod = $god0)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN0++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN0++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN0++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den0 and kmes = $mes0 and kgod = $god0)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK0++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK0++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK0++;}}
				while ($rowav = mysql_fetch_array($resav));

//1
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
				$den1 = strftime("%d", $yesterday);
				$mes1 = strftime("%m", $yesterday);
				$god1 = strftime("%Y", $yesterday);

				$KN1=0;
				$SN1=0;
				$PN1=0;
				$KK1=0;
				$SK1=0;
				$PK1=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den1 and nmes = $mes1 and ngod = $god1)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN1++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN1++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN1++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den1 and kmes = $mes1 and kgod = $god1)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK1++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK1++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK1++;}}
				while ($rowav = mysql_fetch_array($resav));

//2
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-2, date("Y"));
				$den2 = strftime("%d", $yesterday);
				$mes2 = strftime("%m", $yesterday);
				$god2 = strftime("%Y", $yesterday);

				$KN2=0;
				$SN2=0;
				$PN2=0;
				$KK2=0;
				$SK2=0;
				$PK2=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den2 and nmes = $mes2 and ngod = $god2)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN2++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN2++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN2++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den2 and kmes = $mes2 and kgod = $god2)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK2++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK2++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK2++;}}
				while ($rowav = mysql_fetch_array($resav));

//3
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-3, date("Y"));
				$den3 = strftime("%d", $yesterday);
				$mes3 = strftime("%m", $yesterday);
				$god3 = strftime("%Y", $yesterday);

				$KN3=0;
				$SN3=0;
				$PN3=0;
				$KK3=0;
				$SK3=0;
				$PK3=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den3 and nmes = $mes3 and ngod = $god3)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN3++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN3++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN3++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den3 and kmes = $mes3 and kgod = $god3)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK3++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK3++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK3++;}}
				while ($rowav = mysql_fetch_array($resav));

//4
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-4, date("Y"));
				$den4 = strftime("%d", $yesterday);
				$mes4 = strftime("%m", $yesterday);
				$god4 = strftime("%Y", $yesterday);

				$KN4=0;
				$SN4=0;
				$PN4=0;
				$KK4=0;
				$SK4=0;
				$PK4=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den4 and nmes = $mes4 and ngod = $god4)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN4++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN4++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN4++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den4 and kmes = $mes4 and kgod = $god4)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK4++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK4++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK4++;}}
				while ($rowav = mysql_fetch_array($resav));

//5
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-5, date("Y"));
				$den5 = strftime("%d", $yesterday);
				$mes5 = strftime("%m", $yesterday);
				$god5 = strftime("%Y", $yesterday);

				$KN5=0;
				$SN5=0;
				$PN5=0;
				$KK5=0;
				$SK5=0;
				$PK5=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den5 and nmes = $mes5 and ngod = $god5)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN5++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN5++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN5++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den5 and kmes = $mes5 and kgod = $god5)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK5++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK5++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK5++;}}
				while ($rowav = mysql_fetch_array($resav));

//6
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d")-6, date("Y"));
				$den6 = strftime("%d", $yesterday);
				$mes6 = strftime("%m", $yesterday);
				$god6 = strftime("%Y", $yesterday);

				$KN6=0;
				$SN6=0;
				$PN6=0;
				$KK6=0;
				$SK6=0;
				$PK6=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE (nden = $den6 and nmes = $mes6 and ngod = $god6)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KN6++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SN6++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PN6++;}}
				while ($rowav = mysql_fetch_array($resav));

				$resav = mysql_query ("SELECT * FROM avariya WHERE (kden = $den6 and kmes = $mes6 and kgod = $god6)",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$KK6++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$SK6++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$PK6++;}}
				while ($rowav = mysql_fetch_array($resav));



//Сумма
				$yesterday  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
				$den = strftime("%d", $yesterday);
				$mes = strftime("%m", $yesterday);
				$god = strftime("%Y", $yesterday);

				$K0=0;
				$S0=0;
				$P0=0;

				$resav = mysql_query ("SELECT * FROM avariya WHERE ust = '0' ORDER BY gruppa, ngod, nmes, nden, nchas, nmin, station",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{	if ($rowav['ustroystvo'] == 'Системный блок' or $rowav['ustroystvo'] == 'ИБП' or $rowav['ustroystvo'] == 'Монитор' or $rowav['ustroystvo'] == 'ПО')
					{$K0++;}
					if ($rowav['ustroystvo'] == 'Модем' or $rowav['ustroystvo'] == 'Коммутатор' or $rowav['ustroystvo'] == 'Маршрутизатор')
					{$S0++;}
					if ($rowav['ustroystvo'] == 'Принтер' or $rowav['ustroystvo'] == 'МФУ')
					{$P0++;}}
				while ($rowav = mysql_fetch_array($resav));


$K1=$K0-$KN0+$KK0; $S1=$S0-$SN0+$SK0; $P1=$P0-$PN0+$PK0;
$K2=$K1-$KN1+$KK1; $S2=$S1-$SN1+$SK1; $P2=$P1-$PN1+$PK1;
$K3=$K2-$KN2+$KK2; $S3=$S2-$SN2+$SK2; $P3=$P2-$PN2+$PK2;
$K4=$K3-$KN3+$KK3; $S4=$S3-$SN3+$SK3; $P4=$P3-$PN3+$PK3;
$K5=$K4-$KN4+$KK4; $S5=$S4-$SN4+$SK4; $P5=$P4-$PN4+$PK4;
$K6=$K5-$KN5+$KK5; $S6=$S5-$SN5+$SK5; $P6=$P5-$PN5+$PK5;






printf("
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den6.$mes6.$god6</span></td>
			<td align='center'><span class='k12'>$KN6</span></td>
			<td align='center'><span class='k12'>$SN6</span></td>
			<td align='center'><span class='k12'>$PN6</span></td>
			<td align='center'><span class='k12'>$KK6</span></td>
			<td align='center'><span class='k12'>$SK6</span></td>
			<td align='center'><span class='k12'>$PK6</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den5.$mes5.$god5</span></td>
			<td align='center'><span class='k12'>$KN5</span></td>
			<td align='center'><span class='k12'>$SN5</span></td>
			<td align='center'><span class='k12'>$PN5</span></td>
			<td align='center'><span class='k12'>$KK5</span></td>
			<td align='center'><span class='k12'>$SK5</span></td>
			<td align='center'><span class='k12'>$PK5</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den4.$mes4.$god4</span></td>
			<td align='center'><span class='k12'>$KN4</span></td>
			<td align='center'><span class='k12'>$SN4</span></td>
			<td align='center'><span class='k12'>$PN4</span></td>
			<td align='center'><span class='k12'>$KK4</span></td>
			<td align='center'><span class='k12'>$SK4</span></td>
			<td align='center'><span class='k12'>$PK4</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den3.$mes3.$god3</span></td>
			<td align='center'><span class='k12'>$KN3</span></td>
			<td align='center'><span class='k12'>$SN3</span></td>
			<td align='center'><span class='k12'>$PN3</span></td>
			<td align='center'><span class='k12'>$KK3</span></td>
			<td align='center'><span class='k12'>$SK3</span></td>
			<td align='center'><span class='k12'>$PK3</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den2.$mes2.$god2</span></td>
			<td align='center'><span class='k12'>$KN2</span></td>
			<td align='center'><span class='k12'>$SN2</span></td>
			<td align='center'><span class='k12'>$PN2</span></td>
			<td align='center'><span class='k12'>$KK2</span></td>
			<td align='center'><span class='k12'>$SK2</span></td>
			<td align='center'><span class='k12'>$PK2</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den1.$mes1.$god1</span></td>
			<td align='center'><span class='k12'>$KN1</span></td>
			<td align='center'><span class='k12'>$SN1</span></td>
			<td align='center'><span class='k12'>$PN1</span></td>
			<td align='center'><span class='k12'>$KK1</span></td>
			<td align='center'><span class='k12'>$SK1</span></td>
			<td align='center'><span class='k12'>$PK1</span></td>
		</tr>
		<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
			<td align='center'><span class='g12'>$den0.$mes0.$god0</span></td>
			<td align='center'><span class='k12'>$KN0</span></td>
			<td align='center'><span class='k12'>$SN0</span></td>
			<td align='center'><span class='k12'>$PN0</span></td>
			<td align='center'><span class='k12'>$KK0</span></td>
			<td align='center'><span class='k12'>$SK0</span></td>
			<td align='center'><span class='k12'>$PK0</span></td>
		</tr>

");




?>
	</table>
</div>