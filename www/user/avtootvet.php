<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

$avtootvet_ser = 0;
/* if (isset($_POST['avtootvet_ser']))	{$avtootvet_ser = $_POST['avtootvet_ser'];	if ($avtootvet_ser=='')	{$avtootvet_ser = 0;}}
if (isset($_POST['avtootvet_nom']))	{$avtootvet_nom = $_POST['avtootvet_nom'];	if ($avtootvet_nom=='')	{$avtootvet_nom = 0;}} */
if (isset($_POST['p2']))	{$p2 = $_POST['p2'];	if ($p2=='')	{$p2 = 0;}}
if (isset($_POST['p1']))	{$p1 = $_POST['p1'];	if ($p1=='')	{$p1 = 0;}}
if (isset($_POST['p4']))	{$p4 = $_POST['p4'];	if ($p4=='')	{$p4 = 0;}}

if (isset($_POST['avtootvet_ser2']))		{$avtootvet_ser2=$_POST['avtootvet_ser2'];		if ($avtootvet_ser2=='')					{unset($avtootvet_ser2);}}
if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser1=$_POST['avtootvet_ser'];		if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}  else {$avtootvet_ser ="";} 
if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser="%".$_POST['avtootvet_ser']."%";	if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom1=$_POST['avtootvet_nom'];		if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}  else {$avtootvet_nom ='';} 
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom="%".$_POST['avtootvet_nom']."%";	if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}
if (isset($_POST['ip']))		{$ip1=$_POST['ip'];		if ($ip=='')					{unset($ip);}}else {$ip ='';} 
if (isset($_POST['ip']))		{$ip="%".$_POST['ip']."%";	if ($ip=='')						{unset($ip);}}
if (isset($_POST['gruppa']))			{$gruppa=$_POST['gruppa'];						if ($gruppa=='Выберите группу...')			{unset($gruppa);}}
if (isset($_POST['station']))			{$station=$_POST['station'];					if ($station=='Выберите станцию...')		{unset($station);}}
if (isset($_POST['rabmesto']))		{$rabmesto1=$_POST['rabmesto'];		if ($rabmesto=='')							{unset($rabmesto);}}  else {$rabmesto ="";} 
if (isset($_POST['rabmesto']))		{$rabmesto="%".$_POST['rabmesto']."%";	if ($rabmesto=='')							{unset($rabmesto);}}
if (isset($_POST['slyjba']))		{$slyjba1=$_POST['slyjba'];		if ($slyjba=='')							{unset($slyjba);}}  else {$rabmesto ="";} 
if (isset($_POST['slyjba']))		{$slyjba="%".$_POST['slyjba']."%";	if ($slyjba=='')							{unset($slyjba);}}
//if (isset($_POST['rabmesto']))			{$rabmesto=$_POST['rabmesto'];						if ($rabmesto=='Выберите рабочее место...')			{unset($rabmesto);}}

 if (isset($_POST['submit']))	{$submit = $_POST['submit'];	if ($submit=='')	{$submit = 0;}}else {$submit ='';} 

/* echo "p1=".$p1;
 */
/* if (isset($_POST['station']))	{$station = $_POST['station'];	if ($station=='')	{$station = 0;}}
 */
 if (isset($_POST['add_avtootveta1']))	{$add_avtootveta1 = $_POST['add_avtootveta1'];	if ($add_avtootveta1=='')	{$add_avtootveta1 = 0;}}
if (isset($_POST['avtootvet_nom1']))	{$avtootvet_nom1 = $_POST['avtootvet_nom1'];	if ($avtootvet_nom1=='')	{$avtootvet_nom1 = 0;}}


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

