<td width="150" style="height:100%" background="img/fonleft.gif" valign="top">
	<table style="height:100%" border="0" cellpadding="0" cellspacing="0">
    	<tr>
			<td valign="top">
						<?php
							if( (!isset($_SESSION['adminUser'])) || (!isset($_SESSION['adminPassword'])) )
							{
								include ("left_guest.php");
							}
							else
							{
								include ("left_user.php");
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