<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");

if ($left[5] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>� 14:00 �� 15:00 ���������� ����������� ������!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>��� �������!!!</p>");
	exit;
}

if (isset($_POST['check']))			{$check = $_POST['check'];			if ($check == '')		{unset($check);}}
if (isset($_POST['id']))			{$id = $_POST['id'];				if ($id == '')			{unset($id);}}
if (isset($_POST['nden']))			{$nden = $_POST['nden'];			if ($nden == '')		{unset($nden);}}
if (isset($_POST['nmes']))			{$nmes = $_POST['nmes'];			if ($nmes == '')		{unset($nmes);}}
if (isset($_POST['ngod']))			{$ngod = $_POST['ngod'];			if ($ngod == '')		{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas = $_POST['nchas'];			if ($nchas == '')		{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin = $_POST['nmin'];			if ($nmin == '')		{unset($nmin);}}
if (isset($_POST['prim']))			{$prim = $_POST['prim'];			if ($prim == '')		{unset($prim);}}
if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer'];		if ($invnomer=='')		{unset($invnomer);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "��� �� ���. �������������� ���� - ".$_SESSION['adminUser']."   id=".$id." ";?></title>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr>

<?php
	include ("left.php"); //���������� ����� �����
?>

<td> </br>

<?
if (isset($check) && isset($id) && isset($_SESSION['adminUser']))
{
	//�������� ���� ��������� ������
	$resav = mysql_query ("SELECT * FROM avariya WHERE id = '$id'",$db);
	$rowav = mysql_fetch_array($resav);
	do
	{
	printf("
	<form action='sboy_ust_add.php' method='post' name='form6' id='form6'>
 	<table border='1' cellpadding='0' cellspacing='1'>
		<tr valign='center'>
			<td align='center' width='120'><span class='g12'>%s</span></td>
			<td align='center' width='120'><span class='g12'>%s</span></td>
			<td align='center' width='80'><span class='g12'>%s</span></td>
			<td align='center' width='70'><span class='g12'>%s</span></td>
			<td align='center' width='80'><span class='g12'>%s</span></td>
			<td align='center' width='60'><span class='g12'>%s.%s.%s</span></td>
			<td align='center' width='35'><span class='g12'>%s:%s</span></td>
			<td align='center' width='300'><span class='g12'>%s ���.� %s</span></td>
		</tr>
		<tr valign='center'>
			</tr>
	</table>
	</form>
	", $rowav['gruppa'], $rowav['station'], $rowav['slujba'], $rowav['rabmesto'], $rowav['ustroystvo'], $rowav['nden'], $rowav['nmes'], $rowav['ngod'], $rowav['nchas'], $rowav['nmin'], $rowav['prim'], $rowav['invnomer']);
	}
	while ($rowav = mysql_fetch_array($resav));
}
else 
{
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>_</p>";
	echo "<p class='r18'>������ ������������!!! ���������� �������� ������� ����������� ����.</p>";
	unset($id);
}

?>
            
	<form action='sboy_update.php' method='post' name='inssboy' id='inssboy'>
	<table border='0' cellpadding='12' width='100%'>
	<tr>
		<td colspan='2' align='center'>
				<?php
					printf ("</br></br><span class='g16'> %s, ��������� ���������� <span class='r16'>���</span> ���� �����:</span></br></br>",$_SESSION['adminUser']);
				?>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span  class='g14'>���� ������ � ����:</span>
		</td>
		<td align='left'>
   				<select name='nden'>
				<?php
				printf ("<option selected>$nden</option>");
/*					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['den']))
						printf ("<option>%s</option>",$mydata['den']);
					}
*/					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='nmes'>
				<?php

				$resdata = mysql_query("SELECT mes FROM data WHERE id=$nmes",$db);
				$mydata = mysql_fetch_array($resdata);
				$nmes=$mydata['mes'];

				printf ("<option selected>$nmes</option>");
/*					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �������
						if (isset($mydata['mes']))
						printf ("<option>%s</option>",$mydata['mes']);
					}
*/					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='ngod'>
				<?php
				printf ("<option selected>$ngod</option>");
/*					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �����
						if (isset($mydata['god']))
						printf ("<option>%s</option>",$mydata['god']);
					}
*/					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span  class='r14'>����� ������ � ����:</span>
		</td>
		<td align='left'>
   				<select name='nchas'>
				<?php
				printf ("<option selected>$nchas</option>");
					$resdata = mysql_query("SELECT chas FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �����
						if (isset($mydata['chas']))
						printf ("<option>%s</option>",$mydata['chas']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name='nmin'>
				<?php
				printf ("<option selected>$nmin</option>");
					$resdata = mysql_query("SELECT min FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �����
						if (isset($mydata['min']))
						printf ("<option>%s</option>",$mydata['min']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>����������� �����<br>(���� ����):</span>
		</td>
		<td align="left">
		<?
				printf ("<input name='invnomer' type='text' value='$invnomer' size='20' maxlength='20'>");
		?>
		</td>
	</tr>
   	<tr>
		<td align='right'>
				<span class='g14'>����������</br>(������������ ���� </br> �� ���������� ����, </br> ������� ��������� </br>  ����������):</span>
		</td>
		<td align='left'>
				<?php
				printf("<textarea name='prim' cols='40' rows='5'>$prim</textarea>");
					$resgruppa = mysql_query("SELECT gruppa FROM mehanik WHERE mehanik='$_SESSION[adminUser]'",$db);
					$mygruppa = mysql_fetch_array($resgruppa);
					$gruppa = $mygruppa['gruppa'];

				printf("<input name='id' type='hidden' value='%s'>						   
						<input name='upd' type='hidden' value='%s'>						   
						<input name='gruppa' type='hidden' value='%s'>", $id, '5', $gruppa);
				?>
		</td>
	</tr>
    
<!--	<tr>
			<td align='right'><span class='r14'>������� ��� ������:</span></td>
			<td align='left'><input name="parol" type="password" size="25" input="input"></td>
	</tr>
-->
    
    
   	<tr>
		<td colspan='2' align='center'>
				<input name='submit' type='submit' class='b14' id='submit' value='������������� ����'></br></br>
		</td>
	</tr>
	</table>
	</form>
</td>
</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>