<?php
	session_start();
	session_unset();
	session_destroy();
			echo ("<SCRIPT LANGUAGE='Javascript'>
			window.alert('LogOut Successful!')
			window.location.href='index.php'
			</SCRIPT>");
			exit;
?>