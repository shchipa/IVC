<table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
   	<form action='remont_viborka.php' method='post' name='poisk' id='poisk'>
		<caption align='top' class="g18">Условия поиска</caption>
			<tr>
					<td align="right" width="49%" class="g16">№ инвентарный</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='invnomer' type='text' value='<? echo $invnomer1; ?>' size='20' maxlength='20'>
					</td>
			</tr>

			<tr>
					<td align="right">
						<span  class='g14'>Устройство</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="ustroystvo">
						<option selected>Выберите устройство...</option>
						<?php
							$resust = mysql_query("SELECT ustroystvo FROM ustroystvo WHERE remont = 1 ORDER BY ustroystvo",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['ustroystvo']) && $myust['ustroystvo'] == $ustroystvo)
								{
									printf ("<option selected>%s</option>",$ustroystvo);
								}
								else
								{
									printf ("<option>%s</option>",$myust['ustroystvo']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
						</select>
					</td>
			</tr>

			<tr>
					<td align="right">
						<span  class='g14'>Состояние</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="sost">
						<option selected>Выберите состояние...</option>
						<?php
							$resust = mysql_query("SELECT * FROM sost",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['sost']) && $myust['sost'] == $sost)
								{
									printf ("<option selected>%s</option>",$sost);
								}
								else
								{
									printf ("<option>%s</option>",$myust['sost']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
						</select>
					</td>
			</tr>

			<tr>
					<td align="right">
						<span  class='g14'>Линейная группа</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="gruppa">
						<option selected>Выберите группу...</option>
						<?php
							$resust = mysql_query("SELECT gruppa_remont FROM gruppa",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['gruppa_remont']) && $myust['gruppa_remont'] == $gruppa)
								{
									printf ("<option selected>%s</option>",$gruppa);
								}
								else
								{
									printf ("<option>%s</option>",$myust['gruppa_remont']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
						</select>
					</td>
			</tr>

			<tr>
					<td align="right">
						<span  class='g14'>Станция</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="station">
						<option selected>Выберите станцию...</option>
						<?php
							$resust = mysql_query("SELECT station FROM station ORDER BY station",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['station']) && $myust['station'] == $station)
								{
									printf ("<option selected>%s</option>",$station);
								}
								else
								{
									printf ("<option>%s</option>",$myust['station']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
						</select>
					</td>
			</tr>

			<tr>
					<td align="right" width="49%" class="g16">Неисправные узлы</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='polomka' type='text' value='<? echo $polomka1; ?>' size='20' maxlength='30'>
					</td>
			</tr>

			<tr>
					<td align="right" width="49%" class="g16">Необходимые запчасти</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='zch' type='text' value='<? echo $zch1; ?>' size='20' maxlength='30'>
					</td>
			</tr>

			<tr class="k12">
           		<td colspan="3" align="center">
					<input name='submit' type='submit' class='b14' id='submit' value='Поиск'></br></br>
                    <input name='flag' type="hidden" value="1">
				</td>
			</tr>
	</form>
</table>



<br />
<br />





<div style='background:#eeeeee;'>
	<table border="1" width="100%" cellpadding="2" cellspacing="0">
		<caption align='top' class="g18">Выборка актов</caption>
			<tr>
				<td align='center' width='80'><span class='g12'>Линейная<br>группа</span></td>
				<td align='center' width='120'><span class='g12'>Станция</span></td>
				<td align='center' width='80'><span class='g12'>Служба</span></td>
				<td align='center' width='70'><span class='g12'>Рабочее место</span></td>
				<td align='center' width='80'><span class='g12'>Устройство</span></td>
				<td align='center' width='80'><span class='g12'>Состояние</span></td>
				<td align='center' width='80'><span class='g12'>Дата<br>поступления</span></td>
				<td align='center' width='80'><span class='g12'>Дата<br>возврата</span></td>
				<td align='center' width='80'><span class='g12'>№ акта</span></td>
				<td align='center' width='80'><span class='g12'>№ инвентарный</span></td>
				<td align='center' width='120'><span class='g12'>Характеристика</span></td>
				<td align='center' width='100'><span class='g12'>Неисправные узлы</span></td>
				<td align='center' width='60'><span class='g12'>Необходимые<br>запчасти</span></td>
			</tr>

			<?
				$text = "invnomer >= 0";

				if(isset($ustroystvo))
				{
					$text = "ustroystvo = '$ustroystvo'";
				}

				if($text == "invnomer >= 0")
				{
					if(isset($sost))
						{$text = "sost = '$sost'";}
				}
				else
				{
					if(isset($sost))
					{$text = $text." AND sost = '$sost'";}
				}

				if($text == "invnomer >= 0")
				{
					if(isset($gruppa))
						{$text = "gruppa = '$gruppa'";}
				}
				else
				{
					if(isset($gruppa))
					{$text = $text." AND gruppa = '$gruppa'";}
				}

				if($text == "invnomer >= 0")
				{
					if(isset($station))
						{$text = "station = '$station'";}
				}
				else
				{
					if(isset($station))
					{$text = $text." AND station = '$station'";}
				}



				if ($flag > 0)
				{

//echo $text;
//echo $gn."-".$mn."-".$dn." ".$gk."-".$mk."-".$dk;
					$resav = mysql_query ("SELECT * FROM remont WHERE invnomer LIKE '%$invnomer%' AND polomka LIKE '%$polomka%' AND zch LIKE '%$zch%' AND $text ORDER BY akt DESC",$db);
					
//AND (vdate BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk')
					
					$rowav = mysql_fetch_array($resav);
					do
					{
						printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");

						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['gruppa']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['station']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['slujba']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['rabmesto']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['ustroystvo']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['sost']);
						printf("<td align='center'><span class='k12'>%s.%s.%s</span></td>", $rowav['nden'], $rowav['nmes'], $rowav['ngod']);
						printf("<td align='center'><span class='k12'>%s.%s.%s</span></td>", $rowav['kden'], $rowav['kmes'], $rowav['kgod']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['akt']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['invnomer']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav[' haraktustr']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['polomka']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['zch']);
						printf("</tr>");
					}
					while ($rowav = mysql_fetch_array($resav));
				}
			?>
	</table>
</div>