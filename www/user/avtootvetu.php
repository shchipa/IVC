<?php
include ("db.php");//Соединяемся с базой данных

$avtootvet_ser = 0;
if (isset($_POST['avtootvet_ser2']))	{$avtootvet_ser2 = $_POST['avtootvet_ser2'];	if ($avtootvet_ser2=='')	{$avtootvet_ser2 = 0;}}
if (isset($_POST['avtootvet_nom2']))	{$avtootvet_nom2 = $_POST['avtootvet_nom2'];	if ($avtootvet_nom2=='')	{$avtootvet_nom2 = 0;}}
if (isset($_POST['p2']))	{$p2 = $_POST['p2'];	if ($p2=='')	{$p2 = 0;}}
if (isset($_POST['p1']))	{$p1 = $_POST['p1'];	if ($p1=='')	{$p1 = 0;}}
if (isset($_POST['p4']))	{$p4 = $_POST['p4'];	if ($p4=='')	{$p4 = 0;}}
if (isset($_POST['add_avtootveta']))	{$add_avtootveta = $_POST['add_avtootveta'];	if ($add_avtootveta=='')	{$add_avtootveta = $avtootvet_ser;}}
/* echo "p1=".$p1;
 */
//if (isset($_POST['station']))	{$station = $_POST['station'];	if ($station=='')	{$station = 0;}}
if (isset($_POST['add_avtootveta1']))	{$add_avtootveta1 = $_POST['add_avtootveta1'];	if ($add_avtootveta1=='')	{$add_avtootveta1 = 0;}}
/* if (isset($_POST['avtootvet_nom1']))	{$avtootvet_nom1 = $_POST['avtootvet_nom1'];	if ($avtootvet_nom1=='')	{$avtootvet_nom1 = 0;}}
 */
 if (isset($_POST['submit']))	{$submit = $_POST['submit'];	if ($submit=='')	{$submit = 0;}}else {$submit ='';} 

if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser1=$_POST['avtootvet_ser'];		if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}  else {$avtootvet_ser ="";} 
if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser="%".$_POST['avtootvet_ser']."%";	if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom1=$_POST['avtootvet_nom'];		if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}  else {$avtootvet_nom ='';} 
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom=$_POST['avtootvet_nom']."%";	if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}
if (isset($_POST['ip']))		{$ip1=$_POST['ip'];		if ($ip=='')					{unset($ip);}}else {$ip ='';} 
if (isset($_POST['ip']))		{$ip="%".$_POST['ip']."%";	if ($ip=='')						{unset($ip);}}
if (isset($_POST['gruppa']))			{$gruppa=$_POST['gruppa'];						if ($gruppa=='Выберите группу...')			{unset($gruppa);}}
if (isset($_POST['station']))			{$station=$_POST['station'];					if ($station=='Выберите станцию...')		{unset($station);}}
if (isset($_POST['rabmesto']))			{$rabmesto=$_POST['rabmesto'];						if ($rabmesto=='Выберите рабочее место...')			{unset($rabmesto);}}


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
?><td align="center">

