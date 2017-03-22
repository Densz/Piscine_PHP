<?php
	function checker($str, $array)
	{
		foreach ($array as $line) 
		{
			foreach ($line as $key => $value)
			{
				if ($key == "login" && $value == $str)
					return (1);
			}
		}
		return (0);
	}
	if ($_POST["login"] != NULL && $_POST["passwd"] != NULL && $_POST["submit"] != NULL && $_POST["submit"] == "OK")
	{
		if (file_exists("./private/passwd"))
		{
			$tmp = file_get_contents("./private/passwd");
			$array_data = unserialize($tmp);
			if (checker($_POST["login"], $array_data) == 1)
				echo "ERROR\n";
			else
			{
				$array_data[] = ["login"=>$_POST["login"],"passwd"=>hash("sha512", $_POST["passwd"])];
				file_put_contents("./private/passwd", serialize($array_data));
				echo "OK\n";
			}
		}
		else
		{
			$a = [["login"=>$_POST["login"],"passwd"=>hash("sha512", $_POST["passwd"])]];
			if (!file_exists("./private/")) 
				mkdir("./private/", 0777);
			file_put_contents("./private/passwd", serialize($a));
			echo "OK\n";
		}
	}
	else
	{
		echo "ERROR\n";
	}
?>