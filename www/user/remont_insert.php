<?php
include ("avtorizatciya_admin.php");
$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");

if ($left[4] == 0)
{
//	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>� 14:00 �� 15:00 ���������� ����������� ������!</p>");
	printf("<br /><br /><p align='center' style='font-size:48px; color:#ff0000;'>��� �������!!!</p>");
	exit;
}

if (isset($_POST['flag']))			{$flag=$_POST['flag'];				if ($flag=='')								{unset($flag);}}

if (isset($_POST['id']))			{$id=$_POST['id'];					if ($id=='')								{unset($id);}}
if (isset($_POST['akt']))			{$akt=$_POST['akt'];				if ($akt=='')								{unset($akt);}}
if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer'];		if ($invnomer=='')							{unset($invnomer);}}
if (isset($_POST['sost']))			{$sost=$_POST['sost'];				if ($sost=='�������� ...')					{unset($sost);}}
//if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='')							{unset($gruppa);}}
if (isset($_POST['station']))		{$station=$_POST['station'];		if ($station=='�������� �������...')		{unset($station);}}
if (isset($_POST['slujba']))		{$slujba=$_POST['slujba'];			if ($slujba=='')							{unset($slujba);}}
if (isset($_POST['rabmesto']))		{$rabmesto=$_POST['rabmesto'];		if ($rabmesto=='')							{unset($rabmesto);}}
if (isset($_POST['ustroystvo']))	{$ustroystvo=$_POST['ustroystvo'];	if ($ustroystvo=='�������� ����������...')	{unset($ustroystvo);}}
if (isset($_POST['nden']))			{$nden=$_POST['nden'];				if ($nden=='����')							{unset($nden);}}
if (isset($_POST['ngod']))			{$ngod=$_POST['ngod'];				if ($ngod=='���')							{unset($ngod);}}

if (isset($_POST['nmes']))
	{
		$nmes=$_POST['nmes'];
		if ($nmes=='�����')
		{
			unset($nmes);
		}
		else
		{
			$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$nmes'",$db);
			$mymes = mysql_fetch_array($resmes);
			$nmes=$mymes['den'];
		}
	}

if (isset($_POST['kden']))			{$kden=$_POST['kden'];				if ($kden=='����' or $kden=='')							{$kden=' ';}}
if (isset($_POST['kgod']))			{$kgod=$_POST['kgod'];				if ($kgod=='���' or $kgod=='')							{$kgod=' ';}}

//echo "kmes".$kmes."_<br>";

if (isset($_POST['kmes']))
	{
		$kmes=$_POST['kmes'];
		if ($kmes=='�����' or $kmes=='')
		{
			$kmes=' ';
		}
		else
		{
			$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$kmes'",$db);
			$mymes = mysql_fetch_array($resmes);
			$kmes=$mymes['den'];
		}
	}

if (isset($_POST['haraktustr']))	{$haraktustr=$_POST['haraktustr'];	if ($haraktustr=='')						{$haraktustr=' ';}}
if (isset($_POST['polomka']))		{$polomka=$_POST['polomka'];		if ($polomka=='')							{$polomka=' ';}}
if (isset($_POST['zch']))			{$zch=$_POST['zch'];				if ($zch=='')								{$zch=' ';}}
if (isset($_POST['fiospetc']))		{$fiospetc=$_POST['fiospetc'];		if ($fiospetc=='')							{$fiospetc=' ';}}

$resgruppa = mysql_query("SELECT gruppa_remont FROM station WHERE station='$station'",$db);
$mygruppa = mysql_fetch_array($resgruppa);
$gruppa = $mygruppa['gruppa_remont'];

if ($sost = '� �������')
{
	$kden=' ';
	$kmes=' ';
	$kgod=' ';
}