<form action='avtootvetu.php' method='post' name='poisk' id='poisk'>
  <table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
    <caption align='top' class="g18">
      Условия поиска
      </caption>
    <tr>
      <td align="right" width="484" class="g16">Автоответ серии</td>
      <td width="2">&nbsp;</td>
      <td width="498" align="left"><input name="avtootvet_ser" type="text" value="<?  if (isset ($avtootvet_ser1)/* && ($avtootvet_ser=='') */)
										{
											printf("%s",$avtootvet_ser1);
										}
										else
										{
											printf("");
										} ?>" size="20" maxlength="20"></td>
    </tr>
    <tr>
      <td align="right" width="484" class="g16">Автоответ рабочего места</td>
      <td width="2">&nbsp;</td>
      <td align="left"><input name="avtootvet_nom" type="text" value="<?  if (isset ($avtootvet_nom1)/* && ($avtootvet_nom=='') */)
										{
											printf("%s", $avtootvet_nom1);
										}
										else
										{
											printf("");
										} ?>" size="20" maxlength="20"></td>
    </tr>
    <tr>
      <td align="right" width="484" class="g16">IP адрес рабочего места</td>
      <td width="2">&nbsp;</td>
      <td align="left"><input name="ip" type="text" value="<? if (isset ($ip1)/* && ($ip=='') */)
										{
											printf("%s", $ip1);
										}
										else
										{
											printf("");
										}										
										?>" size="15" maxlength="15"></td>
    </tr>
    <tr>
      <td align="right"><span  class='g14'>Группа</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="gruppa">
        <option selected>Выберите группу...</option>
        <?php
							$resust1 = mysql_query("SELECT gruppa FROM abonent GROUP by gruppa",$db);
							$myust1 = mysql_fetch_array($resust1);
							do
							{//вывод устройств
								if (isset($myust1['gruppa']) && $myust1['gruppa'] == $gruppa1)
								{
									printf ("<option selected>%s</option>",$gruppa1);
								}
								else
								{
									printf ("<option>%s</option>",$myust1['gruppa']);
								}
							}
							while ($myust1 = mysql_fetch_array($resust1));
		   		     	?>
      </select></td>
    </tr>
    <tr>
      <td align="right"><span  class='g14'>Рабочее место</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="rabmesto">
        <option selected>Выберите рабочее место...</option>
        <?php
							$resust2 = mysql_query("SELECT rabmesto FROM abonent GROUP by rabmesto",$db);
							$myust2 = mysql_fetch_array($resust2);
							do
							{//вывод устройств
								if (isset($myust2['rabmesto']) && $myust2['rabmesto'] == $rabmesto)
								{
									printf ("<option selected>%s</option>",$rabmesto);
								}
								else
								{
									printf ("<option>%s</option>",$myust2['rabmesto']);
								}
							}
							while ($myust2 = mysql_fetch_array($resust2));
		   		     	?>
      </select></td>
    </tr>
    <tr>
      <td align="right"><span  class='g14'>Станция</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="station">
        <option selected>Выберите станцию...</option>
        <?php
							$resust3 = mysql_query("SELECT station FROM station ORDER BY station",$db);
							$myust3 = mysql_fetch_array($resust3);
							do
							{//вывод устройств
								if (isset($myust3['station']) && $myust3['station'] == $station)
								{
									printf ("<option selected>%s</option>",$station);
								}
								else
								{
									printf ("<option>%s</option>",$myust3['station']);
								}
							}
							while ($myust3 = mysql_fetch_array($resust3));
		   		     	?>
      </select></td>
    </tr>
    <tr class="k12">
      <td colspan="3" align="center"><input name='submit' type='submit' class='b14' id='submit' value='Поиск'>
       </td><?php /* <td align="left"><input name="reset" type="reset" class='b14' value="Сброс" ></td> */?>
    </tr>
  </table>
  
 </form>


<p class='g18'>Добавление автоответа</p>


<form action="avtootvetu.php" method="post" name="avtootvetu" >
<select name="avtootvet_ser2" type= "text" class="j12" need = "1">
    <? 
      $resav4 = mysql_query ("SELECT avtootvet_ser FROM abonent GROUP by avtootvet_ser",$db);
      $rowav4 = mysql_fetch_array($resav4);
      do
		{
			if ($rowav4['avtootvet_ser']==$avtootvet_ser2)
			{
				printf("<option selected>%s</option>",$rowav4['avtootvet_ser']);
				$p1=$rowav4['avtootvet_ser'];
			}
			else
			{
				printf("<option>%s</option>",$rowav4['avtootvet_ser']);
			}
		}
              while ($rowav4 = mysql_fetch_array($resav4));
  ?>
  </select>
    <input name="submit" type="submit" class="g14" value="Выбрать"  >

</form>
<br />


