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

if (isset($_POST['id']))			{$id=$_POST['id'];					if ($id=='')								{unset($id);}}
if (isset($_POST['flag']))			{$flag=$_POST['flag'];				if ($flag=='')								{unset($flag);}}
if (isset($_POST['gruppa']))		{$gruppa=$_POST['gruppa'];			if ($gruppa=='')							{unset($gruppa);}}
if (isset($_POST['station']))		{$station=$_POST['station'];		if ($station=='�������� �������...')		{unset($station);}}
if (isset($_POST['slujba']))		{$slujba=$_POST['slujba'];			if ($slujba=='')							{unset($slujba);}}
if (isset($_POST['rabmesto']))		{$rabmesto=$_POST['rabmesto'];		if ($rabmesto=='')							{unset($rabmesto);}}
if (isset($_POST['invnomer']))		{$invnomer=$_POST['invnomer'];		if ($invnomer=='')							{$invnomer=' ';}}
if (isset($_POST['ustroystvo']))	{$ustroystvo=$_POST['ustroystvo'];	if ($ustroystvo=='�������� ����������...')	{unset($ustroystvo);}}
if (isset($_POST['nden']))			{$nden=$_POST['nden'];				if ($nden=='����')							{unset($nden);}}
if (isset($_POST['ngod']))			{$ngod=$_POST['ngod'];				if ($ngod=='���')							{unset($ngod);}}
if (isset($_POST['nchas']))			{$nchas=$_POST['nchas'];			if ($nchas=='����')							{unset($nchas);}}
if (isset($_POST['nmin']))			{$nmin=$_POST['nmin'];				if ($nmin=='������')						{unset($nmin);}}
if (isset($_POST['prim']))			{$prim=$_POST['prim'];				if ($prim=='')								{unset($prim);}}

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

if (isset($_POST['kden']))			{$kden=$_POST['kden'];				if ($kden=='����' or $kden=='')							{unset($kden);}}
if (isset($_POST['kgod']))			{$kgod=$_POST['kgod'];				if ($kgod=='���' or $kgod=='')							{unset($kgod);}}
if (isset($_POST['kchas']))			{$kchas=$_POST['kchas'];			if ($kchas=='����' or $kchas=='')						{unset($kchas);}}
if (isset($_POST['kmin']))			{$kmin=$_POST['kmin'];				if ($kmin=='������' or $kmin=='')						{unset($kmin);}}

