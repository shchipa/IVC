<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka_free.php");

if (isset($_POST['struk_podr1']))	{$struk_podr1 = $_POST['struk_podr1'];	if ($struk_podr1=='')	{unset($struk_podr1);}}

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

<td align="center">
<form action='temper_insert.php' method='post' name='poisk' id='poisk'>
  <table border="0" width="100%" cellpadding="2" cellspacing="0" align="center">
    <caption align='top' class="g18">Добавление температуры<br /><br /></caption>
    <tr>
    <td align="right" width="484" class="g16">Температура</td>
    <td width="2">&nbsp;</td>
    <td width="498" align="left"><select name="temperatura">
      <option selected>t&ordm;...</option>
      <?php
							$resust = mysql_query("SELECT temerat  FROM temper ORDER BY temerat",$db);
							$myust = mysql_fetch_array($resust);
							do
							{
								if (isset($myust['temerat ']) && $myust['temerat '] == $temerat )
								{
									printf ("<option selected>%s</option>",$temerat );
								}
								else
								{
									printf ("<option>%s</option>",$myust['temerat']);
								}
							}
							while ($myust = mysql_fetch_array($resust));
		   		     	?>
    </select></td>
 </tr>
 <tr>
    <td align="right"><span  class='g14'>Комната</span></td>
    <td width="2">&nbsp;</td>
    <td align="left">
      <input name="komnata" type="text" value="" size="5"></td></tr>
 <tr>
    <td align="right"><span  class='g14'>Примечание</span></td>
    <td width="2">&nbsp;</td>
    <td align="left">
		<textarea name='prim' cols='15' rows='5'></textarea>
	</td>
 </tr>

   <tr class="k12">
      <td colspan="3" align="center">
		<input name="struk_podr1" type="hidden" value="<?  echo $struk_podr1;?>">
      </td>
    </tr>
    <tr class="k12">
      <td colspan="3" align="center"><input name='submit' type='submit' class='b14' id='submit' value='Добавить'></td>
    </tr>
  </table>
  
 </form>
 
<br />
</td>
</table>
<br /> 


</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</body>
</html>