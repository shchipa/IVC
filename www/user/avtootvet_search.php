<?php
include ("db.php");//Соединяемся с базой данных

$avtootvet_ser = 0;
if (isset($_POST['avtootvet_ser']))	{$avtootvet_ser = $_POST['avtootvet_ser'];	if ($avtootvet_ser=='')	{$avtootvet_ser = 0;}}else {$avtootvet_ser ='';}
if (isset($_POST['avtootvet_nom']))	{$avtootvet_nom = $_POST['avtootvet_nom'];	if ($avtootvet_nom=='')	{$avtootvet_nom = 0;}}else {$avtootvet_nom ='';}
if (isset($_POST['p2']))	{$p2 = $_POST['p2'];	if ($p2=='')	{$p2 = 0;}}
if (isset($_POST['p1']))	{$p1 = $_POST['p1'];	if ($p1=='')	{$p1 = 0;}}
if (isset($_POST['p4']))	{$p4 = $_POST['p4'];	if ($p4=='')	{$p4 = 0;}}
if (isset($_POST['add_avtootveta']))	{$add_avtootveta = $_POST['add_avtootveta'];	if ($add_avtootveta=='')	{$add_avtootveta = $avtootvet_ser;}}

if (isset($_POST['station']))	{$station = $_POST['station'];	if ($station=='')	{$station = 0;}}
if (isset($_POST['add_avtootveta1']))	{$add_avtootveta1 = $_POST['add_avtootveta1'];	if ($add_avtootveta1=='')	{$add_avtootveta1 = 0;}}
if (isset($_POST['avtootvet_nom1']))	{$avtootvet_nom1 = $_POST['avtootvet_nom1'];	if ($avtootvet_nom1=='')	{$avtootvet_nom1 = 0;}}
if (isset($_POST['submit2']))	{$submit2 = $_POST['submit2'];	if ($submit2=='')	{$submit2 = 0;}}
if (isset($_POST['ip']))	{$ip = 	$_POST['ip']; if ($ip=='') 	{$ip = 0;} }  else {$ip ='';}
if (isset($_POST['p']))			{$p = 	$_POST['p'];						if ($p=='')			{$p = 0;}}
// echo "ip=".$ip;

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


<td align="center"><p class='g18'>Добавление автоответа</p>


<form action="avtootvetu_search.php" method="post" name="avtootvetu" >
<input name="ip" type="text" value="<? if (!isset ($ip))
										{
											printf("");
										}
										else
										{
											printf("%s", $ip);
										}										
										?>" size="15" maxlength="15">
<input name="submit2" type="submit" class="g14" value="Искать"  >
</form>
<br />


<table width="95%" border='1' cellpadding="1" cellspacing="0" align="center" > 
			<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
		  		<td align='center'><span ><b>IP</b></span></td>
				<td align='center' width='80' colspan="2"><span><b>Автоответ</b></span></td>
				<td align='center'><span ><b>Группа</b></span></td>
				<td align='center'><span ><b>Станция</b></span></td>
				<td align='center'><b>Рабочее место</b></td>
				<td align='center'><span ><b>Служба</b></span></td>

			</t>
	
			<?
         if ($ip==0)
		{
			printf("
			<tr align='center' >
					<td class='k11'>&nbsp;</td>
					<td class='k11' align='center' >(&nbsp;)</td>
					<td class='k11' width='10'>&nbsp;</td>
					<td class='k11'>&nbsp;</td>
					<td class='k11'>&nbsp;</td>
					<td class='k11'>&nbsp;</td>
					<td class='k11'>&nbsp;</td>
					</tr>
			");		
		}
		else
		{	$ip = "%".$ip."%";

		$resav1 = mysql_query ("SELECT * FROM abonent WHERE ip LIKE '$ip' ORDER BY ip",$db);
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
		}
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