	session_start();
	echo 'only localhost can get flag';
	$flag = 'GPB{XXX}';
	if($_SERVER["REMOTE_ADDR"]==="127.0.0.1")
		$_SESSION['flag'] = $flag;

<?php
	session_start();
	echo 'only localhost can get flag';
	$flag = 'GPB{Unreal_Serialize}';
	if ($_SERVER["REMOTE_ADDR"] === "127.0.0.1")
		$_SESSION['flag'] = $flag;
?>
