<?
//printf("<p align='center' style='font-size:24px; color:#ff0000;'>� 14:00 �� 16:00 ���������� ����������� ������!</p>");

$data = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$dd = strftime("%d", $data);
$mm = strftime("%m", $data);
$gg = strftime("%Y", $data);
$prazdnik = $dd.$mm;
//echo $prazdnik;
switch ($prazdnik)
{
	case "0101":
	{
		printf("<tr><td colspan='2' align='center' class='r18'>����� ���� ��� ������ ����, �� ���� �������, ������� � ��������,<br />� ����� ���� ������, � ��� � �����, ������� � �����, ������ � �������!</td>
		</tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_ng.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "0201":
	{
		printf("<tr><td colspan='2' align='center' class='r18'>����� ���� ��� ������ ����, �� ���� �������, ������� � ��������,<br />� ����� ���� ������, � ��� � �����, ������� � �����, ������ � �������!</td>
		</tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_ng.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "2302":
	{
		printf("<tr><td colspan='2' align='center' class='r18'>&#1606;&#1574;&#1589;&#1590;&#1724; &#1580;&#1737;&#1704;&#1951;&#1637; &#1641;&#1669;&#1698;&#1712;&#1730; &#1582;&#1572;&#1592;&#1574;&#1672; &#1788;&#1786;&#1687; &#1740;&#1714;&#1741;&#1677;&#1687;<br />&#1588;&#1591;&#1662;&#1710; &#1673; &#1692;&#1680;&#1675;&#1670; &#1704;&#1703;&#1701; &#1715;&#1728;&#1730; &#1590;&#1579;&#1579;&#1593;&#1577;&#1586; &#1690;&#1673;&#1686;<br />23 &#1603;&#1573; 02 &#1675;&#1658;&#1670;&#1721; &#1660;&#1683;&#1712;&#1726;&#1737;&#1717; &#1655;&#1702;&#1787;&#1742;&#1763;&#1778;&#1609;&#1668; &#1725;&#1674;<br />� ����������. ��� ����� :)</td>
		</tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_anime.gif'/></marquee></td>
		</tr>
		");
	}
	break;
	case "0803":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>������� ��� �� ���� �������!<br />�� ���� ������� ������� ��������,<br />�� ������ ��������� ���� � ����,<br />�� ���� �������, ������� ������������!</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_roses.gif'/></marquee></td>
		</tr>
		");
	}
	break;
	case "0903":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>������� ��� �� ���� �������!<br />�� ���� ������� ������� ��������,<br />�� ������ ��������� ���� � ����,<br />�� ���� �������, ������� ������������!</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_roses.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "0105":
	{
	printf("<tr><td colspan='2' align='center' class='b18'>�� �������� ������ ��������,<br />� ������ ������� �����,<br />����� �� ������ ������� � ���<br />� �������� �������� ����.</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_may.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "0205":
	{
	printf("<tr><td colspan='2' align='center' class='g18'>�� �������� ������ ��������,<br />� ������ ������� �����,<br />����� �� ������ ������� � ���<br />� �������� �������� ����.</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_may.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "0905":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>��� ���� ����� �����, ��������,<br />�������� �� ������ ������ ��� �����.<br />������������ �� ���� ���� ������,<br />� �������: \"������� �� ������, ��������!!!\"</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_army.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "1005":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>��� ���� ����� �����, ��������,<br />�������� �� ������ ������ ��� �����.<br />������������ �� ���� ���� ������,<br />� �������: \"������� �� ������, ��������!!!\"</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_army.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "2408":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>����� ������ � �� � �����,<br />������� ���� ������,<br />����� ��, ���� ���� � ����,<br />� ���� �� �����'���.</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_gerb.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "0411":
	{
	printf("<tr><td colspan='2' align='center' class='r18'>� �� ���� ������� � ����,<br />��� ������ �� ��� �� �����.<br />� ���� �� �����, ���.<br />��� ����� ��� ��������!</td></tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_uz.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	case "3112":
	{
		printf("<tr><td colspan='2' align='center' class='r18'>����� ������ ������ ���, ����� � ����� ���������,<br />� ����� ������ �������� ��������, ������� � �������!</td>
		</tr>
		<tr>
			<td colspan='2' align='center'><marquee><img src='img/logo_ng.gif'/></marquee></td>
		</tr>
		");
	}
	break;

	default:
	{
	printf("
		<tr>
			<td colspan='2' align='center'><img src='img/logo.gif'/></td>
		</tr>
		");
	}
	break;
}
?>
<!--
<tr>
	<td colspan="2" align="center"><img src="img/logo.gif"/></td>
</tr>-->
<tr height="2" bgcolor="#00ff00">
	<td colspan="2"></td>
</tr>