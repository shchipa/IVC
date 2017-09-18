<?php
include ("db.php");//Соединяемся с базой данных
/* 
if (isset($_POST['avtootvet_ser']))	{$avtootvet_ser = $_POST['avtootvet_ser'];	if ($avtootvet_ser=='')	{$avtootvet_ser = 0;}}else {$avtootvet_ser ='';}
if (isset($_POST['avtootvet_nom']))	{$avtootvet_nom = $_POST['avtootvet_nom'];	if ($avtootvet_nom=='')	{$avtootvet_nom = 0;}}else {$avtootvet_nom ='';} */
if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser1=$_POST['avtootvet_ser'];		if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}  else {$avtootvet_ser ="";} 
if (isset($_POST['avtootvet_ser']))		{$avtootvet_ser="%".$_POST['avtootvet_ser']."%";	if ($avtootvet_ser=='')							{unset($avtootvet_ser);}}
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom1=$_POST['avtootvet_nom'];		if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}  else {$avtootvet_nom ='';} 
if (isset($_POST['avtootvet_nom']))		{$avtootvet_nom=$_POST['avtootvet_nom']."%";	if ($avtootvet_nom=='')							{unset($avtootvet_nom);}}
if (isset($_POST['ip']))		{$ip1=$_POST['ip'];		if ($ip=='')					{unset($ip);}}else {$ip ='';} 
if (isset($_POST['ip']))		{$ip="%".$_POST['ip']."%";	if ($ip=='')						{unset($ip);}}

if (isset($_POST['add_avtootveta']))	{$add_avtootveta = $_POST['add_avtootveta'];	if ($add_avtootveta=='')	{$add_avtootveta = $avtootvet_ser;}}
if (isset($_POST['submit']))	{$submit = $_POST['submit'];	if ($submit=='')	{$submit = 0;}}

// echo "ip=".$ip;
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
//avtootvet_tabl1.php
?>

<td align="center">

<form action='avtootvetu_search.php' method='post' name='poisk' id='poisk'>
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
							$resust = mysql_query("SELECT gruppa FROM abonent GROUP by gruppa",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['gruppa']) && $myust['gruppa'] == $gruppa)
								{
									printf ("<option selected>%s</option>",$gruppa);
								}
								else
								{
									printf ("<option>%s</option>",$myust['gruppa']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
      </select></td>
    </tr>
    <tr>
      <td align="right"><span  class='g14'>Рабочее место</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="rabmesto">
        <option selected>Выберите рабочее место...</option>
        <?php
							$resust = mysql_query("SELECT rabmesto FROM abonent GROUP by rabmesto",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['rabmesto']) && $myust['rabmesto'] == $rabmesto)
								{
									printf ("<option selected>%s</option>",$rabmesto);
								}
								else
								{
									printf ("<option>%s</option>",$myust['rabmesto']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
      </select></td>
    </tr>
    <tr>
      <td align="right"><span  class='g14'>Станция</span></td>
      <td width="2">&nbsp;</td>
      <td align="left"><select name="station">
        <option selected>Выберите станцию...</option>
        <?php
							$resust = mysql_query("SELECT station FROM station ORDER BY station",$db);
							$myust = mysql_fetch_array($resust);
							do
							{//вывод устройств
								if (isset($myust['station']) && $myust['station'] == $station)
								{
									printf ("<option selected>%s</option>",$station);
								}
								else
								{
									printf ("<option>%s</option>",$myust['station']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
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


<br />

<table width="95%" border='1' cellpadding="1" cellspacing="0" align="center" > 
			<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
		  		<td align='center'><span ><b>IP</b></span></td>
				<td align='center' width='80' colspan="2"><span><b>Автоответ</b></span></td>
				<td align='center'><span ><b>Группа</b></span></td>
				<td align='center'><span ><b>Станция</b></span></td>
				<td align='center'><b>Рабочее место</b></td>
				<td align='center'><span ><b>Служба</b></span></td>

			</tr>
	
			<?	
				$text = "ip >= 0";

				if(isset($gruppa))
				{
					$text = "gruppa = '$gruppa'";
				}

				if($text == "ip >= 0")
				{
					if(isset($rabmesto))
						{$text = "rabmesto = '$rabmesto'";}
				}
				else
				{
					if(isset($rabmesto))
					{$text = $text." AND rabmesto = '$rabmesto'";}
				}

				if($text == "ip >= 0")
				{
					if(isset($station))
						{$text = "station = '$station'";}
				}
				else
				{
					if(isset($station))
					{$text = $text." AND station = '$station'";}
				}

$resav1 = mysql_query ("SELECT * FROM abonent WHERE ip LIKE '$ip' AND avtootvet_nom LIKE '$avtootvet_nom' AND avtootvet_nom LIKE '$avtootvet_nom' AND $text",$db);
		$rowav1 = mysql_fetch_array($resav1);
		do
			{
			printf("
			<tr align='center' >
					<td class='k11'>%s</td>
					<td class='k11'>(%s)</td>
					<td class='k11' width='30' align='center' >%s</td>
					<td class='k11'>%s</td>
					<td class='k11'>%s</td>
					<td class='k11'>%s</td>
					<td class='k11'>%s</td>
					</tr>
			", $rowav1['ip'], $rowav1['avtootvet_ser'], $rowav1['avtootvet_nom'], $rowav1['gruppa'], $rowav1['station'], $rowav1['rabmesto'], $rowav1['slujba']);
			}
		while ($rowav1 = mysql_fetch_array($resav1));
//		$ip = $rowav1['ip'];
		//}
?>
</table>
<br /> 

<?php 
/* 	include ("1.php"); 
 */?>

<br />
</td>

</tr>

<?php 
  include ("bottom.php"); //Подключаем низ сайта
?>
</body>
</html>