<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 16:57:42
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16785159556255855647c762-46365595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3cdae977f393b02b141ecac21ff48e6dcc9315a' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16785159556255855647c762-46365595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625585564eaec7_04360772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625585564eaec7_04360772')) {function content_625585564eaec7_04360772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
