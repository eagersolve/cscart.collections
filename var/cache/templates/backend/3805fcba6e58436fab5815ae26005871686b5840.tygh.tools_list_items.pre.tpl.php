<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:01:27
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\addons\advanced_import\hooks\products\tools_list_items.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:915981297625586375fb5f1-49657568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3805fcba6e58436fab5815ae26005871686b5840' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\addons\\advanced_import\\hooks\\products\\tools_list_items.pre.tpl',
      1 => 1643359489,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '915981297625586375fb5f1-49657568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6255863763b637_57912975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6255863763b637_57912975')) {function content_6255863763b637_57912975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable("import_presets.manage&object_type=products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['import_product_href'] = clone $_smarty_tpl->tpl_vars['import_product_href'];?>
    <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable(fn_check_permissions("import_presets","update","admin","POST"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_permission_an_import'] = clone $_smarty_tpl->tpl_vars['has_permission_an_import'];?>
<?php }?>
<?php }} ?>
