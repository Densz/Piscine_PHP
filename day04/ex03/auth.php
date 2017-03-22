<?php
	function auth($login, $passwd)
	{
		$pwd = hash('sha512', $passwd);
		$tmp = file_get_contents('../ex01/private/passwd');
		$array_data = unserialize($tmp);
		foreach($array_data as $line) 
		{
			$check_login = 0;
			$check_password = 0;
			foreach($line as $key => $value)
			{
				if ($key == 'login' && $value == $login)
					$check_login = 1;
				if ($key == 'passwd' && $value == $pwd)
					$check_password = 1;
				if ($check_login == 1 && $check_password == 1)
					return (true);
			}
		}
		return (false);
	}
?>