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
		<caption align='top' class='g18'>�������</caption>
			<tr class="k12">
					<th align='center' width="80">����</th>
					<th align='center' width="80">�<br />�����������</th>
					<th align='center' width="90">�����������<br />�������������<br />����</th>
					<th align='center' width="100">����������</th>
				    <th align='center'>��������������<br />(������)</th>
					<td align='center'>�������</td>
					<td align='center'>������</td>
					<td align='center'>�������<br />�����</td>
					<td align='center'>������������<br />(�����������)</td>
					<td align='center'>���������</td>
					<td align='center'>����<br />����� �<br />������������</td>
					<td align='center'>��������������<br />���������</td>
					<td align='center'>�����������<br />����<br />������������</td>
					<td align='center'>��������������<br />����������</td>
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