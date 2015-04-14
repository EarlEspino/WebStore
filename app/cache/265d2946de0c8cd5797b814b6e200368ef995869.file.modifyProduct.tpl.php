<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 15:08:08
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/modifyProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:820186537552732189be1e2-11249666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265d2946de0c8cd5797b814b6e200368ef995869' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/modifyProduct.tpl',
      1 => 1428952081,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820186537552732189be1e2-11249666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55273218a1ecf7_56397744',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55273218a1ecf7_56397744')) {function content_55273218a1ecf7_56397744($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
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
      
    <h2>Modify Product</h2>
    
    <h3 style="color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
    <table>
        <tr>
            <td>ID: </td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
        </tr>
        <tr>
            <td>Product Name: </td>
            <td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
        </tr> 
        <tr>
            <td>Category: </td>
            <td><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</td>
        </tr>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
        <tr>
            <td>Price: </td>
            <td>$<input type='text' name='price' value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
"/></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea rows=35 cols=80 name="description" value="<?php echo ($_smarty_tpl->tpl_vars['product']->value->description);?>
"></textarea></td>
        </tr>
        <tr>
            <td>Image: </td>
            <td><input type='text' name='image' value="<?php echo $_smarty_tpl->tpl_vars['product']->value->image;?>
" /></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Submit</button></td>  
        </tr>
        
        
    </table>
    </form>    

    </main>
  </div><!-- #container -->
<?php echo '<script'; ?>
 type="text/javascript">window.onunload = function(){}<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
