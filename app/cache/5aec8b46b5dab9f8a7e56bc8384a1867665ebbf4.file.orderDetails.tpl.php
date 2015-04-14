<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 12:42:01
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/orderDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2000831375526b33182f710-12957189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aec8b46b5dab9f8a7e56bc8384a1867665ebbf4' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/orderDetails.tpl',
      1 => 1428942981,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2000831375526b33182f710-12957189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526b3318c4733_02817374',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526b3318c4733_02817374')) {function content_5526b3318c4733_02817374($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
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
    
<style type="text/css">
.action {
  display: inline-block;
  margin: 10px 0;
  border: solid 1px black;
  padding: 15px;
}
.super {
  display: inline-block;
  margin: 10px 0;
  padding: 10px;
  border: solid 2px red;
}
.super form {
  display: inline-block;
  margin: 0 10px;
}
#message {
  color: red;
}
</style>

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
      
    <h2>Order Details</h2>
    
    <table>
        <tr>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Quantity</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderproduct_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['helper']->value->getProduct($_smarty_tpl->tpl_vars['info']->value->product_id)->name;?>
</td>
                <td>$<?php echo number_format($_smarty_tpl->tpl_vars['helper']->value->getProduct($_smarty_tpl->tpl_vars['info']->value->product_id)->price,2);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['info']->value->quantity;?>
</td>
    
            </tr>
                
        <?php } ?>
        
        <tr><th>Total Paid: $<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2);?>
</th></tr>
        
        
        <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
        <tr>
        <form action="processOrder.php" method="post">
            <th><input type='hidden' name='order_id' value="<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
" />
            <input type='hidden' name='remove_sure' value="<?php echo $_smarty_tpl->tpl_vars['remove_sure']->value;?>
" />
            <div class='super'><button type="submit" name="process">Process</button></th></div>
        </form>
        </tr>
        <?php }?>
        
    </table>
        
    <h3 id="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>

    </main>
  </div><!-- #container -->
<?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
