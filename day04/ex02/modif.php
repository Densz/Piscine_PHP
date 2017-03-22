<?php
	function checker($array, $login, $oldpw)
	{
		foreach($array as $line) 
		{
			$check_login = 0;
			$check_password = 0;
			foreach($line as $key => $value)
			{
				if ($key == 'login' && $value == $login)
					$check_login = 1;
				if ($key == 'passwd' && $value == $oldpw)
					$check_password = 1;
				if ($check_login == 1 && $check_password == 1)
					return (1);
			}
		}
		return (0);
	}

	$tmp = file_get_contents('../ex01/private/passwd');
	$array_data = unserialize($tmp);
	$old_pwd = hash('sha512', $_POST['oldpw']);
	$new_pwd = hash('sha512', $_POST['newpw']);
	if (checker($array_data, $_POST['login'], $old_pwd) == 1)
	{
		$i = 0;
		while ($array_data[$i])
		{
			if ($array_data[$i]['login'] == $_POST['login'] && $array_data[$i]['passwd'] == $old_pwd)
			{
				$array_data[$i]['passwd'] = $new_pwd;
				file_put_contents('../ex01/private/passwd', serialize($array_data));
			}
			$i++;
		}
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>