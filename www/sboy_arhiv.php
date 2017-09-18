<!--
<table border='0' align='center' cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" height="30" align="center"><span class="g18">“аблица сбоев</span></td>
	</tr>
	<tr valign="top">
		<td>
			<table border='0' align='center' cellpadding="0" cellspacing="0">
			<form method='post' action='sboy.php'>
				<tr height="70">
					<td align="left">
						<span class="g18">за:</span>
						<select name="zdn">
						<?
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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

   						<select name="zmnt">
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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

   						<select name="zgn">
							<?php
								$resdata = mysql_query("SELECT god FROM data",$db);
								$mydata = mysql_fetch_array($resdata);
								do
								{//вывод дней мес€ца
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
				</tr>
				<tr>
					<td align="center" class="g18">
						<input type='submit' class='g14' title='ќтобразить сбои за данные сутки' value='ѕоказать'>
					</td>
				</tr>
			</form>
			</table>			
		</td>
		<td width="50">&nbsp;</td>
		<td>
			<table border='0' align='center' cellpadding="0" cellspacing="0">
			<form method='post' action='sboy.php'>
				<tr>
					<td align="left">
						<span class="g18">от:</span>
						<select name="dn">
						<?
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT god FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
				</tr>
			    <tr>
			        <td align="left"><span class="g18">до:</span>
						<select name="dk">
						<?php
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT god FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
			    <tr>
					<td align="left"><span class="k12">
						<input type="radio" name="radio" value="1">¬ышло из стро€ или устранено</input><br>
			   	    	<input type="radio" name="radio" value="2">¬ышло из стро€</input><br>
	        			<input type="radio" name="radio" value="3">”странено</input>
			            </span>
					</td>
				</tr>
                <tr>
					<td align="center" class="g18">
						<input type='submit' class='g14' title='ќтобразить сбои за данный период' value='ѕоказать'>
					</td>
				</tr>
			</form>
			</table>	
		</td>
	</tr>
</table>


<br>
<br>
<br>
<br>


-->
<table border='0' align='center' cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" height="30" align="center"><span class="g18">“аблица сбоев</span></td>
	</tr>
	<tr valign="top">
		<td>
			<table border='0' align='center' cellpadding="0" cellspacing="0">
			<form method='post' action='sboy.php'>
				<tr>
					<td align="left">
						<span class="g18">за:</span>
						<select name="zdn">
						<?
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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

   						<select name="zmnt">
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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

   						<select name="zgn">
							<?php
								$resdata = mysql_query("SELECT god FROM data",$db);
								$mydata = mysql_fetch_array($resdata);
								do
								{//вывод дней мес€ца
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
				</tr>
				<tr>
					<td height="70" align="center" class="g18">
						<input type='submit' class='g14' title='ќтобразить сбои за данные сутки' value='ѕоказать'>
					</td>
				</tr>
			</form>
			</table>			
		</td>
		<td width="50">&nbsp;</td>
		<td>
			<table border='0' align='center' cellpadding="0" cellspacing="0">
			<form method='post' action='sboy.php'>
				<tr>
					<td align="left">
						<span class="g18">от:</span>
						<select name="dn">
						<?
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT god FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
					<td width="10" rowspan="2">&nbsp;</td>
					<td rowspan="2" align="left"><span class="k12">
                    <?

					if (isset($_POST['radio']))	{$radio=$_POST['radio'];	if ($radio=='')				{$radio=0;}}
					if($radio<=1)
					{printf ("
						<input type='radio' name='radio' value='1' CHECKED>¬ышло из стро€ или устранено</input><br>
			   	    	<input type='radio' name='radio' value='2'>¬ышло из стро€</input><br>
	        			<input type='radio' name='radio' value='3'>”странено</input>
						");
					}
					if($radio==2)
					{printf ("
						<input type='radio' name='radio' value='1'>¬ышло из стро€ или устранено</input><br>
			   	    	<input type='radio' name='radio' value='2' CHECKED>¬ышло из стро€</input><br>
	        			<input type='radio' name='radio' value='3'>”странено</input>
						");
					}
					if($radio==3)
					{printf ("
						<input type='radio' name='radio' value='1'>¬ышло из стро€ или устранено</input><br>
			   	    	<input type='radio' name='radio' value='2'>¬ышло из стро€</input><br>
	        			<input type='radio' name='radio' value='3' CHECKED>”странено</input>
						");
					}
					?>
			            </span>
					</td>
				</tr>
			    <tr>
			        <td align="left"><span class="g18">до:</span>
						<select name="dk">
						<?php
							$resdata = mysql_query("SELECT den FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT id, mes FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
						<?php
							$resdata = mysql_query("SELECT god FROM data",$db);
							$mydata = mysql_fetch_array($resdata);
							do
							{//вывод дней мес€ца
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
                <tr>
					<td colspan="3" height="50" align="center" class="g18">
						<input type='submit' class='g14' title='ќтобразить сбои за данный период' value='ѕоказать'>
					</td>
				</tr>
			</form>
			</table>	
		</td>
	</tr>
</table>
<!--



<br>
<br>
<br>
<br>





<table border='0' align='center' cellpadding="0" cellspacing="0">
	<form method='post' action='sboy.php'>
	<tr>
		<td colspan="3" align="center"><span class="g18">“аблица сбоев</span></td>
	</tr>
	<tr height="70">
		<td align="left">
			<span class="g18">за:</span>
			<select name="zdn">
				<?
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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

   			<select name="zmnt">
				<?php
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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

   			<select name="zgn">
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
		<td width="20">&nbsp;</td>
		<td align="center" class="g18">
			<input type='submit' class='g14' title='ќтобразить сбои за данные сутки' value='ѕоказать'>
		</td>
	</tr>
	</form>
   	<form method='post' action='sboy.php'>
	<tr>
		<td align="left">
			<span class="g18">от:</span>
			<select name="dn">
				<?
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
				<?php
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
		<td rowspan="3" width="20">&nbsp;</td>
		<td rowspan="3" align="center" class="g18">
			<input type='submit' class='g14' title='ќтобразить сбои за данный период' value='ѕоказать'>
		</td>
	</tr>
    <tr>
        <td align="left"><span class="g18">до:</span>
			<select name="dk">
				<?php
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
				<?php
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//вывод дней мес€ца
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
    <tr>
		<td align="left"><span class="k12">
			<input type="radio" name="radio" value="1">¬ышло из стро€ или устранено</input><br>
   	    	<input type="radio" name="radio" value="2">¬ышло из стро€</input><br>
	        <input type="radio" name="radio" value="3">”странено</input>
            </span>
		</td>
	</tr>
	</form>
</table>
<br>
-->