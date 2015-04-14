<?php

function smarty_function_load_session($params, &$smarty)
{
   require_once __DIR__ . "/../session.php";
   $smarty->assign('session', new Session());
}
