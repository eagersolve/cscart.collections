<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:00:45
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\common\notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3985415026255860de8bd35-04271474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df1f6fcb0946f727512073e0287e75a433d7c19' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\common\\notify_checkboxes.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3985415026255860de8bd35-04271474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_prefix' => 0,
    'notify' => 0,
    'prefix' => 0,
    'id' => 0,
    'notify_customer_status' => 0,
    'notify_text' => 0,
    'notify_department' => 0,
    'notify_department_status' => 0,
    'notify_vendor' => 0,
    'notify_vendor_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255860df19ca4_20285382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255860df19ca4_20285382')) {function content_6255860df19ca4_20285382($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_enum')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_customer','notify_orders_department','notify_vendor'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"select_popup:notify_checkboxes")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"select_popup:notify_checkboxes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars['name_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name_prefix']->value)===null||$tmp==='' ? "__notify" : $tmp), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['notify']->value) {?>
        <li class="divider"></li>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_user" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_customer_status']->value==true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_user]').prop('checked', this.checked);" />
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['notify_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("notify_customer") : $tmp), ENT_QUOTES, 'UTF-8');?>
</label></a>
        </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['notify_department']->value) {?>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_department">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_department" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_department" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_department_status']->value==true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_department]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->__("notify_orders_department");?>
</label></a>
        </li>
    <?php }?>
    <?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['notify_vendor']->value) {?>
        <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_vendor">
            <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_vendor" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_vendor" value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['notify_vendor_status']->value==true) {?> checked="checked" <?php }?> onclick="Tygh.$('input[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
_vendor]').prop('checked', this.checked);" />
            <?php echo $_smarty_tpl->__("notify_vendor");?>
</label></a>
        </li>
    <?php }?>            
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"select_popup:notify_checkboxes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
