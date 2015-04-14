<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-10 23:09:54
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/productInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1888465536550b40ec9c08f8-86006445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3851e7dd45305a44991ef35cb6289043f8e6a90b' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/productInfo.tpl',
      1 => 1428721781,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1888465536550b40ec9c08f8-86006445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b40eca1ecc4_32100627',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b40eca1ecc4_32100627')) {function content_550b40eca1ecc4_32100627($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
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
.cell {
  display: inline-block;
  vertical-align: top;
}
#quantity {
  background: #eee;
  margin: 10px 0;
  border: solid 1px red;
  padding: 5px 10px;
}
#product-content img {
  max-width:200px;
  float: right;
  margin: 0 0 10px 10px;
  
}
#descrip1 {
  max-width:300px;
  border-bottom: solid 1px black;
}
#after-product-content {
  clear: right;
  border-top: solid 1px black;
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
      

  <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h3>

  <div>
    Price: $<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>

    <br />
    
    <h4 style = "color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
    
    <form id="quantity" class="cell"  
          action="productInfo.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" 
          method="post">
        <table>
            <tr>
                <td>Quantity</td>
                <td>Enter "0" to remove from Cart</td>
            </tr>
            <tr>
                <td><input type="text" name='quantityText'></td>
                <td><button type="submit" name="change">Update</button></td>
            </tr>
        </table>
    </form>
  </div>

  <div id="product-content">
    <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
    <img src="img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" />
    <?php }?>

   <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

  </div>

  <div id="after-product-content">
      <?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
      <form action="modifyProduct.php" method="post">
          <input type="hidden" name ="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
          <input type="submit" name="modify" value="Modify" />
      </form>
          <?php }?>
  </div>


    </main>
  </div><!-- #container -->
<?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