<form action='avtootvet.php' method='post' name='poisk' id='poisk'>
  <table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
    <caption align='top' class="g18">
      Условия поиска
      </caption>
    <tr>
      <td align="right" width="484" class="g16">Автоответ </td>
      <td width="2">&nbsp;</td>
      <td width="498" align="left"><input name="avtootvet_ser" type="text" value="<?  if (isset ($avtootvet_ser1) || (isset($avtootvet_ser2)))
										{
											printf("%s",$avtootvet_ser1);
											printf("%s",$avtootvet_ser2);
										}
										else
										{
											printf("");
										} ?>" size="9" maxlength="9">
                                        
                                   <input name="avtootvet_nom" type="text" value="<?  if (isset ($avtootvet_nom1)/* && ($avtootvet_nom=='') */)
										{
											printf("%s", $avtootvet_nom1);
										}
										else
										{
											printf("");
										} ?>" size="2" maxlength="2">
                                        </td>
    </tr>
       <tr>
      <td align="right"><span  class='g14'>Группа</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="gruppa">
        <option selected>Выберите группу...</option>
        <?php
							$resust1 = mysql_query("SELECT gruppa FROM gruppa ",$db);
							$myust1 = mysql_fetch_array($resust1);
							do
							{//вывод устройств
								if (isset($myust1['gruppa']) && $myust1['gruppa'] == $gruppa)
								{
									printf ("<option selected>%s</option>",$gruppa);
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
      <td align="right"><span  class='g14'>Станция</span></td>
      <td width="2">&nbsp;</td>
      <td align="left">
      <select name="station">
        <option selected>Выберите станцию...</option>
        <?php
							$resust2 = mysql_query("SELECT station FROM station ORDER BY station",$db);
							$myust2 = mysql_fetch_array($resust2);
							do
							{//вывод устройств
								if (isset($myust2['station']) && $myust2['station'] == $station)
								{
									printf ("<option selected>%s</option>",$station);
								}
								else
								{
									printf ("<option>%s</option>",$myust2['station']);
								}
							}
							while ($myust2 = mysql_fetch_array($resust2));
		   		     	?>
      </select></td>
    </tr>
 <tr>
      <td align="right"><span  class='g14'>Рабочее место</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><input name="rabmesto" type="text" value="<? if (isset ($rabmesto1)/* && ($ip=='') */)
										{
											printf("%s", $rabmesto1);
										}
										else
										{
											printf("");
										}										
										?>" size="15" maxlength="15"></td>
    </tr>
    <tr>
      <td align="right" width="484" class="g16">Служба</td>
      <td width="2">&nbsp;</td>
      <td align="left"><input name="slyjba" type="text" value="<? if (isset ($slyjba1)/* && ($ip=='') */)
										{
											printf("%s", $slyjba1);
										}
										else
										{
											printf("");
										}										
										?>" size="15" maxlength="15"></td>
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
    
       
       <tr class="k12">
      <td colspan="3" align="center"><input name='submit' type='submit' class='b14' id='submit' value='Поиск'>
       </td><?php /* <td align="left"><input name="reset" type="reset" class='b14' value="Сброс" ></td> */?>
    </tr>
  </table>
  
 </form>



<p class='g18'>Добавление автоответа</p>


<form action="avtootvet.php" method="post" name="avtootvetu" >
<select name="avtootvet_ser2" type= "text" class="j12" need = "1">
     <option selected>Выберите автоответ...</option>
 <? 
      $resav3 = mysql_query ("SELECT avtootvet_ser FROM abonent GROUP by avtootvet_ser " ,$db);
      $rowav3 = mysql_fetch_array($resav3);
      do
		{
			if ($rowav3['avtootvet_ser']==$avtootvet_ser2)
			{
				printf("<option selected>%s</option>",$rowav3['avtootvet_ser']);
				$p1=$rowav3['avtootvet_ser'];
			}
			else
			{
				printf("<option>%s</option>",$rowav3['avtootvet_ser']);
			}
		}
              while ($rowav3 = mysql_fetch_array($resav3));
  ?>
  </select>
    <input name="submit" type="submit" class="b14" value="Выбрать"  >

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
			{ 	$text = "ip >= 0";
				if(isset($gruppa))
				{
					$text = "gruppa = '$gruppa'";
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
				$resav4 = mysql_query ("SELECT * FROM abonent WHERE ip LIKE '$ip' AND avtootvet_nom LIKE '$avtootvet_nom' AND avtootvet_ser LIKE '$avtootvet_ser' AND slujba LIKE '$slyjba' AND rabmesto LIKE '$rabmesto' AND $text ORDER BY avtootvet_ser, avtootvet_nom ",$db);
				$rowav4 = mysql_fetch_array($resav4);
				do
				{
					printf("
					<form action='avtootvet_insert.php' method='post' name='avtootvetu_add'>
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
					<td><input name='check' type='checkbox' ></td>
					<td><span class='k12'>(%s)</span></td>
					<td><span class='k12' width='30' align='center' >%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
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
					",$rowav4['avtootvet_ser'], $rowav4['avtootvet_nom'], $rowav4['gruppa'], $rowav4['station'], $rowav4['rabmesto'], $rowav4['slujba'],  $rowav4['ip'], $rowav4['id'],$rowav4['id']);
				}
				while ($rowav4 = mysql_fetch_array($resav4));
			}	
		}
		break;
		
		case "Выбрать":
		{
				$resav5 = mysql_query ("SELECT * FROM abonent WHERE avtootvet_ser = '$avtootvet_ser2' ORDER BY avtootvet_nom ", $db);
				$rowav5 = mysql_fetch_array($resav5);
				do
				{
					printf("
					<form action='avtootvet_insert.php' method='post' name='avtootvetu_add'>
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
					<td><input name='check' type='checkbox' ></td>
					<td><span class='k12'>(%s)</span></td>
					<td><span class='k12' width='30' align='center' >%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
					<td><span class='k12'>%s</span></td>
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
					", $rowav5['avtootvet_ser'], $rowav5['avtootvet_nom'], $rowav5['gruppa'], $rowav5['station'], $rowav5['rabmesto'], $rowav5['slujba'], $rowav5['ip'], $rowav5['id'],$rowav5['id']);
				}
				while ($rowav5 = mysql_fetch_array($resav5));
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
	}
?>
</table>
<br /> 

<?
if (isset($_POST['avtootvet_ser2']))
{
	include ("avtootvet_form_add.php"); //Подключаем низ сайта
}
?>

<br />
</td>

</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</body>
</html>