<td align="center">
<?
	$data = date("Y-m-j H:i:s");
	$insert = mysql_query ("INSERT INTO avtootvet (ao, ip, ki, station, rabmesto, vidki, fio, data) VALUES ('$ao', '$ip', '$ki', '$station', '$rabmesto', '$vidki', '$fio', '$data')");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td colspan='5'>
		  					<span class='g18'></br></br>Спасибо. Автоответ успешно добавлен в базу данных!</br></br></br></br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td colspan='5'> </td>
					</tr>

					<tr align='center'>
						<td colspan='30'>
			  				<span class='g18'></br>___________________________________________</br></span>
						</td>
					</tr>

					<tr align='center'>
						<td colspan='5'>
		  					<span class='g14'></br>Для продолжения работы сделайте выбор:</br></span>
						</td>
					</tr>

					<tr height='40' align='center'>
						<td> </td>
					</tr>
				    
					<tr align='center'>
						<td>
							<form method='post' action='add_ao.php'>
								<input type='submit' class='g14' title='Добавить ещё один автоответ' value='Добавить ещё автоответ'>
<!--								<input name='fio' type='hidden' value='$fio'> -->
							</form></br></br></br>
						</td>
					</tr>
				</table>
			", $fio);
	}
	else // Если не добавилась в базу данных
	{
		echo "<span class='r18'>Технический сбой! Возможно Вы ввели не всю информацию или такой автоответ уже существует. Проверьте заполнение всех полей с информацией и наличие вводимого автоответа.</span><span class='g18'></br></br>Если это не поможет - сообщите пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
	}
?>
</td>