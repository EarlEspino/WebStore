<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 13:52:38
         compiled from "/Users/earlespino/NetBeansProjects/WebStore/templates/addProduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14568318965526a6e988d813-71125557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8052fb36a36eaabed21b4029996e52f247b8f6d0' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/addProduct.tpl',
      1 => 1428601955,
      2 => 'file',
    ),
    '9788e16176255fa56b472284e71f06909ecf9f65' => 
    array (
      0 => '/Users/earlespino/NetBeansProjects/WebStore/templates/layout.tpl',
      1 => 1427772372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14568318965526a6e988d813-71125557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526a6e99103b9_75466112',
  'variables' => 
  array (
    'page_title' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526a6e99103b9_75466112')) {function content_5526a6e99103b9_75466112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_session')) include '/Users/earlespino/NetBeansProjects/WebStore/include/myplugins/function.load_session.php';
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
      
    <h2>Add a Product</h2>
    
    <h3 style="color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h3>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
    <table>
        <tr>
            <td>Product Name: </td>
            <td><input type='text' name='name' /></td>
        </tr> 
        <tr>
            <td>Price: </td>
            <td>$<input type='text' name='price' /></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category_id">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea rows=35 cols=80 name="description"></textarea></td>
        </tr>
        <tr>
            <td>Image: </td>
            <td><input type='text' name='image' /></td>
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