/*
echo "id".$id."_<br>";
echo "flag".$flag."_<br>";
echo "akt".$akt."_<br>";
echo "invnomer".$invnomer."_<br>";
echo "sost".$sost."_<br>";
echo "gruppa".$gruppa."_<br>";
echo "station".$station."_<br>";
echo "slujba".$slujba."_<br>";
echo "rabmesto".$rabmesto."_<br>";
echo "ustroystvo".$ustroystvo."_<br>";
echo "nden".$nden."_<br>";
echo "nmes".$nmes."_<br>";
echo "ngod".$ngod."_<br>";
echo "kden".$kden."_<br>";
echo "kmes".$kmes."_<br>";
echo "kgod".$kgod."_<br>";
echo "haraktustr".$haraktustr."_<br>";
echo "polomka".$polomka."_<br>";
echo "zch".$zch."_<br>";
echo "fiospetc".$fiospetc."_<br>";
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "���������� ���� �".$akt." ".$_SESSION['adminUser']." ";?></title>
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
<table width="100%" border="0" width="100%"	cellspacing="0"	cellpadding="0">
<?php
	include ("high.php"); //���������� ����� �����
?>

<?php
	include ("left.php"); //���������� ����� �����
?>
<td align="center">
<?
if (isset($id)&&isset($akt)&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($invnomer)&&isset($sost)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($_SESSION['adminUser']))
{
	$update = mysql_query ("UPDATE remont SET akt='$akt', gruppa='$gruppa', station='$station', slujba='$slujba', rabmesto='$rabmesto', ustroystvo='$ustroystvo', invnomer='$invnomer', sost='$sost', nden='$nden', nmes='$nmes', ngod='$ngod', kden='$kden', kmes='$kmes', kgod='$kgod', haraktustr='$haraktustr', polomka='$polomka', zch='$zch', fiospetc='$fiospetc', fio='$_SESSION[adminUser]' WHERE id='$id'");
	if ($update == 'true') 
	{
		printf ("<table border='0'	cellspacing='0'	cellpadding='20'>
					<tr align='center'>
						<td colspan='2'>
	  						<span class='g18'></br></br>�������, %s. ���� ���������� � ����������� ���� ������� ��������� � ���� ������!</br></br></br></br></span>
						</td>
					</tr>
					<tr align='center'>
						<td align='right'>
							<form method='post' action='remont_redaktirovanie_v_remonte.php'>
								<input type='submit' class='g14' title='���������� ������' value='����� ������������� � �������'>
							</form></br></br></br>
						</td>
						<td align='left'>
							<form method='post' action='remont_redaktirovanie.php'>
								<input type='submit' class='g14' title='���������� ������' value='����� ������������� ���'>
							</form></br></br></br>
						</td>
							</form></br></br></br>
						</td>
					</tr>
				</table>
				", $_SESSION['adminUser']);
	}
	else // ���� �� ���������� � ���� ������
	{
		echo "<span class='r18'>����������� ����! ��� update!!!</span><span class='g18'></br></br>��������, ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
	}
}
else
{
	if (isset($flag)&&isset($akt)&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($invnomer)&&isset($sost)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($_SESSION['adminUser']))
	{//������� ����������
		$flag=0;
		$res = mysql_query("SELECT * FROM remont",$db);
		$my = mysql_fetch_array($res);
		do
		{//�������� ������������ ������
			if ($akt==$my['akt']&&$invnomer==$my['invnomer']&&$gruppa==$my['gruppa']&&$station==$my['station']&&$slujba==$my['slujba']&&$rabmesto==$my['rabmesto']&&$ustroystvo==$my['ustroystvo']&&$ngod==$my['ngod']&&$nmes==$my['nmes']&&$nden==$my['nden'])
			{
				$flag=2;
			}
		}
		while ($my = mysql_fetch_array($res));
		
		if ($flag == 0)
		{
				$insert = mysql_query ("INSERT INTO remont (akt, gruppa, station, slujba, rabmesto, ustroystvo, invnomer, sost, nden, nmes, ngod, kden, kmes, kgod, haraktustr, polomka, zch, fiospetc, fio) VALUES ('$akt', '$gruppa', '$station', '$slujba', '$rabmesto', '$ustroystvo', '$invnomer', '$sost', '$nden', '$nmes', '$ngod', '$kden', '$kmes', '$kgod', '$haraktustr', '$polomka', '$zch', '$fiospetc', '$_SESSION[adminUser]')");
				if ($insert == 'true') 
				{
					printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							    <tr align='center'>
									<td colspan='5'>
										<span class='g18'></br></br>�������, %s. ��� ��� ������� �������� � ���� ������!</br></br></br></br></span>	
									</td>
								</tr>
								<tr height='10' align='center'>
									<td colspan='5'> </td>
								</tr>
								<tr align='center'>
									<td>
										<form method='post' action='remont_add.php'>
											<input type='submit' class='g14' title='���������� ������' value='�����'>
										</form></br></br></br>
									</td>
								</tr>
							</table>
							", $_SESSION['adminUser']);
				}
				else // ���� �� ���������� � ���� ������
				{
					echo "<span class='r18'>����������� ����! ��� akt!!!</span><span class='g18'></br></br>��������, ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
				}
		}
		else
		{
			echo "<span class='r18'>������ ���������� ��� ��������� � ���� ������</span>";	
		}
	}
	else
	{//���� ������� �� ��� ����������
		printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
				     <tr align='center'>
						 <td>
		  					 <span class='g18'></br></br>��� ��� <span class='r18'>��</span> �������� � ���� ������!</br></span>
						 </td>
					 </tr>
					<tr height='10' align='center'>
						 <td> </td>
					 </tr>
					<tr align='center'>
						 <td>
			  				 <span class='r18'></br>������� �� ��� ����������.</br></span>
						 </td>
					 </tr>
					<tr height='20' align='center'>
						 <td> </td>
					 </tr>
					<tr align='center'>
						 <td>
			  				 <span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ����, ���������� <span class='r18'>*</span> � ��������� �������.</br></span>
						 </td>
					 </tr>
					<tr height='40' align='center'>
						 <td>&nbsp;</td>
					 </tr>
				 </table>
			");
	}
}
?>
</td>

<?php
			include ("bottom.php"); 
?>
</table>

</body>
</html>