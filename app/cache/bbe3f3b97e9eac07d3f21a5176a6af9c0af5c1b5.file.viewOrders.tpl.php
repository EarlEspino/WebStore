<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 13:20:59
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/viewOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6822927165525ec9808cab7-54318341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe3f3b97e9eac07d3f21a5176a6af9c0af5c1b5' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/viewOrders.tpl',
      1 => 1428600050,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6822927165525ec9808cab7-54318341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5525ec9813e3f3_01651189',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525ec9813e3f3_01651189')) {function content_5525ec9813e3f3_01651189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
          maximum-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>
      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? basename(dirname($_SERVER['PHP_SELF'])) : $tmp);?>

    </title>
    <link rel="stylesheet" type="text/css" href="css/superfish.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/table-display.css" />
    
</head>
<?php echo smarty_function_load_session(array(),$_smarty_tpl);?>

<body>
  <div id="container">
    <header>
      <img src="img/header.png" />
      <span class="caption"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['session']->value->user->name)===null||$tmp==='' ? '' : $tmp);?>
</span>
    </header>
    <nav>
      <ul class="sf-menu nav_h">
        <?php echo $_smarty_tpl->getSubTemplate ("links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </ul>
      <ul class="sf-menu nav_v">
        <li>
          <a href="#" id="vMenuHeader" class="no-action">
            <img src="img/hamburger.png" />
          </a>
          <ul>
            <?php echo $_smarty_tpl->getSubTemplate ("links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </ul>
        </li>
      </ul>
    </nav>
    <main>
      
    <h2>Pending Orders</h2>
    
    <table>
        
        <?php if ($_smarty_tpl->tpl_vars['order_info']->value) {?>
        
        <tr>
            <th>Order ID</th>
            <th>Time</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <tr>
            <td><a href="orderDetails.php?order_id=<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['helper']->value->getDate($_smarty_tpl->tpl_vars['info']->value->created_at);?>
</td>
        </tr>
        <?php } ?>
        <?php } else { ?>
            <h3>You have no orders placed</h3>
        <?php }?>
          
    </table>

    </main>
  </div><!-- #container -->
<?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
