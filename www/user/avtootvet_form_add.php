<form action="avtootvet_add.php" method="post" name="avtootvetu_add" >
  <input name="add_avtootveta" class="j12"  value="<?php if (isset($p1)){printf("%s",$p1); } else {printf("");} ?>" size="9" maxlength="9" readonly="readonly" type="hidden" >
  <select name="avtootvet_nom" type= "text" class="j12" >
    <? 

	for ($ser1=0; $ser1<=9; $ser1++ )
	{
		if ($ser1==0) {$ser='00';}
		if ($ser1==1) {$ser='01';}
		if ($ser1==2) {$ser='02';}
		if ($ser1==3) {$ser='03';}
		if ($ser1==4) {$ser='04';}
		if ($ser1==5) {$ser='05';}
		if ($ser1==6) {$ser='06';}
		if ($ser1==7) {$ser='07';}
		if ($ser1==8) {$ser='08';}
		if ($ser1==9) {$ser='09';}
		echo "!!!".$ser;
			$text = "ip >= 0";
				if(isset($gruppa))
				{
					$text = "gruppa = '$gruppa'";
				}
				
				if($text == "ip >= 0")
				{
					if(isset($station))
					{
						$text = "station = '$station'";
					}
				}
				else
				{
					if(isset($station))
					{
						$text = $text." AND station = '$station'";
					}
				}
				$resav2 = mysql_query ("SELECT avtootvet_nom FROM abonent WHERE avtootvet_ser = '$avtootvet_ser2' AND avtootvet_nom = '$ser' ",$db);
		$rowav2 = mysql_fetch_array($resav2);
		do
		{
			if (!isset($rowav2['avtootvet_nom']))
				{
					printf("<option>%s</option>", $ser);
				}
				
//			echo $rowav2['avtootvet_nom'];
		}
		while ($rowav2 = mysql_fetch_array($resav2));

	}


	for ($ser=10; $ser<=99; $ser++ )
	{
		$text = "ip >= 0";
				if(isset($gruppa))
				{
					$text = "gruppa = '$gruppa'";
				}
				
				if($text == "ip >= 0")
				{
					if(isset($station))
					{
						$text = "station = '$station'";
					}
				}
				else
				{
					if(isset($station))
					{
						$text = $text." AND station = '$station'";
					}
				}
		$resav2 = mysql_query ("SELECT avtootvet_nom FROM abonent WHERE avtootvet_ser = '$avtootvet_ser2' AND avtootvet_nom = '$ser' ",$db);
		$rowav2 = mysql_fetch_array($resav2);
		do
		{
			if (!isset($rowav2['avtootvet_nom']))
				{
					printf("<option>%s</option>", $ser);
				}
//			echo $rowav2['avtootvet_nom'];
		}
		while ($rowav2 = mysql_fetch_array($resav2));

	}
?>
  </select>
  <input name="submit_add" type="submit" class="b12" value="Добавить" >
</form>