if (isset($_POST['kmes']))
	{
		$kmes=$_POST['kmes'];
		if ($kmes=='�����')
		{
			unset($kmes);
		}
		else
		{
			$resmes = mysql_query("SELECT den, mes FROM data WHERE mes='$kmes'",$db);
			$mymes = mysql_fetch_array($resmes);
			$kmes=$mymes['den'];
		}
	}

	$resgruppa = mysql_query("SELECT gruppa FROM station WHERE station='$station'",$db);
	$mygruppa = mysql_fetch_array($resgruppa);
	$gruppa = $mygruppa['gruppa'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><? echo "��� �� ���. ".$_SESSION['adminUser']." ���������� ���� ".$ustroystvo." �� ������� ".$station." ";?></title>
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
$nowden = date("j");
$nowmes = date("m");
$nowgod = date("Y");

if (isset($id)&&isset($_SESSION['adminUser'])&&isset($kden)&&isset($kmes)&&isset($kgod)&&isset($kchas)&&isset($kmin)&&isset($prim))
{//������� ���������� ���� ��� ���� ���� �� ���������� ����
	$kdate = date("Y-m-j H:i:s");
	$kdat=$kgod."-".$kmes."-".$kden;
	if ($nowden == $kden && $nowmes == $kmes && $nowgod == $kgod)
	{
		$insert = mysql_query ("UPDATE avariya SET kden='$kden', kmes='$kmes', kgod='$kgod', kchas='$kchas', kmin='$kmin', prim='$prim', ust='1', kfio='$_SESSION[adminUser]', kdate='$kdate', kdat='$kdat' WHERE id='$id'");
		if ($insert == 'true') 
		{
			printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
						<tr align='center'>
							<td>
		  						<span class='g18'></br></br>�������, %s. ���� ���������� �� ���������� ���� ������� ��������� � ���� ������!</br></br></br></br></span>
							</td>
						</tr>
						<tr height='10' align='center'>
							<td> </td>
						</tr>

						<tr align='center'>
							<td>
								<form method='post' action='sboy_svoi.php'>
									<input type='submit' class='g14' title='���������� ������' value='�����'>
								</form></br></br></br>
							</td>
						</tr>
					</table>
					", $_SESSION['adminUser']);
		}
		else // ���� �� ���������� � ���� ������
		{
			echo "<span class='r18'>����������� ����! ��� 1!!!</span><span class='g18'></br></br>��������, ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
		}
	}
	else
	{
		echo "<span class='r18'>���� �� ��������! ���� ���������� ������ ���� �������� �������!!!</span><span class='g18'> </br> </br>������ ������������. �������.</span>";
	}
}
else
{//���� �� ���������� ����
	if (isset($_SESSION['adminUser'])&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($kden)&&isset($kmes)&&isset($kgod)&&isset($kchas)&&isset($kmin)&&isset($prim))
	{//������� ���������� ���� ��� ���� ������ ���� � ���� (����������� � ����������)
		
		$flag=0;
		$res = mysql_query("SELECT * FROM avariya",$db);
		$my = mysql_fetch_array($res);
		do
		{//�������� ������������ ������
			if ($gruppa==$my['gruppa']&&$station==$my['station']&&$slujba==$my['slujba']&&$rabmesto==$my['rabmesto']&&$invnomer==$my['invnomer']&&$ustroystvo==$my['ustroystvo']&&$ngod==$my['ngod']&&$nmes==$my['nmes']&&$nden==$my['nden']&&$nchas==$my['nchas']&&$nmin==$my['nmin'])
			{
				$flag=2;
			}
		}
		while ($my = mysql_fetch_array($res));
		
		if ($flag == 0)
		{
		
			$ndate = date("Y-m-j H:i:s");
			$kdate = date("Y-m-j H:i:s");
			$ndat=$ngod."-".$nmes."-".$nden;
			$kdat=$kgod."-".$kmes."-".$kden;

			if ($nowden == $kden && $nowmes == $kmes && $nowgod == $kgod && $nowden == $nden && $nowmes == $nmes && $nowgod == $ngod)
			{
				$insert = mysql_query ("INSERT INTO avariya (mehanik, gruppa, station, slujba, rabmesto, invnomer, ustroystvo, nden, nmes, ngod, nchas, nmin, kden, kmes, kgod, kchas, kmin, prim, ust, nfio, ndate, kfio, kdate, ndat, kdat) VALUES ('$_SESSION[adminUser]', '$gruppa', '$station', '$slujba', '$rabmesto', '$invnomer', '$ustroystvo', '$nden', '$nmes', '$ngod', '$nchas', '$nmin', '$kden', '$kmes', '$kgod', '$kchas', '$kmin', '$prim', '1', '$_SESSION[adminUser]', '$ndate', '$_SESSION[adminUser]', '$kdate', '$ndat', '$kdat')");
				if ($insert == 'true') 
				{
					printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							    <tr align='center'>
									<td colspan='5'>
										<span class='g18'></br></br>�������, %s. ���� ���������� �� ��� ���������� ���� ������� ��������� � ���� ������!</br></br></br></br></span>	
									</td>
								</tr>
								<tr height='10' align='center'>
									<td colspan='5'> </td>
								</tr>
								<tr align='center'>
									<td>
										<form method='post' action='sboy_svoi.php'>
											<input type='submit' class='g14' title='���������� ������' value='�����'>
										</form></br></br></br>
									</td>
								</tr>
							</table>
							", $_SESSION['adminUser']);
				}
				else // ���� �� ���������� � ���� ������
				{
					echo "<span class='r18'>����������� ����! ��� 2!!!</span><span class='g18'></br></br>��������, ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
				}

			}
			else
			{
				echo "<span class='r18'>���� �� ��������! ���� ������/���������� ������ ���� �������� �������!!!</span><span class='g18'> </br> </br>������ ������������. �������.</span>";
			}
		}
		else
		{
			echo "<span class='r18'>������ ���������� ��� ��������� � ���� ������</span>";	
		}
	}

	else
	{//���� ��� �� ���� ������ ���� � ���� (����������� � ����������) - ��� ���� ���� ������ � ����
		if (isset($_SESSION['adminUser'])&&isset($gruppa)&&isset($station)&&isset($slujba)&&isset($rabmesto)&&isset($ustroystvo)&&isset($nden)&&isset($nmes)&&isset($ngod)&&isset($nchas)&&isset($nmin)&&isset($prim))
		{//������� ���������� ���� ��� ���� ���� ������ � ����
		
			$flag=0;
			$res = mysql_query("SELECT * FROM avariya",$db);
			$my = mysql_fetch_array($res);
			do
			{//�������� ������������ ������
				if ($gruppa==$my['gruppa']&&$station==$my['station']&&$slujba==$my['slujba']&&$rabmesto==$my['rabmesto']&&$invnomer==$my['invnomer']&&$ustroystvo==$my['ustroystvo']&&$ngod==$my['ngod']&&$nmes==$my['nmes']&&$nden==$my['nden']&&$nchas==$my['nchas']&&$nmin==$my['nmin'])
				{
					$flag=2;
				}
			}
			while ($my = mysql_fetch_array($res));

			if ($flag == 0)
			{

				$ndate = date("Y-m-j H:i:s");
				$ndat=$ngod."-".$nmes."-".$nden;

				if ($nowden == $nden && $nowmes == $nmes && $nowgod == $ngod)
				{

					$insert = mysql_query ("INSERT INTO avariya (mehanik, gruppa, station, slujba, rabmesto, invnomer, ustroystvo, nden, nmes, ngod, nchas, nmin, prim, nfio, ndate, ndat) VALUES ('$_SESSION[adminUser]', '$gruppa', '$station', '$slujba', '$rabmesto', '$invnomer', '$ustroystvo', '$nden', '$nmes', '$ngod', '$nchas', '$nmin', '$prim', '$_SESSION[adminUser]', '$ndate', '$ndat')");
					if ($insert == 'true') 
					{
						printf ("<table border='0'	cellspacing='0'	cellpadding='0'>
							    <tr align='center'>
									<td colspan='5'>
	  								<span class='g18'></br></br>�������, %s. ��� ���� ������� �������� � ���� ������!</br></br></br></br></span>
									</td>
								</tr>
								<tr height='10' align='center'>
									<td colspan='5'> </td>
								</tr>
								<tr align='center'>
									<td colspan='5'>
	  								<span class='g18'></br>�� ��������� ����� ����� ���������� ��������� ���� �������� ���������� � ��� ����������</br></span>
									</td>
								</tr>
								<tr align='center'>
									<td>
										<form method='post' action='sboy_svoi.php'>
											<input type='submit' class='g14' title='���������� ������' value='�����'>
										</form></br></br></br>
									</td>
									</tr>
						</table>
					", $_SESSION['adminUser']);
					}
					else // ���� �� ���������� � ���� ������
					{
						echo "<span class='r18'>����������� ����! ��� 3!!!</span><span class='g18'></br></br>��������, ���������� � ������������ �������� �� �������� <span class='r18'>2-54-82, 2-54-23</span> � ��� ������. �������.</span>";
					}
				}
				else
				{
					echo "<span class='r18'>���� �� ��������! ���� ���������� ������ ���� �������� �������!!!</span><span class='g18'> </br> </br>������ ������������. �������.</span>";
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
		  					 <span class='g18'></br></br>��� ���� <span class='r18'>��</span> �������� � ���� ������!</br></span>
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
			  				 <span class='g18'></br>����������, ��������� ��������� <span class='r18'>���</span> ���� � ��������� �������.</br></span>
						 </td>
					 </tr>
					<tr height='40' align='center'>
						 <td> </td>
					 </tr>
		    
<!--				<tr align='center'>
					 <td>
					 	<form method='post' action='sboy_add.php'>
						<input type='submit' class='g14' title='��������� � ��������� ������� �������� ������ ���������� � ����' value='��������� ����'>
						</form></br></br></br>
					 </td>
					 </tr>
-->				 </table>
			");
		}
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