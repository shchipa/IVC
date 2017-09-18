<?php 
if (isset($_POST['check']))			{$check = $_POST['check'];					if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];						if ($id=='')			{$id = 0;}}
?>

<blockquote><h1><em><p class='g18'>Редактирование автоответа</em></h1> </p></blockquote>
<table width="850" class="bor" border='1' cellpadding="1" cellspacing="0" align="center"> 
			<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
				<td align='center' width='90'><span><b>Автоответ сервера</b></span></td>
				<td align='center' width='90'><span ><b>Автоответ номер</b></span></td>
				<td align='center' width='150'><span ><b>Группа</b></span></td>
				<td align='center' width='200'><span ><b>Станция</b></span></td>
				<td align='center' width='200'><span><b>Рабочее место</b></span></td>
				<td align='center' width='40'><span ><b>Служба</b></span></td>
				<td align='center' width='100'><span ><b>IP</b></span></td>
			</tr>
 <? 
 if (isset($check) && isset($id))
{
	$resav = mysql_query ("SELECT * FROM abonent WHERE id = '$id'",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
		<tr valign='center'>
			<td align='center' width='100'><span class='g12'>%s</td>
			<td align='center' width='20'><span class='g12'>%s</td>
			<td align='center' width='100'><span class='g12'>%s</td>
			<td align='center' width='100'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s</td>
			<td align='center' width='60'><span class='g12'>%s</td>
		</tr>
		<tr valign='center'>
			</tr>
<br>
	", $rowav['avtootvet_ser'], $rowav['avtootvet_nom'], $rowav['gruppa'], $rowav['station'], $rowav['rabmesto'], $rowav['slujba'], $rowav['ip']);
	$avtootvet_ser = $rowav['avtootvet_ser'];
	$avtootvet_nom = $rowav['avtootvet_nom'];
	$station = $rowav['station'];
	$slujba = $rowav['slujba'];
	$rabmesto = $rowav['rabmesto'];
	$ip = $rowav['ip'];

}
	while ($rowav = mysql_fetch_array($resav));
}

else 
{
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>Будьте внимательнее!!! Необходимо отметить \"птичкой\" акт, который Вы желаете отредактировать.</p>";
	unset($id);
}

?>
</table>

<form action="avtootvet_insert.php" method="post" name="avtootvetu">
<table align="center" border='0' cellpadding='12' width='370'>
  	<tr>
		<td width="125" align="right" class='g14'>Автоответ:</td>
		<td align="left" width="191">
        	(<input name='avtoonvet_ser1' type='text' title=" Например: (12&#160 3456&#160 78)" class='c1' value='<?php printf("%s",$avtootvet_ser); ?>' size='8'  maxlength='9' readonly="readonly">)
            <input name='avtoonvet_nom1' type='text' class='c1' title="Например: 05 или 48" value='<?php printf("%s",$avtootvet_nom); ?>' size='2' maxlength='2' readonly="readonly">
		</td>
	</tr>

   	<tr>
		<td align="right" class='g14'>Станция:</td>
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
		<td align="right"  class='g14'>Рабочеее место:</td>
		<td align="left">
    		<input  name="rabmesto" type="text" size="20" maxlength="20" value='<?php $resav1 = mysql_query ("SELECT rabmesto FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' and avtootvet_nom='$avtootvet_nom'",$db);
			$rowav1 = mysql_fetch_array($resav1);
			{
				printf("%s",$rowav1['rabmesto']); 
			}?>' ></td>
	</tr>

	<tr>
		<td align="right" class='g14'>Служба:</td>
		<td align="left">
	    <input name="slujba" type="text" size="20" maxlength="20"  value='<?php $resav2 = mysql_query ("SELECT slujba FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' and avtootvet_nom='$avtootvet_nom'",$db);
			$rowav2 = mysql_fetch_array($resav2);
			{
				printf("%s",$rowav2['slujba']); 
			}?>' ></td>
	</tr>

	<tr>
		<td align="right" class='g14'>IP адрес:</td>
		<td align="left"><input  name="ip" type="text" size="15" maxlength="15" value='<?php $resav3 = mysql_query ("SELECT ip FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' and avtootvet_nom='$avtootvet_nom'",$db);
			$rowav3 = mysql_fetch_array($resav3);
			{
				printf("%s",$rowav3['ip']); 
			}?>'></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input name="submit" type="submit" class="b14" value="Изменить" id="submit">
    								<input name='id' type='hidden' value='<? echo $id; ?> '>
		</td>
	</tr>
</table>
</form>