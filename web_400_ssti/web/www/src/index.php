<?php

require('../libs/Smarty.class.php');

$smarty = new Smarty();

$name = 'Milo';
if(isset($_REQUEST['name'])){
	$name = $_REQUEST['name'];
}

$smarty->assign('name',$name);

$smarty->display('string:'.'I`m ' . $name."\n");

?>
