</br>
<?
	$resav = mysql_query ("SELECT * FROM avtootvet WHERE id = '$id'",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
			<td align='center' width='90'><span class='g12'>%s</span></td>
			<td align='center' width='90'><span class='g12'>%s</span></td>
			<td align='center' width='130'><span class='g12'>%s</span></td>
			<td align='center' width='130'><span class='g12'>%s</span></td>
			<td align='center' width='150'><span class='g12'>%s</span></td>
			<td align='center' width='60'><span class='g12'>%s</span></td>
			<td align='center' width='70'><span class='g12'>%s</span></td>
			<td align='center' width='70'><span class='g12'>%s</span></td>
		</tr>
	</table>
	", $rowav['ao'], $rowav['ip'], $rowav['ki'], $rowav['station'], $rowav['rabmesto'], $rowav['vidki'], $rowav['fio'], $rowav['data']);
	}
	while ($rowav = mysql_fetch_array($resav));
?>

	<form action='red_ao.php' method='post' name='inssboy' id='inssboy'>
	<table border='0' cellpadding='12' width='100%'>
	<tr>
		<td colspan='2' align='center'>
				<?php
					printf ("</br></br><span class='g16'> %s, заполните пожалуйста <span class='r16'>все</span> поля формы:</span></br></br>",$fio);
				?>
		</td>
	</tr>

  	<tr>
		<td align="right">
				<span  class='g14'>Автоответ:</span>
		</td>
		<td align="left">
        <?
				printf ("<input name='ao' type='text' value='$ao' size='13' maxlength='13'>");
		?>
		</td>
	</tr>
  	<tr>
		<td align="right">
				<span  class='g14'>IP-адресс:</span>
		</td>
		<td align="left">
        <?
				printf ("<input name='ip' type='text' value='$ip' size='15' maxlength='15'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>КИ:</span>
		</td>
		<td align="left">
   				<select name="ki">
				<?php
				printf ("<option selected>$ki</option>");
					$resust = mysql_query("SELECT * FROM ki ORDER BY id",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['ki']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Станция:</span>
		</td>
		<td align="left">
   				<select name="station">
				<?php
				printf ("<option selected>$station</option>");
					$resust = mysql_query("SELECT station FROM station ORDER BY station",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['station']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>Рабочее место:</span>
		</td>
		<td align="left">
		<?
				printf ("<input name='rabmesto' type='text' value='$rabmesto' size='20' maxlength='20'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>Вид конфигурации:</span>
		</td>
		<td align="left">
   				<select name="vidki">
				<?php
				printf ("<option selected>$vidki</option>");
					$resust = mysql_query("SELECT * FROM vidki ORDER BY id",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//вывод устройств
						printf ("<option>%s</option>",$myust['vidki']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>

   	<tr>
		<td colspan='2' align='center'>
				<input name='submit' type='submit' class='b14' id='submit' value='Редактировать сбой'></br></br>
                <?
				printf("<input name='fio' type='hidden' value='%s'>
						<input name='id' type='hidden' value='%s'>
						<input name='upd' type='hidden' value='%s'>
						<input name='gruppa' type='hidden' value='%s'>",$fio, $id, '6', $gruppa);
				?>
		</td>
	</tr>
	</table>
	</form>