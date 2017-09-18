<table border='0' align='center' cellpadding="0" cellspacing="0">
	<form method='post' action='sboy_stat.php'>
		<tr valign='center' height="80">
			<td align="center" class="g18">»тогова€ таблица сбоев за: 

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
<!--			<td width="40">&nbsp;</td>
			<td align="center" class="g18">до:

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
-->      <td width="20">&nbsp;</td>
			<td align="center" class="g18">
							<input type='submit' class='g14' title='ќтобразить сбои за данный период' value='ѕоказать'>
			</td>
		</tr>
	</form>
</table>