<?
$data = date("Y-m-j H:i:s");
$insert = mysql_query ("UPDATE avtootvet SET ao='$ao', ip='$ip', ki='$ki', station='$station', rabmesto='$rabmesto', vidki='$vidki', fio='Admin', data='$data' WHERE id='$id'");
	if ($insert == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td>
		  					<span class='g18'></br></br>Спасибо, %s. Автоответ обновлён!</br></br></br></br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td> </td>
					</tr>

				</table>
				", $fio);
	}
	else // Если не добавилась в базу данных
	{
				echo "<span class='r18'>Технический сбой! Вид update ao!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
	}
?>