<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 16:58:15
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\buttons\helpdesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18845341286255857744d161-10019506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9567dc5d2e349f2a10b20aeab9c3125d1b8a5fed' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\buttons\\helpdesk.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18845341286255857744d161-10019506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btn_text' => 0,
    'btn_href' => 0,
    'app' => 0,
    'btn_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_625585774989f2_50278573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_625585774989f2_50278573')) {function content_625585774989f2_50278573($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
?>
<?php $_smarty_tpl->tpl_vars['btn_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['btn_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] : $tmp), null, 0);?>
<a class="btn btn-primary <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30 30"><g fill="#fff"><path d="M0 0h9.091v9.091H0zM10 10h9.091v9.091H10zM20.909 10H30v9.091h-9.091zM10 20.909h9.091V30H10zM20.909 20.909H30V30h-9.091z"/></g></svg>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }} ?>
