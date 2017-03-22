<?php
	session_start();
	if ($_SESSION !== false)
		$_SESSION['loggued_on_user'] = NULL;
?>