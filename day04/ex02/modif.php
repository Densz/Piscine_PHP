<?php
	function checker($array, $login, $olspw)
	{
		$check_login = 0;
		$check_password = 0;
		foreach ($array as $line) 
		{
			foreach ($line as $key => $value)
			{
				if ($key == "login" && $value == $login)
					$check_login = 1;
				if ($key == "pwd" && $value == $oldpw)
					$check_password = 1;
			}
		}
		if ($check_login == 1 && $check_password == 1)
			return (1);
		return (0);
	}

	$tmp = file_get_contents("../ex01/private/passwd");
	$array_data = unserialize($tmp);
/*	$tmp = hash("sha512", $_POST["oldpw"]);
	echo "$tmp";*/
	if (checker($array_data, $_POST["login"], hash("sha512", $_POST["oldpw"])) == 1)
	{
		echo "rentre dans le checker";
		foreach ($array_data as $line) 
		{
			foreach ($line as $key => $value)
			{
				if ($key == $_POST["login"])
				{
					$line['passwd'] = hash("sha512", $_POST['newpw']);
					file_put_contents("../ex01/private/passwd", serialize($array_data));
				}
			}
		}
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>