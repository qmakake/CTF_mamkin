<?php
	highlight_file(__FILE__);
	$b = 'implode';
	call_user_func($_GET[_],$_POST);

	session_start();

	if(isset($_GET[name]))
    		$_SESSION[name] = $_GET[name];

	var_dump($_SESSION);

	$a = array(reset($_SESSION),'GPB_CALL');
	call_user_func($b,$a);
?>
