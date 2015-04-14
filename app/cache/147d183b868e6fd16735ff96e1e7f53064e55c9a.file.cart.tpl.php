<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 15:51:05
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742551977550b3f91148e77-85394955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '147d183b868e6fd16735ff96e1e7f53064e55c9a' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/cart.tpl',
      1 => 1428954647,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742551977550b3f91148e77-85394955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b3f911ad7b8_16112692',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b3f911ad7b8_16112692')) {function content_550b3f911ad7b8_16112692($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
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
  form {
    margin: 15px 0;
  }
  .super {
  display: inline-block;
  margin: 10px 0;
  padding: 10px;
  border: solid 2px black;
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
      
<h2>My Cart</h2>

<h4 style = "color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>

<table id='cartListing'>
    
    
    <?php if ($_smarty_tpl->tpl_vars['cart_info']->value) {?>
      <tr>
        <th>Product</th>
        <th>Unit Price</th>
        <th>Quantity</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <tr>  
          <td><a href="productInfo.php?product_id=<?php echo $_smarty_tpl->tpl_vars['info']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></td>
          <td>$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value->price,2);?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['info']->value->quantity;?>
</td>
          <br />
          
        </tr>
      <?php } ?>
      
      <tr>
          <th>Total: $<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2);?>
</th>
      </tr>
      
      <tr class="super">
        <td><form action="clearCart.php">
            <input type="submit" value="Clear Cart">
        </form></td>
      
      <?php if ($_smarty_tpl->tpl_vars['valid']->value) {?>
         <td> <form action="placeOrder.php">
              <input type="submit" value="Place Order">
          </form></td>
        
      
      <?php }?>
      </tr>
    <?php } else { ?>
      <h3>Empty Cart</h3>
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
