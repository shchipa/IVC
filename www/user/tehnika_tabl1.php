<table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
   	<form action='tehnika.php' method='post' name='poisk' id='poisk'>
		<caption align='top' class="g18">������� ������</caption>
			<tr>
					<td align="right" width="49%" class="g16">� �����������</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='invnomer' type='text' value='<? echo $invnomer1; ?>' size='20' maxlength='20'>
					</td>
			</tr>
			<tr>
					<td align="right" width="49%" class="g16">�������������</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<input name='otvetstvenniy' type='text' value='<? echo $otvetstvenniy1; ?>' size='20' maxlength='20'>
					</td>
			</tr>

			<tr>
					<td align="right">
						<span  class='g14'>����������</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="ustroystvo">
						<option selected>�������� ����������...</option>
						<?php
							$resust = mysql_query("SELECT ustroystvo FROM ustroystvo ORDER BY ustroystvo",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//����� ���������
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
						<span  class='g14'>���������</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="sost">
						<option selected>�������� ���������...</option>
						<?php
							$resust = mysql_query("SELECT * FROM sost",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//����� ���������
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
						<span  class='g14'>�������� ������</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="gruppa">
						<option selected>�������� ������...</option>
						<?php
							$resust = mysql_query("SELECT * FROM gruppa",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//����� ���������
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
						<span  class='g14'>�������</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
   						<select name="station">
						<option selected>�������� �������...</option>
						<?php
							$resust = mysql_query("SELECT station FROM station ORDER BY station",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//����� ���������
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
						<span  class='g14'>���� ����� � ������������</span>
					</td>
					<td width="10">&nbsp;</td>
					<td align="left">
						<table border='0' cellpadding="0" cellspacing="0">
							<tr>
								<td align="left">
									<span class="g18">��:</span>
									<select name="dn">
									<option selected>����</option>
									<?
										$resdata = mysql_query("SELECT den FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
									<option selected>�����</option>
									<?php
										$resdata = mysql_query("SELECT id, mes FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
									<option selected>���</option>
									<?php
										$resdata = mysql_query("SELECT god FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
						        <td align="left"><span class="g18">��:</span>
									<select name="dk">
									<option selected>����</option>
									<?php
										$resdata = mysql_query("SELECT den FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
									<option selected>�����</option>
									<?php
										$resdata = mysql_query("SELECT id, mes FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
									<option selected>���</option>
									<?php
										$resdata = mysql_query("SELECT god FROM data",$db);
										$mydata = mysql_fetch_array($resdata);
										do
										{//����� ���� ������
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
					<input name='submit' type='submit' class='b14' id='submit' value='�����'></br></br>
				</td>
			</tr>
	</form>
</table>



<br />
<br />





<div style='background:#eeeeee;'>
	<table border="1" width="100%" cellpadding="2" cellspacing="0">
		<caption align='top' class="g18">�������</caption>
			<tr class="k12">
					<th align='center' width="80">�<br />�����������</th>
					<th align='center' width="90">�����������<br />�������������<br />����</th>
					<th align='center' width="100">����������</th>
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
						printf("<td align='center'><span class='k12' title='�������� ������ %s'>%s</span></td>", $rowav['gruppa'], $rowav['station']);
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