<?php
	$res = mysql_query("SELECT * FROM station WHERE id='$id'",$db);
	$myst = mysql_fetch_array($res);
	do
	{
		$station=$myst['station'];
		$gruppa=$myst['gruppa'];
		$gruppa_remont=$myst['gruppa_remont'];
	}
	while ($myst = mysql_fetch_array($res));
?>
<form action='station_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>Введите / измените данные:</span></td>
	</tr>
   	<tr>
		<td align="right" width="50%">
			<span  class='g14'>Введите название станции:</span>
		</td>
		<td align="left">
			<input name='station' type='text' value='<? echo $station; ?>' size='14' maxlength='50'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Линейная группа для сбоев:</span>
		</td>
		<td align="left">
   				<select name="gruppa">
				<option><? echo $gruppa; ?></option>
				<?php
					$result = mysql_query("SELECT gruppa FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//вывод Названий линейных групп
						printf ("<option>%s</option>",$mystat['gruppa']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Линейная группа для ремонта:</span>
		</td>

		<td align="left">
   				<select name="gruppa_remont">
				<option><? echo $gruppa_remont; ?></option>
				<?php
					$result = mysql_query("SELECT gruppa_remont FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//вывод Названий линейных групп
						printf ("<option>%s</option>",$mystat['gruppa_remont']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='Редактировать'></br></br>
				<input name='id' type='hidden' value='<? echo $id; ?>'>
		</td>
	</tr>
	</table>
</form>