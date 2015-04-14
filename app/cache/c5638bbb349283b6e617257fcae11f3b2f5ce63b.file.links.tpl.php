<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 12:21:50
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:560414389550b3f8ed3ca86-11237738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5638bbb349283b6e617257fcae11f3b2f5ce63b' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/links.tpl',
      1 => 1428596506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '560414389550b3f8ed3ca86-11237738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b3f8ed47119_34372438',
  'variables' => 
  array (
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b3f8ed47119_34372438')) {function content_550b3f8ed47119_34372438($_smarty_tpl) {?><li><a href=".">Home</a></li>
<li><a href="cart.php">Cart</a></li>

<?php if ($_smarty_tpl->tpl_vars['session']->value->user&&$_smarty_tpl->tpl_vars['session']->value->user->is_admin) {?>
  <li><a href="addProduct.php">Add Product</a></li>
  <li><a href="viewAllOrders.php">View All Orders</a></li>  
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->user) {?>
  <li><a href="viewOrders.php">View Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
<?php } else { ?>
  <li><a href="login.php">Login</a></li>
<?php }?>
<?php }} ?>
