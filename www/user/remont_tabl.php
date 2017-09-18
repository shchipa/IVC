<table border="0" width="100%" cellpadding="3" cellspacing="0">
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td>

	        <div style='background:#eeeeee;'>
			<table border="1" width="100%" cellpadding="2" cellspacing="0">
				<tr>
					<td height="100%" rowspan="2" align='center'><span class='k12'><strong>Линейная группа</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Системный блок</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Сервер</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Монитор</strong></td>
				</tr>
				<tr>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
				</tr>
				<?
				$n1=0;	$n2=0;	$n3=0;	$n4=0;
				$s1=0;	$s2=0;	$s3=0;	$s4=0;
				$m1=0;	$m2=0;	$m3=0;	$m4=0;


$data = mktime(0, 0, 0, date("m")  , date("d"), date("Y")); //текущая дата
$godnow = strftime("%Y", $data);
//echo "$godnow";

for ($god=2009; $god<$godnow; $god++)
{
				printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");
				printf("<td align='center'><span class='k12'>Всего %s:</span></td>", $god);

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && ngod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);

						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && sost='отремонтирован' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);

						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && sost='возврат без ремонта' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && ngod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && sost='отремонтирован' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && sost='возврат без ремонта' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && ngod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && sost='отремонтирован' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && sost='возврат без ремонта' && kgod=$god",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);

						printf("</tr>");
					}
				?>
			</table>
            </div>
<br />


	        <div style='background:#eeeeee;'>
			<table border="1" width="100%" cellpadding="2" cellspacing="0">
				<tr>
					<td height="100%" rowspan="2" align='center'><span class='k12'><strong>Линейная группа</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Системный блок</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Сервер</strong></td>
					<td height="100%" colspan="4" align='center'><span class='k12'><strong>Монитор</strong></td>
				</tr>
				<tr>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
					<td height="100%" align='center'><span class='k12'>поступило</td>
					<td height="100%" align='center'><span class='k12'>отремонтированно</td>
					<td height="100%" align='center'><span class='k12'>возврат без ремонта</td>
					<td height="100%" align='center'><span class='k12'>остаток</td>
				</tr>
				<?
				
//echo "$godnow";
$textgod = "kgod!='2009'";
for ($god=2010; $god<$godnow; $god++)
{
	$textgod = $textgod." && kgod!='$god'";
}
//echo "$textgod";

				$n1=0;	$n2=0;	$n3=0;	$n4=0;
				$s1=0;	$s2=0;	$s3=0;	$s4=0;
				$m1=0;	$m2=0;	$m3=0;	$m4=0;
					$resav = mysql_query ("SELECT gruppa_remont FROM gruppa ORDER BY id",$db);
					$rowav = mysql_fetch_array($resav);
					do
					{
						printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['gruppa_remont']);
						$gruppa=$rowav['gruppa_remont'];

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);
						$n1=$n1+$i1;

						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && sost='отремонтирован' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);
						$n2=$n2+$i2;

						$res = mysql_query ("SELECT * FROM remont WHERE (ustroystvo='Системный блок' or ustroystvo='Ноутбук') && sost='возврат без ремонта' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);
						$n3=$n3+$i3;

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);
						$n4=$n4+$i4;

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);
						$s1=$s1+$i1;

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && sost='отремонтирован' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);
						$s2=$s2+$i2;

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Сервер' && sost='возврат без ремонта' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);
						$s3=$s3+$i3;

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);
						$s4=$s4+$i4;

						$i1=0;	$i2=0;	$i3=0;	$i4=0;
						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i1++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i1);
						$m1=$m1+$i1;

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && sost='отремонтирован' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i2++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i2);
						$m2=$m2+$i2;

						$res = mysql_query ("SELECT * FROM remont WHERE ustroystvo='Монитор' && sost='возврат без ремонта' && gruppa='$gruppa' && $textgod",$db);
						$row = mysql_fetch_array($res);
						do
						{
							if (isset($row['id']))	{$i3++;}
						}
						while ($row = mysql_fetch_array($res));
						printf("<td align='center'><span class='k12'>%s</span></td>", $i3);
						$m3=$m3+$i3;

						$i4=$i1-$i2-$i3;
						printf("<td align='center'><span class='k12'>%s</span></td>", $i4);
						$m4=$m4+$i4;

						printf("</tr>");
					}
					while ($rowav = mysql_fetch_array($resav));
					printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
								<td align='center'><span class='k12'><strong>ВСЕГО:</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
								<td align='center'><span class='k12'><strong>%s</strong></td>
					</tr>", $n1, $n2, $n3, $n4, $s1, $s2, $s3, $s4, $m1, $m2, $m3, $m4);
				?>
			</table>
            </div>
		</td>
	</tr>
</table>
</span>