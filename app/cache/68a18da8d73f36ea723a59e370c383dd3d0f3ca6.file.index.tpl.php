<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-01 00:46:19
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1441586243550b40e8132444-67333306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a18da8d73f36ea723a59e370c383dd3d0f3ca6' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/index.tpl',
      1 => 1427863474,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1441586243550b40e8132444-67333306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550b40e819e962_91599482',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550b40e819e962_91599482')) {function content_550b40e819e962_91599482($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
if (!is_callable('smarty_function_html_options')) include '/Users/earlespino/NetBeansProjects/WebStore/include/libs/plugins/function.html_options.php';
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
.price {
  text-align: right;
}
#form {
  margin: 15px 0;
}
#listing {
  margin-top: 15px;
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
      
<h2>Products</h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="get">
<select name="category_id">
  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

</select>
<button type="submit" name="doit">Change category</button>
</form>

<table id="listing">
  <tr>
    <th><a href="?orderField=name">name</a></th>
    <th>category</th>
    <th class="price"><a href="?orderField=price">price</a></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
  <tr>
    <td><a href="productInfo.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></td>
    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
    <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
  </tr>
  <?php } ?>
</table>

    </main>
  </div><!-- #container -->
<?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
