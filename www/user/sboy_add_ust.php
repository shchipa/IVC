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
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��� �� ���</title>
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
	<form action='sboy_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center">
				<?php
					printf ("</br></br><span class='g16'> %s, ��������� ���������� <span class='r16'>���</span> ���� �����:</span></br></br>",$_SESSION['adminUser']);
				?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������:</span>
		</td>
		<td align="left">
   				<select name="station">
				<option selected disabled>�������� �������...</option>
				<?php
					$resmeh = mysql_query("SELECT * FROM mehanik WHERE mehanik='$_SESSION[adminUser]'",$db);
					$idmeh = mysql_fetch_array($resmeh);
					$idmehan = $idmeh['gruppa'];

					if ($idmehan == '��� 5, 10 ����')
					{
						$result = mysql_query("SELECT station FROM station ORDER BY station",$db);
						$mystat = mysql_fetch_array($result);
						do
						{//����� �������� �������
							printf ("<option>%s</option>",$mystat['station']);
						}
						while ($mystat = mysql_fetch_array($result));
					}
					else
					{
						$result = mysql_query("SELECT station FROM station WHERE gruppa='$idmehan' ORDER BY station",$db);
						$mystat = mysql_fetch_array($result);
						do
						{//����� �������� �������
							printf ("<option>%s</option>",$mystat['station']);
						}
						while ($mystat = mysql_fetch_array($result));
					}
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������������/������:</span>
		</td>
		<td align="left">
				<input name='slujba' type='text' value='' size='20' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>������� �����:</span>
		</td>
		<td align="left">
				<input name='rabmesto' type='text' value='' size='20' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>����������� �����<br>(���� ����):</span>
		</td>
		<td align="left">
				<input name='invnomer' type='text' value='' size='20' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>����������, �������� �� �����:</span>
		</td>
		<td align="left">
   				<select name="ustroystvo">
				<option selected disabled>�������� ����������...</option>
				<?php
					$resust = mysql_query("SELECT ustroystvo FROM ustroystvo WHERE sboy = '1' ORDER BY ustroystvo",$db);
					$myust = mysql_fetch_array($resust);
					do
					{//����� ���������
						printf ("<option> %s</option>",$myust['ustroystvo']);
					}
					while ($myust = mysql_fetch_array($resust));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>���� ��������� � ����:</span>
		</td>
		<td align="left">
   				<select name="nden">
				<option selected disabled>����</option>
				<?php
					$dn = date("d");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['den']) && $mydata['den'] < $dn)
						{printf ("<option>%s</option>",$mydata['den']);}
						if (isset($mydata['den']) && $mydata['den'] == $dn)
						{printf ("<option selected>%s</option>",$dn);}
						if (isset($mydata['den']) && $mydata['den']>$dn)
						{printf ("<option>%s</option>",$mydata['den']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="nmes">
				<option selected disabled>�����</option>
				<?php
					$mn = date("m");
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['mes']) && $mydata['id'] < $mn)
						{printf ("<option>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id'] == $mn)
						{printf ("<option selected>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id']>$mn)
						{printf ("<option>%s</option>",$mydata['mes']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="ngod">
				<option selected disabled>���</option>
				<?php
					$gn = date("Y");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['god']) && $mydata['god'] < $gn)
						{printf ("<option>%s</option>",$mydata['god']);}
						if (isset($mydata['god']) && $mydata['god'] == $gn)
						{printf ("<option selected>%s</option>",$gn);}
						if (isset($mydata['god']) && $mydata['god']>$gn)
						{printf ("<option>%s</option>",$mydata['god']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>����� ��������� � ����:</span>
		</td>
		<td align="left">
   				<select name="nchas">
				<option selected disabled>����</option>
				<?php
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

   				<select name="nmin">
				<option selected disabled>������</option>
				<?php
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
				<span  class='g14'>���� ���������� ����:</span>
		</td>
		<td align="left">
   				<select name="kden">
				<option selected disabled>����</option>
				<?php
					$dk = date("d");
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['den']) && $mydata['den'] < $dk)
						{printf ("<option>%s</option>",$mydata['den']);}
						if (isset($mydata['den']) && $mydata['den'] == $dk)
						{printf ("<option selected>%s</option>",$dk);}
						if (isset($mydata['den']) && $mydata['den']>$dk)
						{printf ("<option>%s</option>",$mydata['den']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kmes">
				<option selected disabled>�����</option>
				<?php
					$mk = date("m");
					$resdata = mysql_query("SELECT id, mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['mes']) && $mydata['id'] < $mk)
						{printf ("<option>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id'] == $mk)
						{printf ("<option selected>%s</option>",$mydata['mes']);}
						if (isset($mydata['mes']) && $mydata['id']>$mk)
						{printf ("<option>%s</option>",$mydata['mes']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kgod">
				<option selected disabled>���</option>
				<?php
					$gk = date("Y");
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['god']) && $mydata['god'] < $gk)
						{printf ("<option>%s</option>",$mydata['god']);}
						if (isset($mydata['god']) && $mydata['god'] == $gk)
						{printf ("<option selected>%s</option>",$gk);}
						if (isset($mydata['god']) && $mydata['god']>$gk)
						{printf ("<option>%s</option>",$mydata['god']);}
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>����� ���������� ����:</span>
		</td>
		<td align="left">
   				<select name="kchas">
				<option selected disabled>����</option>
				<?php
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

   				<select name="kmin">
				<option selected disabled>������</option>
				<?php
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
				<span class='g14'>����������</br>(������� ����,</br>���� �� ����������):</span>
		</td>
		<td align="left">
				<textarea name='prim' cols='40' rows='5'></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='�������� ���������� ����'></br></br>
		</td>
	</tr>
	</table>
	</form>

</td>


<?php
	include ("bottom.php"); //���������� ��� �����
?>
</table>

</body>
</html>