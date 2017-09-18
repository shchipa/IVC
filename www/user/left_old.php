<td width="150" style="height:100%" background="img/fonleft.gif" valign="top">
	<table style="height:100%" border="0" cellpadding="0" cellspacing="0">
    	<tr>
			<td valign="top">
						<?php
//echo $_SESSION['User'];
//$_SESSION['User']=3;
//echo $_SESSION['adminUser'];
							if( (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) )
							{
								include ("left_guest.php");
							}
							else
							{
//								include ("left_user.php");
					switch ($_SESSION['User'])
				{
				case 0:
				{
				include ("left0.php");
				}
				break;
				case 3:
				{
				include ("left3.php");
				}
				break;
				case 7:
				{
				include ("left7.php");
				}
				break;
				case 9:
				{
				include ("left9.php");
				}
				break;
				case 11:
				{
				include ("left11.php");
				}
				break;
				case 13:
				{
				include ("left13.php");
				}
				break;
				case 15:
				{
				include ("left15.php");
				}
				break;
				case 21:
				{
				include ("left_user.php");
				}
				break;

				default:
				{
				include ("left0.php");
				}
				break;
				}
					}
						?>
						</br>
			</td>
		</tr>
		<tr>
			<td valign="bottom"><img src="img/ivc.gif" /></td>
		</tr>
	</table>
</td>