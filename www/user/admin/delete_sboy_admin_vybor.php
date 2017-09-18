<?php
include ("db.php");//Соединяемся с базой данных

if (isset($_POST['check']))			{$check = $_POST['check'];				if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];					if ($id == '')			{unset($id);}}
if (isset($_POST['fio']))			{$fio = $_POST['fio'];					if ($fio == '')			{unset($fio);}}
if (isset($_POST['parol']))			{$parol=$_POST['parol'];				if ($parol=='')			{unset($parol);}}
if (isset($_POST['kgod']))			{$kgod = $_POST['kgod'];				if ($kgod == '')		{unset($kgod);}}
if (isset($_POST['kchas']))			{$kchas = $_POST['kchas'];				if ($kchas == '')		{unset($kchas);}}
if (isset($_POST['kmin']))			{$kmin = $_POST['kmin'];				if ($kmin == '')		{unset($kmin);}}
if (isset($_POST['prim']))			{$prim = $_POST['prim'];				if ($prim == '')		{unset($prim);}}
if (isset($_POST['ust']))			{$ust = $_POST['ust'];					if ($ust == '')			{unset($ust);}}
if (isset($_POST['station']))		{$station = $_POST['station'];			if ($station == '')		{unset($station);}}
if (isset($_POST['slujba']))		{$slujba = $_POST['slujba'];			if ($slujba == '')		{unset($slujba);}}
if (isset($_POST['rabmesto']))		{$rabmesto = $_POST['rabmesto'];		if ($rabmesto == '')	{unset($rabmesto);}}
if (isset($_POST['ustroystvo']))	{$ustroystvo = $_POST['ustroystvo'];	if ($ustroystvo == '')	{unset($ustroystvo);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "Два по Сто. Редактирование (обновление) сбоя - ".$fio."   id=".$id." обнова=".$upd." ";?></title>
<link href="../style.css" rel="stylesheet" type="text/css">

</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //Подключаем шапку сайта
?>
<tr>

<?php
	include ("left.php"); //Подключаем левую часть
?>

<td> </br>
<?

if (isset($check)&&isset($id)&&isset($fio)&&isset($parol))
{//Заносим информацию
	$delete = mysql_query ("DELETE FROM avariya WHERE id='$id'");
	if ($delete == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
					<tr align='center'>
						<td>
		  					<span class='g18'></br></br>Спасибо, %s. Вы только что успешно удалили запись о сбое из базы данных!</br></br></br></br></span>
						</td>
					</tr>
					<tr height='10' align='center'>
						<td> </td>
					</tr>

				</table>
				", $fio);
	}
	else // Если не добавилась в базу данных
	{
				echo "<span class='r18'>Технический сбой! Вид update!!!</span><span class='g18'></br></br>Сообщите, пожалуйста о произошедшей ситуации по телефону <span class='r18'>2-54-82, 2-54-23</span> в ИВЦ Донецк. Спасибо.</span>";
				
echo $upd;
echo $id;
echo $fio;
echo $parol;
echo $slujba;
echo $rabmesto;
echo $ustroystvo;
	}
}
else
{
	echo "А ничё нет?! И ты хто???";
}
?>
</td>
</tr>

<?php
	include ("bottom.php"); //Подключаем низ сайта
?>
</table>

</body>
</html>