<?
if (isset($_GET['sort1']))	{$sort1 = $_GET['sort1'];	if ($sort1=='')		{unset($sort1);}}
if (isset($_GET['sort2']))	{$sort2 = $_GET['sort2'];	if ($sort2=='')		{unset($sort2);}}
if (isset($_GET['sort3']))	{$sort3 = $_GET['sort3'];	if ($sort3=='')		{unset($sort3);}}
if (isset($_GET['sort4']))	{$sort4 = $_GET['sort4'];	if ($sort4=='')		{unset($sort4);}}

if (!isset($sort1))
{
	$text='akt DESC';
}

if (isset($sort1))
{
		$result = mysql_query("SELECT * FROM sort WHERE sort='$sort1'",$db);
		$mysort = mysql_fetch_array($result);
		$text = $mysort['data'];
}

if (isset($sort2))
{
		$result = mysql_query("SELECT * FROM sort WHERE sort='$sort2'",$db);
		$mysort = mysql_fetch_array($result);
		$text1=$text;
		$text=$text1.", ".$mysort['data'];
}

if (isset($sort3))
{
		$result = mysql_query("SELECT * FROM sort WHERE sort='$sort3'",$db);
		$mysort = mysql_fetch_array($result);
		$text2=$text;
		$text=$text2.", ".$mysort['data'];
}

if (isset($sort4))
{
		$result = mysql_query("SELECT * FROM sort WHERE sort='$sort4'",$db);
		$mysort = mysql_fetch_array($result);
		$text3=$text;
		$text=$text3.", ".$mysort['data'];
}

?>

<table border='0' width="100%" cellpadding="0" cellspacing="0">
	<tr valign='center'>
		<td align="center" height="50" class="g18">Акты</td>
		<?
			printf ("<td align='right' height='50' width='130'><a href='remont_print_vse.php?text=%s'><span class='p2'>форма для печати</span></a></td>", $text);
		?>
	</tr>
</table>


<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>Сортировка 1:</td>
		<td>
			<div>
   				<select name="sort1" onChange="top.location.href = this.options[this.selectedIndex].value">
					<option selected disabled>Выберите параметр...</option>
                    <?php
						$result = mysql_query('SELECT sort FROM sort',$db);
						$mysort = mysql_fetch_array($result);
						do
						{
							if (isset($sort1) && $mysort['sort'] == $sort1)
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s' selected>%s</option>", $sort1, $sort2, $sort3, $sort4, $sort1);
							}
							else
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s'>%s",$mysort['sort'], $sort2, $sort3, $sort4, $mysort['sort']);
							}
						}
							while ($mysort = mysql_fetch_array($result));
   			     	?>
				</select>
			</div>
		</td>
		<td width="40" align="right"> 2:</td>
		<td>
			<div>
   				<select name="sort2" onChange="top.location.href = this.options[this.selectedIndex].value">
					<option selected disabled>Выберите параметр...</option>
                    <?php
						$result = mysql_query('SELECT sort FROM sort',$db);
						$mysort = mysql_fetch_array($result);
						do
						{
							if (isset($sort2) && $mysort['sort'] == $sort2)
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s' selected>%s</option>", $sort1, $sort2, $sort3, $sort4, $sort2);
							}
							else
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s'>%s", $sort1, $mysort['sort'], $sort3, $sort4, $mysort['sort']);
							}
						}
							while ($mysort = mysql_fetch_array($result));
   			     	?>
				</select>
			</div>
		</td>
		<td width="40" align="right"> 3:</td>
		<td>
			<div>
   				<select name="sort3" onChange="top.location.href = this.options[this.selectedIndex].value">
					<option selected disabled>Выберите параметр...</option>
                    <?php
						$result = mysql_query('SELECT sort FROM sort',$db);
						$mysort = mysql_fetch_array($result);
						do
						{
							if (isset($sort3) && $mysort['sort'] == $sort3)
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s' selected>%s</option>", $sort1, $sort2, $sort3, $sort4, $sort3);
							}
							else
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s'>%s", $sort1, $sort2, $mysort['sort'], $sort4, $mysort['sort']);
							}
						}
							while ($mysort = mysql_fetch_array($result));
   			     	?>
				</select>
			</div>
		</td>
		<td width="40" align="right"> 4:</td>
		<td>
			<div>
   				<select name="sort3" onChange="top.location.href = this.options[this.selectedIndex].value">
					<option selected disabled>Выберите параметр...</option>
                    <?php
						$result = mysql_query('SELECT sort FROM sort',$db);
						$mysort = mysql_fetch_array($result);
						do
						{
							if (isset($sort4) && $mysort['sort'] == $sort4)
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s' selected>%s</option>", $sort1, $sort2, $sort3, $sort4, $sort4);
							}
							else
							{
								printf ("<option value='remont_vse.php?sort1=%s&sort2=%s&sort3=%s&sort4=%s'>%s", $sort1, $sort2, $sort3, $mysort['sort'], $mysort['sort']);
							}
						}
							while ($mysort = mysql_fetch_array($result));
   			     	?>
				</select>
			</div>
		</td>
	</tr>
</table>

	<div style='background:#eeeeee;'>
	<table border='1' cellpadding="0" cellspacing="1">
<?
	printf("
		<tr  valign='center'>
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
		");

			$resav = mysql_query ("SELECT * FROM remont ORDER BY $text",$db);
			$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";' title='ФИО Спец. %s'>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s-%s-%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
						<td><span class='k12'>%s</span></td>
					</tr>
				", $rowav['fiospetc'], $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['sost'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['kden'], $rowav['kmes'], $rowav['kgod'], $rowav['akt'], $rowav['invnomer'], $rowav['haraktustr'], $rowav['polomka'], $rowav['zch']);
				}
				while ($rowav = mysql_fetch_array($resav));

		?>
		</table>
        </div>
</br>