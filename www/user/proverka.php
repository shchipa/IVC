<?php
//include ("proverka.php");
//$proverka = 0;

$finish = 2;
$kolvo = 6;

$result = mysql_query("SELECT user FROM mehanik WHERE mehanik='$_SESSION[adminUser]'",$db);
$rowkod = mysql_fetch_array($result);
$proverka_kod = $rowkod['user'];
//$proverka_kod = 63;
//echo "proverka_kod=".$proverka_kod;

$tcikl = $kolvo - $proverka;

for ($tc=0; $tc<$tcikl; $tc++)
{
$chislo = $proverka_kod - pow(2, $kolvo-1);
		if ($chislo >= 0)
		{
			$proverka_kod = $proverka_kod - pow(2, $kolvo-1);
			$finish = 1;
		}
		else
		{
			$finish = 0;
		}
		$kolvo = $kolvo-1;
//echo "<br>tc=".$tc;
//echo "<br>tcikl=".$tcikl;
//echo "<br>kolvo=".$kolvo;
//echo "<br>finish=".$finish."<br>";
$left[$kolvo] = $finish;
}

if ($finish == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>С 14:00 до 15:00 проводятся технические работы!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>НЕТ ДОСТУПА!!!</p>");
	exit;
}
?>