	<div style='background:#eeeeee; width:600px'>
	 	<table border='1' cellpadding='1' cellspacing='0'>
		<tr valign='center'>
			<td align='center' width='160'><span class='g12'>Механик</span></td>
			<td align='center'><span class='g12'>Линейная группа</span></td>
			<td align='center'><span class='g12'>Уровень доступа к базе</span></td>
			<td align='center'><span class='g12'>Редактировать</span></td>
			<td align='center'><span class='r12'>Удалить</span></td>
		</tr>
		<?
				$resav = mysql_query ("SELECT * FROM mehanik ORDER BY gruppa, mehanik",$db);
				$rowav = mysql_fetch_array($resav);
				do
				{
				printf("
					<form action='mehanik_insert.php' method='post' name='form46' id='form46'>
					<tr valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td align='left'> <input name='check' type='checkbox' value='ch'> <span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'><span class='k12'>%s</span></td>
						<td align='center'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='b10' id='submit' value='Редактир-ть'>
						</td>
						<td align='center'>
							<input name='del' type='checkbox' value='del'>
							<input name='del2' type='checkbox' value='del2'>
							<input name='id' type='hidden' value='%s'>
							<input name='submit' type='submit' class='r10' id='submit' value='Удалить'>
						</td>
					</tr>
					</form>
				", $rowav['mehanik'], $rowav['gruppa'], $rowav['user'], $rowav['id'], $rowav['id']);
				}
				while ($rowav = mysql_fetch_array($resav));
		?>
		</table>
	</div>
			<br />	<table border="1" cellpadding="5" cellspacing="0" width="500" class="k12">
					   	<tr>
							<td width="150" align="center"><span  class='g12'>"Доступ"</span></td>
							<td width="50" align="center"><span  class='g12'>Сбои</span></td>
							<td width="50" align="center"><span  class='g12'>Ремонт ВТ</span></td>
							<td width="50" align="center"><span  class='g12'>Инв. Ведомость</span></td>
						</tr>
					   	<tr>
							<td width="250" align="left">3 - обычный механик</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">7 - механик с доступом к Ремонту ВТ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">9 - механик с доступом только к Ремонту ВТ</td>
							<td align="center">-</td>
							<td align="center">+</td>
							<td align="center">-</td>
						</tr>
					   	<tr>
							<td width="150" align="left">11 - механик с доступом к Инв. Ведомости</td>
							<td align="center">+</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">13 - механик с доступом только к Инв. Ведомости</td>
							<td align="center">-</td>
							<td align="center">-</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">15 - полный доступ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
					   	<tr>
							<td width="150" align="left">21 - админ</td>
							<td align="center">+</td>
							<td align="center">+</td>
							<td align="center">+</td>
						</tr>
				</table>