<?php

require ('../config.php');

$direct = $_POST('direct') || "";

$smarty->assign('direct',$direct);



$smarty->display('global/index.tpl');

?>