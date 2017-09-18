<?php
include ("db.php");//Соединяемся с базой данных

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");
//$result = mysql_query ("SELECT * FROM tovar",$db);
//$myrow = mysql_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Инструкции. Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {font-size: 18px}
.style5 {
	font-size: 36px;
	font-family: "Courier New";
	font-weight: bold;
}
.style6 {color:#0000FF; font-size: 18px;}
-->
</style>
</head>
<body>
<table width="100%" border="0"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>
<?php
	include ("left.php"); //Подключаем левую часть
?>


<td align="center">
	<table border="0" cellpadding="10" cellspacing="0">
		<tr align="center"><td colspan="4"><span class="g18">И н с т р у к ц и и</span></td></tr>
		<tr align="center">
			<td><span class="g16">Общие</span></td>
			<td><span class="g16">RWSoft</span></td>
			<td><span class="g16">WinTerm</span></td>
			<td><span class="g16">Windows7</span></td>

		</tr>
		<tr align="center">
			<td><a href='ins_ping.php' class='p1' title="Инструкция по команде Ping">Инструкция Ping</a></br></td>
			<td><a href='ins_vnutr_osh_ki.php' class='p1' title="Инструкция по внутренней ошибке КИ">Внутренняя ошибка КИ</a></br></td>
			<td><a href='ins_cnc.php' class='p1' title="Инструкция по ошибке CNC в WinTerm">Ошибка CNC</a></br></td>
			<td><a href='ins_otkljrwin7.php' class='p1' title="Инструкция по отключение ждущего режима WIN 7">Отключение ждущего режима Windows7</a></br></td>
        </tr>
		<tr align="center">
			<td><a href='ins_printer300.php' class='p1' title="Настройки печати матричных принтера Epson LX-300">Настройка Epson LX-300</a></br></td>
			<td><a href='ins_vyravn_konf_ki.php' class='p1' title="Инструкция по выравниванию конфигурации КИ">Выравнивание конфигурации КИ</a></br></td>
			<td><a href='ins_ins_wt.php' class='p1' title="Установка терминала абонента АСУЖТ - WinTerm">Установка WinTerm</a></br></td>
			<td><a href='ins_INFO(EEKK)for_win7_mk.php' class='p1' title="Инструкция INFO (ЕЭКК) для Windows7(медленные каналы)">Инструкция INFO (ЕЭКК) для Windows7 <br/>(медленные каналы)</a></br></td>
        </tr>
		<tr align="center">
			<td><a href='ins_printer890.php' class='p1' title="Настройки печати матричных принтера Epson FX-890">Настройка Epson FX-890</a></br></td>
			<td><a href='ins_rem_ki.php' class='p1' title="Удаление КИ ССП RWSoft">Удаление КИ ССП RWSoft</a></td>
			<td>&nbsp;</td>
			<td><a href='ins_INFO(EEKK)for_win7.php' class='p1' title="Инструкция INFO (ЕЭКК) для Windows7">Инструкция INFO (ЕЭКК) для Windows7<br/></a></br></td>
		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_ins_ki.php' class='p1' title="Установка КИ ССП RWSoft">Установка КИ ССП RWSoft</a></br></td>
			<td>&nbsp;</td>
<td><a href='ins_INFO(EEKK)_win7.php' class='p1' title="Инструкция INFO (ЕЭКК) Windows7">Инструкция INFO (ЕЭКК) Windows7</a></br></td> 

		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_net_razryva_svyazi.php' class='p1' title="Инструкция по ликвидации сообщения о разрыве связи в КИ">НЕТ Разрыва связи</a></br></td>
			<td>&nbsp;</td>
            <td> <a href='ins_win7_natr_shabl.php' class='p1' title="Инструкция шаблоны сообщений в ТВК">Инструкция_шаблоны сообщений в ТВК</a></br></td> 

		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td><a href='ins_nastroyka_ki.php' class='p1' title="Инструкция по настройке КИ ССП RWSoft">Настройка КИ ССП RWSoft</a></br></td>
			<td>&nbsp;</td>
            <td> <a href='http://10.7.100.100:8080/nastroyka_win7_ARM.pdf' class='p1' title="Настройка Windows 7 под АРМы">Настройка Windows 7 под АРМы</a></br></td> 
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><a href='ins_ins_ki_win7.php' class='p1' title="Установка КИ ССП RWSoft">Установка КИ ССП RWSoft <u>для Windows 7</u></a></br></td>
			<td>&nbsp;</td>
            <td><a href='ins_passwords_win7.php' class='p1' title="Инструкция по установке срока действия пароля в Windows 7">Инструкция по установке срока действия <br/>  пароля в Windows 7</u></a></br></td>
		</tr>
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</br></td>
			<td>&nbsp;</td>
            <td><a href='ins_passwords1_win7.php' class='p1' title="Пароля для пользователя в Windows 7">Пароля для пользователя в  <br/> Windows 7</u></a></br></td>
		</tr>
        <tr>
			<td>&nbsp;</td>
			<td>&nbsp;</br></td>
			<td>&nbsp;</td>
            <td><a href='ins_koncentrator_win7.php' class='p1' title="Установка и запуск концентратора RWSoft версии 2.56 и 2.57 под Windows 7">Установка и запуск концентратора RWSoft<br> версии 2.56 и 2.57 под Windows 7</u></a></br></td>
		</tr>

	</table>
    </br>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
