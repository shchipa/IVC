<?php
include ("db.php");//Соединяемся с базой данных
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Два по Сто</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr  style="height:100%">

<?php
	include ("left.php"); //Подключаем левую часть
?>


<td align="center">
	
	<?php

$i=0;/*
$f="2010";
$h="02";
$j="08";
$a=$f."-".$h."-".$j;
echo $a;*/
$resav = mysql_query ("SELECT * FROM avariya",$db);
$rowav = mysql_fetch_array($resav);
do
{
	$i++;
//	$d=$rowav['ngod']."-".$rowav['nmes']."-".$rowav['nden'];
	$id=$rowav['id'];

	$ndat=$rowav['ngod']."-".$rowav['nmes']."-".$rowav['nden'];
	$upn = mysql_query ("UPDATE avariya SET ndat='$ndat' WHERE id='$id'");
	if (isset($rowav['kgod']) && $rowav['kgod']!="")
	{
		$kdat=$rowav['kgod']."-".$rowav['kmes']."-".$rowav['kden'];
		$upk = mysql_query ("UPDATE avariya SET kdat='$kdat' WHERE id='$id'");
	}
	else
	{
		unset($kdat);
	}
//	$up = mysql_query ("UPDATE avariya SET ndat='$ndat', kdat='$kdat' WHERE id='$id'");

	echo $i."-".$id."-".$ndat."<br>";
	echo $i."-".$id."-".$kdat."<br>";
}
while ($rowav = mysql_fetch_array($resav));
	?>
	</br>	
</td>

</tr>
<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>
