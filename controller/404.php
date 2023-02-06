<?php

require_once ('../helper/global.php');

$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->display('404.tpl');

?>
