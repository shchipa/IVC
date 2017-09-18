<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //Степень в которую возводится соответствующий разряд (степень 2-ки в табл. "Механики")
include ("proverka.php");

if (isset($_POST['struk_podr1']))	{$struk_podr1 = $_POST['struk_podr1'];	if ($struk_podr1=='')	{$struk_podr1 = 0;}}
if (isset($_POST['komm']))		{$komm="%".$_POST['komm']."%";	if ($komm=='')							{unset($komm);}}
 if (isset($_POST['submit']))	{$submit = $_POST['submit'];	if ($submit=='')	{$submit = 0;}}else {$submit ='';} 

/* echo "p1=".$p1;
 */
/* if (isset($_POST['station']))	{$station = $_POST['station'];	if ($station=='')	{$station = 0;}}
 */
 if (isset($_POST['temperatura']))	{$temperatura = $_POST['temperatura'];	if ($temperatura=='')	{$temperatura = 0;}}

 if (isset($_POST['komnata']))	{$komnata = $_POST['komnata'];	if ($komnata=='')	{$komnata = 0;}}



//if (isset($_POST['submit1']))	{$submit1=$_POST['submit1'];	if ($submit1=='')	{unset($submit1);}}
//if (isset($_POST['submit2']))	{$submit2=$_POST['submit2'];	if ($submit2=='')	{unset($submit2);}}
/*
echo "station".$station."<br />";
echo "gruppa".$gruppa."<br />";
echo "slujba".$slujba."<br /><br />";
echo "rabmesto".$rabmesto."<br /><br />";
echo "avtootvet_ser".$avtootvet_ser."<br /><br />";
echo "avtootvet_nom".$avtootvet_nom."<br /><br />";
echo "ip".$ip."<br /><br />";
echo "add_avtootveta1".$add_avtootveta1."<br /><br />";


echo "submit".$submit."<br /><br />";
echo "id".$id."<br />";
echo "check".$check."<br />";
echo "del".$del."<br />";
echo "del2".$del2."<br />";
//echo "submit1".$submit1."<br />";
//echo "submit2".$submit2."<br />";
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
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
<table width="100%" border="0" cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td align="center">
	<?php 

	switch ($submit)
	{
		case "Добавить":
{
		if (isset($temperatura) && isset($struk_podr1)&& isset($prim)  && isset($komnata))
			{/* now() - добавляет системную дату и время в  таблицу */
				$result4 = mysql_query("INSERT INTO temperatura  (temperat, struk_podr, prim,  fio, komnata, vdata) VALUES ('$temperatura', '$struk_podr1', '$prim ', '$_SESSION[adminUser]', '$komnata', now())");
 			 	if ($result4=='true')
				{
					printf("Ваши данные успешно занесены!</br>    <br><br><br>
						<form method='post' action='temper.php'>
							<input type='submit' class='g14' value='Далее'>
						</form>");
			
 				}
				else 
				{
					printf("Данные не внесены. Проверьте все ли поля заполнены <br><br><br>
						<form method='post' action='temper.php'>
							<input type='submit' class='g14' value='Далее'>
						</form>");
			}	
			}
			else 
			{
				printf("Данные не внесены!!!<br><br><br>
						<form method='post' action='temper.php'>
							<input type='submit' class='g14' value='Далее'>
						</form>");
			} 
		}
		break;
	
		default:
		{
			include ("left0.php");
		}
		break;
	}

	?>
</td>


<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
