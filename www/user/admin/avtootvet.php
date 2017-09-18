<?php
require_once("adminOnly.php");
include ("db.php");//Соединяемся с базой данных
if (isset($_POST['avtootvet_ser']))	{$avtootvet_ser = $_POST['avtootvet_ser'];	if ($avtootvet_ser=='')	{$avtootvet_ser = 0;}}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" >
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>

<?php
	include ("left.php"); //Подключаем левую часть
?>


<td align="center"><p class='g18'>Автоответы</p>


<form action="avtootvet.php" method="post" name="avtootvetu">
  <select name="avtootvet_ser" type= "text" class="j12" >
    <? 
      $resav = mysql_query ("SELECT avtootvet_ser FROM abonent GROUP by avtootvet_ser",$db);
      $rowav = mysql_fetch_array($resav);
      do
		{
			if ($rowav['avtootvet_ser']==$avtootvet_ser)
			{
				printf("<option selected>%s</option>",$rowav['avtootvet_ser']);
				$p1=$rowav['avtootvet_ser'];
			}
			else
			{
				printf("<option>%s</option>",$rowav['avtootvet_ser']);
			}
		}
              while ($rowav = mysql_fetch_array($resav));
  ?>
  </select>
  <input name="submit2" type="submit" class="b12" value="Выбрать">
</form>
<br />


<table width="95%" border='1' cellpadding="1" cellspacing="0" align="center" > 
			<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
		  		<td align='center' width='80' colspan="2"><span><b>Автоответ</b></span></td>
				<td align='center'><span ><b>Группа</b></span></td>
				<td align='center'><span ><b>Станция</b></span></td>
				<td align='center'><b>Рабочее место</b></td>
				<td align='center'><b>Служба</b></td>
				<td align='center'><b>IP</b></td>
	    		<th align='center'>ФИО</th>
			</tr>
		<? 
		$resav1 = mysql_query ("SELECT * FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' ORDER BY avtootvet_nom", $db);
		$rowav1 = mysql_fetch_array($resav1);
		do
		{
			printf("
			<form action='avtootvet_insert.php' method='post' name='avtootvetu_add'>
			<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
					<td><span class='k12'>(%s)</span></td>
					<td><span class='k12' width='30' align='center' >%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
			</tr>
			</form>
			", $rowav1['avtootvet_ser'], $rowav1['avtootvet_nom'], $rowav1['gruppa'], $rowav1['station'], $rowav1['rabmesto'], $rowav1['slujba'], $rowav1['ip'], $rowav1['fio']);
}
		while ($rowav1 = mysql_fetch_array($resav1));
		//$p3 = $rowav1['station'];
?>
</table>

<br />

<form action="avtootvet_add.php" method="post" name="avtootvetu_add" >
  <input name="add_avtootveta" class="j12"  value="<?php if (isset($p1)){printf("%s",$p1); } else {printf("");} ?>" size="9" maxlength="9" readonly="readonly" type="hidden" >
  <select name="avtootvet_nom" type= "text" class="j12" >
    <? 

	for ($ser1=0; $ser1<=9; $ser1++ )
	{
		if ($ser1==0) {$ser='00';}
		if ($ser1==1) {$ser='01';}
		if ($ser1==2) {$ser='02';}
		if ($ser1==3) {$ser='03';}
		if ($ser1==4) {$ser='04';}
		if ($ser1==5) {$ser='05';}
		if ($ser1==6) {$ser='06';}
		if ($ser1==7) {$ser='07';}
		if ($ser1==8) {$ser='08';}
		if ($ser1==9) {$ser='09';}
		echo "!!!".$ser;
		$resav2 = mysql_query ("SELECT avtootvet_nom FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' AND avtootvet_nom = '$ser'",$db);
		$rowav2 = mysql_fetch_array($resav2);
		do
		{
			if (!isset($rowav2['avtootvet_nom']))
				{
					printf("<option>%s</option>", $ser);
				}
//			echo $rowav2['avtootvet_nom'];
		}
		while ($rowav2 = mysql_fetch_array($resav2));

	}


	for ($ser=10; $ser<=99; $ser++ )
	{
		$resav2 = mysql_query ("SELECT avtootvet_nom FROM abonent WHERE avtootvet_ser = '$avtootvet_ser' AND avtootvet_nom = '$ser'",$db);
		$rowav2 = mysql_fetch_array($resav2);
		do
		{
			if (!isset($rowav2['avtootvet_nom']))
				{
					printf("<option>%s</option>", $ser);
				}
//			echo $rowav2['avtootvet_nom'];
		}
		while ($rowav2 = mysql_fetch_array($resav2));

	}
?>
  </select>
  <input name="submit_add" type="submit" class="b12" value="Добавить" >
</form>
<br />
</td>

</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</body>
</html>