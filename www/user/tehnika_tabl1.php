<table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
   	<form action='tehnika.php' method='post' name='poisk' id='poisk'>
		<caption align='top' class="g18">Условия поиска</caption>
			<tr>
					<td align="right" width="49%" class="g16">№ инвентарный</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='invnomer' type='text' value='<? echo $invnomer1; ?>' size='20' maxlength='20'>
					</td>
			</tr>
			<tr>
					<td align="right" width="49%" class="g16">Ответственный</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='otvetstvenniy' type='text' value='<? echo $otvetstvenniy1; ?>' size='20' maxlength='20'>
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
							$resust = mysql_query("SELECT ustroystvo FROM ustroystvo ORDER BY ustroystvo",$db);
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
							$resust = mysql_query("SELECT * FROM gruppa",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['gruppa']) && $myust['gruppa'] == $gruppa)
								{
									printf ("<option selected>%s</option>",$gruppa);
								}
								else
								{
									printf ("<option>%s</option>",$myust['gruppa']);
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
					<td align="right">
						<span  class='g14'>Дата ввода в эксплуатацию</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<table border='0' cellpadding="0" cellspacing="0">
							<tr>
								<td align="left">
									<span class="g18">от:</span>
									<select name="dn">
									<option selected>день</option>
									<?
										$resdata = mysql_query("SELECT den FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['den']) && $mydata['den'] < $dn)
											{printf ("<option>%s</option>",$mydata['den']);}
											if (isset($mydata['den']) && $mydata['den'] == $dn)
											{printf ("<option selected>%s</option>",$dn);}
											if (isset($mydata['den']) && $mydata['den']>$dn)
											{printf ("<option>%s</option>",$mydata['den']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
			   		     			?>
									</select>

			   						<select name="mnt">
									<option selected>месяц</option>
									<?php
										$resdata = mysql_query("SELECT id, mes FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['mes']) && $mydata['id'] < $mn)
											{printf ("<option>%s</option>",$mydata['mes']);}
											if (isset($mydata['mes']) && $mydata['id'] == $mn)
											{printf ("<option selected>%s</option>",$mydata['mes']);}
											if (isset($mydata['mes']) && $mydata['id']>$mn)
											{printf ("<option>%s</option>",$mydata['mes']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
		   					     	?>
									</select>

						   			<select name="gn">
									<option selected>год</option>
									<?php
										$resdata = mysql_query("SELECT god FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['god']) && $mydata['god'] < $gn)
											{printf ("<option>%s</option>",$mydata['god']);}
											if (isset($mydata['god']) && $mydata['god'] == $gn)
											{printf ("<option selected>%s</option>",$gn);}
											if (isset($mydata['god']) && $mydata['god']>$gn)
											{printf ("<option>%s</option>",$mydata['god']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
					   		     	?>
									</select>
								</td>
						        <td align="left"><span class="g18">до:</span>
									<select name="dk">
									<option selected>день</option>
									<?php
										$resdata = mysql_query("SELECT den FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['den']) && $mydata['den'] < $dk)
											{printf ("<option>%s</option>",$mydata['den']);}
											if (isset($mydata['den']) && $mydata['den'] == $dk)
											{printf ("<option selected>%s</option>",$dk);}
											if (isset($mydata['den']) && $mydata['den']>$dk)
											{printf ("<option>%s</option>",$mydata['den']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
   		    			 			?>
									</select>

						   			<select name="mkt">
									<option selected>месяц</option>
									<?php
										$resdata = mysql_query("SELECT id, mes FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['mes']) && $mydata['id'] < $mk)
											{printf ("<option>%s</option>",$mydata['mes']);}
											if (isset($mydata['mes']) && $mydata['id'] == $mk)
											{printf ("<option selected>%s</option>",$mydata['mes']);}
											if (isset($mydata['mes']) && $mydata['id']>$mk)
											{printf ("<option>%s</option>",$mydata['mes']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
		   		     				?>
									</select>

						   			<select name="gk">
									<option selected>год</option>
									<?php
										$resdata = mysql_query("SELECT god FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//вывод дней месяца
											if (isset($mydata['god']) && $mydata['god'] < $gk)
											{printf ("<option>%s</option>",$mydata['god']);}
											if (isset($mydata['god']) && $mydata['god'] == $gk)
											{printf ("<option selected>%s</option>",$gk);}
											if (isset($mydata['god']) && $mydata['god']>$gk)
											{printf ("<option>%s</option>",$mydata['god']);}
										}
										while ($mydata = mysql_fetch_array($resdata));
					   		     	?>
									</select>
								</td>
							</tr>
						</table>	
					</td>
			</tr>




			<tr class="k12">
           		<td colspan="3" align="center">
					<input name='submit' type='submit' class='b14' id='submit' value='Поиск'></br></br>
				</td>
			</tr>
	</form>
</table>



<br />
<br />





<div style='background:#eeeeee;'>
	<table border="1" width="100%" cellpadding="2" cellspacing="0">
		<caption align='top' class="g18">Выборка</caption>
			<tr class="k12">
					<th align='center' width="80">№<br />инвентарный</th>
					<th align='center' width="90">Материально<br />ответственное<br />лицо</th>
					<th align='center' width="100">Устройство</th>
				    <th align='center'>Характеристика<br />(модель)</th>
					<td align='center'>Станция</td>
					<td align='center'>Служба</td>
					<td align='center'>Рабочее <br /> место</td>
					<td align='center'>Наименование<br />(бухгалтерия)</td>
					<td align='center'>Состояние</td>
					<td align='center'>Дата<br />ввода в<br />эксплуатацию</td>
					<td align='center'>Первоначальная<br />стоимость</td>
					<td align='center'>Нормативный<br />срок<br />эксплуатации</td>
					<td align='center'>Дополнительная<br />информация</td>
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





//echo $text;
//echo $gn."-".$mn."-".$dn." ".$gk."-".$mk."-".$dk;
					$resav = mysql_query ("SELECT * FROM tehnika WHERE invnomer LIKE '$invnomer' AND otvetstvenniy LIKE '$otvetstvenniy' AND $text AND (vdate BETWEEN  '$gn-$mn-$dn' AND '$gk-$mk-$dk') ORDER BY invnomer",$db);
					$rowav = mysql_fetch_array($resav);
					do
					{
						printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");

						printf("<td align='center'><a href='tehnika_history.php?invnomer=%s'><span class='k12'><b>%s</b></span></a></td>", $rowav['invnomer'], $rowav['invnomer']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['otvetstvenniy']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['ustroystvo']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['harakteristika']);
						printf("<td align='center'><span class='k12' title='линейная группа %s'>%s</span></td>", $rowav['gruppa'], $rowav['station']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['slujba']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['rabmesto']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['naimenovanie']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['sost']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['vdate']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['stoimost']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['srok']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['dopinfo']);
						printf("</tr>");
					}
					while ($rowav = mysql_fetch_array($resav));
			?>
	</table>
</div>