<table width="95%" border='1' cellpadding="1" cellspacing="0" align="center" > 
<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
<td align='center' width='10'>&nbsp;</td>
<td align='center' width='80' colspan="2"><span><b>Автоответ</b></span></td>
<td align='center'><span ><b>Группа</b></span></td>
<td align='center'><span ><b>Станция</b></span></td>
<td align='center'><b>Рабочее место</b></td>
<td align='center'><span ><b>Служба</b></span></td>
<td align='center'><span ><b>IP</b></span></td>
<td align='center' width='80'>&nbsp;</td>
<td align='center' width='130'>&nbsp;</td>

			</t>
			<? 
	switch ($submit)
	{
		case "Поиск":
		{
			{ printf("
					 
					 ");
				$text = "ip >= 0";
				if(isset($gruppa))
				{
					$text = "gruppa = '$gruppa'";
				}
				if($text == "ip >= 0")
				{
					if(isset($rabmesto))
					{
						$text = "rabmesto = '$rabmesto'";
					}
				}
				else
				{
					if(isset($rabmesto))
					{
						$text = $text." AND rabmesto = '$rabmesto'";
					}
				}
				if($text == "ip >= 0")
				{
					if(isset($station))
					{
						$text = "station = '$station'";
					}
				}
				else
				{
					if(isset($station))
					{
						$text = $text." AND station = '$station'";
					}
				}
				$resav5 = mysql_query ("SELECT * FROM abonent WHERE ip LIKE '$ip' AND avtootvet_nom LIKE '$avtootvet_nom' AND avtootvet_nom LIKE '$avtootvet_nom' AND $text",$db);
				$rowav5 = mysql_fetch_array($resav5);
				do
				{
					printf("
					<form action='avtootvet_insert.php' method='post' name='avtootvetu_add'>
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
					<td><input name='check' type='checkbox' ></td>
					<td><span class='k11'>(%s)</span></td>
					<td><span class='k11' width='30' align='center' >%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td>
					<input name='submit' type='submit' class='b12' value='Редак-ть'>
					<input name='id' type='hidden' value='%s'>
					</td>
					<td>
					<input name='del' type='checkbox' value='del'>
					<input name='del2' type='checkbox' value='del2'>
					<input name='submit' type='submit' class='r12' id='submit' value='Удалить'>
					<input name='id' type='hidden' value='%s'>
					</td>
					</tr>
					</form>
					", $rowav5['ip'], $rowav5['avtootvet_ser'], $rowav5['avtootvet_nom'], $rowav5['gruppa'], $rowav5['station'], $rowav5['rabmesto'], $rowav5['slujba'], $rowav5['id'],$rowav5['id']);
				}
				while ($rowav5 = mysql_fetch_array($resav5));
			}	
		}
		break;
		
		case "Выбрать":
		{
				$resav6 = mysql_query ("SELECT * FROM abonent WHERE avtootvet_ser = '$avtootvet_ser2'", $db);
				$rowav6 = mysql_fetch_array($resav6);
				do
				{
					printf("
					<form action='avtootvet_insert.php' method='post' name='avtootvetu_add'>
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
					<td><input name='check' type='checkbox' ></td>
					<td><span class='k11'>(%s)</span></td>
					<td><span class='k11' width='30' align='center' >%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td><span class='k11'>%s</span></td>
					<td>
					<input name='submit' type='submit' class='b12' value='Редак-ть'>
					<input name='id' type='hidden' value='%s'>
					</td>
					<td>
					<input name='del' type='checkbox' value='del'>
					<input name='del2' type='checkbox' value='del2'>
					<input name='submit' type='submit' class='r12' id='submit' value='Удалить'>
					<input name='id' type='hidden' value='%s'>
					</td>
					</tr>
					</form>
					", $rowav6['avtootvet_ser'], $rowav6['avtootvet_nom'], $rowav6['gruppa'], $rowav6['station'], $rowav6['rabmesto'], $rowav6['slujba'], $rowav6['ip'], $rowav6['id'],$rowav6['id']);
				}
				while ($rowav6 = mysql_fetch_array($resav6));
		//$p3 = $rowav1['station'];
			
		}
		break;
			
		default:
		{
			include ("left0.php");
		}
		break;

		
		default:
		{
			//include ("left0.php");
		}
		break;
	//}
		
	}
?>
</table>
<br /> 

<?php 
	include ("1.php"); 
?>

<br />
</td>

</tr>

<?php 
  include ("bottom.php"); //Подключаем низ сайта
?>
</body>
</html>