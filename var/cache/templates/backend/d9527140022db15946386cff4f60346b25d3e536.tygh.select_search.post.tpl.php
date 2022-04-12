<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:29
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\bestsellers\hooks\products\select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169660970162558639c2fbc7-76241482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9527140022db15946386cff4f60346b25d3e536' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\select_search.post.tpl',
      1 => 1643359489,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169660970162558639c2fbc7-76241482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62558639c58022_33681790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62558639c58022_33681790')) {function content_62558639c58022_33681790($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
