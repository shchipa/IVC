<?php 
if (isset($_POST['avtootvet_ser']))	{$avtootvet_ser = $_POST['avtootvet_ser'];	if ($avtootvet_ser=='')	{$avtootvet_ser = 0;}}
if (isset($_POST['avtootvet_nom']))	{$avtootvet_nom = $_POST['avtootvet_nom'];	if ($avtootvet_nom=='')	{$avtootvet_nom = 0;}}
if (isset($_POST['rabmesto']))		{$rabmesto = $_POST['rabmesto'];			if ($rabmesto=='')		{$rabmesto = 0;}}
if (isset($_POST['ip']))			{$ip = 	$_POST['ip'];						if ($ip=='')			{$ip = 0;}}
if (isset($_POST['slujba']))		{$slujba = $_POST['slujba'];				if ($slujba=='')		{$slujba = 0;}}
if (isset($_POST['station']))		{$station = $_POST['station'];				if ($station=='')		{$station = 0;}}
if (isset($_POST['id']))			{$id = $_POST['id'];						if ($id=='')			{$id = 0;}}
if (isset($_POST['p']))				{$p = $_POST['p'];							if ($p=='')				{$p = 0;}}
if (isset($_POST['add_avtootveta']))	{$add_avtootveta = $_POST['add_avtootveta'];	if ($add_avtootveta=='')	{$add_avtootveta = 0;}}
if (isset($_POST['gruppa']))		{$gruppa = $_POST['gruppa'];				if ($gruppa=='')				{$gruppa = 0;}}
if (isset($_POST['p2']))				{$p2 = $_POST['p2'];							if ($p2=='')				{$p2 = 0;}}

include ("db.php");//����������� � ����� ������
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��� �� ���</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellspacing="0"	cellpadding="0" >
<?php
	include ("high.php"); //���������� ����� �����
?>
<tr>

<?php
	include ("left.php"); //���������� ����� �����
?>


<td > 
<blockquote><h1><em><p class='g18'>���������� ����������</em></h1> </p></blockquote>

<form action="avtootvet_insert.php" method="post" name="avtootvetu">

<table width="600" border="0" class="bor">
  <tr>
    <td width="151">��������� ������� � �������:</td>	
    <td width="439"><?php  /* printf("(%s)%s",$add_avtootveta,$avtootvet_nom);*/?> <input name="avtootvet_ser" type="text" value="<?php printf("%s",$add_avtootveta);?>" size="9" maxlength="9" readonly="readonly" >  </td>
  </tr>
 <tr>
    <td>��������� ������:</td>
    <td> <input name="avtootvet_nom" type="text"  value="<?php printf("%s",$avtootvet_nom); ?>" size="2" maxlength="2" readonly="readonly"> </td>
    </tr>
  <tr> 
    <td>�������:</td>	
    <td><select name="station" size="1" >
      <? 
	$resav = mysql_query ("SELECT station FROM station ",$db);
	$rowav = mysql_fetch_array($resav);
	do
		{
			printf("<option>%s</option>",$rowav['station']);
			$p2=$rowav['station'] ;
		}
			while ($rowav = mysql_fetch_array($resav));

?>
    </select>
    
      </td>
  </tr>
  <tr>
    <td>�������� �����</td>		<td><input  name="rabmesto" type="text" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td>������:</td>		<td><input name="slujba" type="text" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td>IP �����:</td>		<td><input  name="ip" type="text" size="15" maxlength="15"></td>
  </tr>
      <td colspan="2">
  <input name="submit" type="submit" value="�������� ���������" class="bor" id="submit">
      </td>		
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