<br /> 
<?
		switch ($_SESSION['User'])
		{
			case 0:
			{
				printf("<br />");
			}
			break;
			case 3:
			{
				printf("<br />");
			}
			break;
			case 7:
			{
				printf("<br />");
			}
			break;
			case 9:
			{
				printf("<br />");
			}
			break;
			case 11:
			{
				include_once ("tehnika_history_form_redaktirovanie.php");
			}
			break;
			case 13:
			{
				include_once ("tehnika_history_form_redaktirovanie.php");
			}
			break;
			case 15:
			{
				include_once ("tehnika_history_form_redaktirovanie.php");
			}
			break;
			case 21:
			{
				include_once ("tehnika_history_form_redaktirovanie.php");
			}
			break;

			default:
			{
				printf("<br />");
			}
			break;
		}
?>

<div style='background:#eeeeee;'>
	<table border='1' cellpadding='2' cellspacing='0'>
		<caption align='top' class='g18'>История</caption>
			<tr class="k12">
					<th align='center' width="80">Дата</th>
					<th align='center' width="80">№<br />инвентарный</th>
					<th align='center' width="90">Материально<br />ответственное<br />лицо</th>
					<th align='center' width="100">Устройство</th>
				    <th align='center'>Характеристика<br />(модель)</th>
					<td align='center'>Станция</td>
					<td align='center'>Служба</td>
					<td align='center'>Рабочее<br />место</td>
					<td align='center'>Наименование<br />(бухгалтерия)</td>
					<td align='center'>Состояние</td>
					<td align='center'>Дата<br />ввода в<br />эксплуатацию</td>
					<td align='center'>Первоначальная<br />стоимость</td>
					<td align='center'>Нормативный<br />срок<br />эксплуатации</td>
					<td align='center'>Дополнительная<br />информация</td>
			</tr>

			<?
					$resav = mysql_query ("SELECT * FROM history WHERE invnomer = '$invnomer' ORDER BY id DESC",$db);
					$rowav = mysql_fetch_array($resav);
					do
					{
						printf("<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>");

						printf("<td align='center'><span class='k12'><b>%s</b></span></td>", $rowav['date']);
						printf("<td align='center'><span class='k12'>%s</span></td>", $rowav['invnomer']);
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