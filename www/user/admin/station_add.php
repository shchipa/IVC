<?php
require_once("adminOnly.php");
include ("db.php");//����������� � ����� ������
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
	<form action='station_insert.php' method='post' name='inssboy' id='inssboy'>
	<table border="0" cellpadding="12" width="100%">
	<tr>
		<td colspan="2" align="center"><span  class='b14'>������� ������:</span></td>
	</tr>
   	<tr>
		<td align="right">
			<span  class='g14'>������� �������� �������:</span>
		</td>
		<td align="left">
			<input name='station' type='text' value='' size='14' maxlength='50'>
		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������� ������ ��� �����:</span>
		</td>

		<td align="left">
   				<select name="gruppa">
				<option>&nbsp;</option>
				<?php
					$result = mysql_query("SELECT gruppa FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['gruppa']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td align="right">
				<span  class='g14'>�������� ������ ��� �������:</span>
		</td>

		<td align="left">
   				<select name="gruppa_remont">
				<option>&nbsp;</option>
				<?php
					$result = mysql_query("SELECT gruppa_remont FROM gruppa",$db);
					$mystat = mysql_fetch_array($result);
					do
					{//����� �������� �������� �����
						printf ("<option>%s</option>",$mystat['gruppa_remont']);
					}
					while ($mystat = mysql_fetch_array($result));
   		     	?>
				</select>

		</td>
	</tr>
   	<tr>
		<td colspan="2" align="center">
				<input name='submit' type='submit' class='b14' id='submit' value='�������� �������'></br></br>
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
