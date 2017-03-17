<?php
	$option = 0;
	foreach($_GET as $elem => $value)
	{
		if ($elem == "action")
		{
			if ($value == "set")
				$option = 1;
			if ($value == "get")
				$option = 2;
			if ($value == "del")
				$option = 3;
		}
	}
	if ($option != 0)
	{
		if ($option == 1)
			setcookie($_GET["name"], $_GET["value"], time() + 3600);
		if ($option == 2)
		{
			$tmp = $_COOKIE[$_GET['name']];
			if ($tmp)
			   echo $tmp."\n";
		}
		else if ($option == 3)
			setcookie($_GET['name'], "", time() - 1);
	}
?>