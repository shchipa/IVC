<?php
include ("avtorizatciya_admin.php");

$proverka = 0; //������� � ������� ���������� ��������������� ������ (������� 2-�� � ����. "��������")
include ("proverka_free.php");

//$struk_podr1 ='';

if (isset($_POST['p1']))			{$p1 = $_POST['p1'];					if ($p1=='')												{$p1 = 0;}}
if (isset($_POST['struk_podr1']))	{$struk_podr1=$_POST['struk_podr1'];	if ($struk_podr1=='�������� ����������� �������������...')	{unset($struk_podr1);}}

if (isset($_POST['submit']))		{$submit = $_POST['submit'];			if ($submit=='')		{$submit = 0;}}else {$submit ='';}

/* echo "p1=".$p1;
 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��� �� ���</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" >
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr>

<?php
	include ("left.php"); //���������� ����� �����
?>


<td align="center">
<p class='g18'>�������� �����������</p>


<form action="temper.php" method="post" name="avtootvetu" >
  <select name="struk_podr1">
      <option selected>�������� ����������� �������������...</option>
    <?php
							$resust3 = mysql_query("SELECT * FROM struk_podr ORDER BY podraz ASC",$db);
							$myust3 = mysql_fetch_array($resust3);
							do
							{//����� ���������
								if (isset ($myust3['podraz']) && ($myust3['podraz'] == $struk_podr1 ))
								{
									printf ("<option selected>%s</option>",$struk_podr1);
									$p1=$rowav3['podraz'];
								}
								else
								{
									printf ("<option>%s</option>",$myust3['podraz']);
									$p2=$rowav3['podraz'];
								}
							}
							while ($myust3 = mysql_fetch_array($resust3));
		   		     	?>
  </select>
  <input name="submit" type="submit" class="b14" value="�������"  >

</form>
<br />


<table width="75%" border='1' cellpadding="1" cellspacing="0" align="center" > 
<tr  valign='center' class='k12' bgcolor='#C0DCC0'>
<td align='center' ><b>����������� �������������</b></td>
<td align='center' width='80' ><b>�������</b></td>
<td align='center'><b>�����������</b></td>
<td align='center'><b>���</b></td>
<td align='center'><b>�����������</b></td>
<td align='center'><b>����</b></td>

	  </tr>
<?php

//echo $struk_podr1;

		$res = mysql_query ("SELECT * FROM temperatura WHERE struk_podr = '$struk_podr1'",$db);
			$row = mysql_fetch_array($res);
				do
				{
					printf("
					<tr align='center' valign='center' onmouseover='this.className=\"lineSelected\";' onmouseout='this.className=\"lineOne\";'>
						<td class='k12'>%s</td>
						<td class='k12'>%s</td>
						<td class='k12'>%s</td>
						<td class='k12'>%s</td>
						<td class='k12'>%s</td>
						<td class='k12'>%s</td>
					</tr>
					", $row['struk_podr'], $row['komnata'], $row['temperat'], $row['fio'], $row['prim'], $row['vdata']);
				}
				while ($row = mysql_fetch_array($res));?>
</table>
<br /> 

<? 
if (!isset($_POST['struk_podr1'])||($_POST['struk_podr1']=='�������� ����������� �������������'))
{
printf("");
}
if (isset($_POST['struk_podr1']))
{
	
	printf("<form action='temper_form_add.php' method='post'>
      <input name='struk_podr1' type='hidden' value='$struk_podr1 '>
 
	 <input name='submit' type='submit' class='b14' value='�������� ����� �����������'  >
	</form>
	"); //���������� ��� �����
	
} 
?>

<br />
</td>

</tr>

<?php
	include ("bottom.php"); //���������� ��� �����
?>
</body>
</html>