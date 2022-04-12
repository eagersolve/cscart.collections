<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:34:40
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\views\block_manager\components\device_availability_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58668599162558e00c89241-01684813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0e846c41b46dcec3d35ff278d803fb79c18ef8' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\views\\block_manager\\components\\device_availability_attributes.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58668599162558e00c89241-01684813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'devices' => 0,
    'device' => 0,
    'is_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62558e00cbbc74_94409884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62558e00cbbc74_94409884')) {function content_62558e00cbbc74_94409884($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
    data-ca-device-availability-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>true<?php } else { ?>false<?php }?>"
<?php } ?>
<?php }} ?>
