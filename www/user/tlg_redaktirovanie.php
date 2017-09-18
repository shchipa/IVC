<?php
	$res = mysql_query("SELECT * FROM tlg WHERE id='$id'",$db);
	$myst = mysql_fetch_array($res);
	do
	{
		$nomer=$myst['nomer'];
		$dat=$myst['dat'];
		$station=$myst['station'];
		$tlg=$myst['tlg'];
		$mery=$myst['mery'];
	}
	while ($myst = mysql_fetch_array($res));
?>
<form action='tlg_insert.php' method='post' name='instlg' id='instlg'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>Введите / измените данные:</span></td>
	</tr>

   	<tr>
		<td align="right">
			<span  class='g14'>Номер телеграммы:</span>
		</td>
		<td align="left">
			<input name='nomer' type='text' value='<? echo $nomer; ?>' size='10' maxlength='10'>
		</td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>Дата телеграммы в формате <span  class='r14'>ГГГГ-ММ-ДД</span>:</span>
		</td>
		<td align="left">
			<input name='dat' type='text' value='<? echo $dat; ?>' size='10' maxlength='10'>
		</td>
	</tr>
	<tr>
		<td align="right">
				<span  class='g14'>Станция:</span>
		</td>
		<td align="left">
   				<select name="station">
				<option><? echo $station; ?></option>
				<?php
					$result = mysql_query("SELECT station FROM station",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//вывод Названий станций
						printf ("<option>%s</option>",$mystat['station']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>
		</td>
	</tr>
	<tr>
		<td align="right">
			<span  class='g14'>Текст телеграммы:</span>
		</td>
		<td align="left">
	        <textarea name='tlg' rows="8" cols="40"><? echo $tlg; ?></textarea></br></br>
		</td>
	</tr>
	<tr>
		<td align="right">
			<span  class='g14'>Принятые меры:</span>
		</td>
		<td align="left">
	        <textarea name='mery' rows="4" cols="40"><? echo $mery; ?></textarea></br></br>
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