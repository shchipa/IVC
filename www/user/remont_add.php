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
	<form action='remont_insert.php' method='post' name='insakt' id='insakt'>
	<table border="0" cellpadding="7" width="100%">
   	<tr>
		<td colspan="2" align="center"></br><span class='r14'>�������� ���</span></br></br></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
				<?php
					printf ("<span class='g14'> %s, ��������� ���������� �����:</span></br></br>",$_SESSION['adminUser']);
				?>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>����� ����:<span class='r18'> *</span></span>
		</td>
		<td align="left">
				<input name='akt' type='text' value='' size='20' maxlength='4'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>����������� �����:<span class='r18'> *</span></span>
		</td>
		<td align="left">
				<input name='invnomer' type='text' value='' size='20' maxlength='15'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>���������:<span class='r18'> *</span></span>
		</td>
		<td align="left">
   				<select name="sost">
				<option selected disabled>�������� ...</option>
				<?php
					$result = mysql_query("SELECT sost FROM sost WHERE remont = '1' ORDER BY sost",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������
						printf ("<option>%s</option>",$mystat['sost']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������:<span class='r18'> *</span></span>
		</td>
		<td align="left">
   				<select name="station">
				<option selected disabled>�������� �������...</option>
				<?php
					$result = mysql_query("SELECT station FROM station ORDER BY station",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������
						printf ("<option>%s</option>",$mystat['station']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������������/������:<span class='r18'> *</span></span>
		</td>
		<td align="left">
				<input name='slujba' type='text' value='' size='20' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span class='g14'>������� �����:<span class='r18'> *</span></span>
		</td>
		<td align="left">
				<input name='rabmesto' type='text' value='' size='20' maxlength='20'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>����������:<span class='r18'> *</span></span>
		</td>
		<td align="left">
   				<select name="ustroystvo">
				<option selected disabled>�������� ����������...</option>
				<?php
					$resust = mysql_query("SELECT ustroystvo FROM ustroystvo WHERE remont = '1' ORDER BY ustroystvo",$db);
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
				<span  class='g14'>���� �����������:<span class='r18'> *</span></span>
		</td>
		<td align="left">
   				<select name="nden">
				<option selected disabled>����</option>
				<?php
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['den']))
						printf ("<option>%s</option>",$mydata['den']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="nmes">
				<option selected disabled>�����</option>
				<?php
					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �������
						if (isset($mydata['mes']))
						printf ("<option>%s</option>",$mydata['mes']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="ngod">
				<option selected disabled>���</option>
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �����
						if (isset($mydata['god']))
						printf ("<option>%s</option>",$mydata['god']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>���� ��������:</span>
		</td>
		<td align="left">
   				<select name="kden">
				<option selected disabled>����</option>
				<?php
					$resdata = mysql_query("SELECT den FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� ���� ������
						if (isset($mydata['den']))
						printf ("<option>%s</option>",$mydata['den']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kmes">
				<option selected disabled>�����</option>
				<?php
					$resdata = mysql_query("SELECT mes FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �������
						if (isset($mydata['mes']))
						printf ("<option>%s</option>",$mydata['mes']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>

   				<select name="kgod">
				<option selected disabled>���</option>
				<?php
					$resdata = mysql_query("SELECT god FROM data",$db);
					$mydata = mysql_fetch_array($resdata);
					do
					{//����� �����
						if (isset($mydata['god']))
						printf ("<option>%s</option>",$mydata['god']);
					}
					while ($mydata = mysql_fetch_array($resdata));
   		     	?>
				</select>
		</td>
	</tr>
	<tr>
		<td align="right">
				<span class='g14'>��������������<br>����������:</span>
		</td>
		<td align="left">
				<textarea name='haraktustr' cols='25' rows='3'></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">
				<span class='g14'>����������� ����:</span>
		</td>
		<td align="left">
				<textarea name='polomka' cols='25' rows='2'></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">
				<span class='g14'>����������� ��������<br>��� �������:</span>
		</td>
		<td align="left">
				<textarea name='zch' cols='25' rows='3'></textarea>
		</td>
	</tr>
	<tr>
		<td align="right">
				<span class='g14'>�������<br>�����������:</span>
		</td>
		<td align="left">
				<textarea name='fiospetc' cols='25' rows='2'></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='�������� ����'></br></br>
				<?
					$flag=1;
					printf ("<input name='flag' type='hidden' value='%s'>", $flag);
				?>
		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<span class='r18'>*</span></span><span  class='g14'> - ����, ������������ ��� ����������</span>
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