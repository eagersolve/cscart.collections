<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:34:52
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\views\companies\components\status_on_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36887757762558e0c712053-33368121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '152bc6e49bec1b613360c271a3037b107c1ac2d1' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\views\\companies\\components\\status_on_manage.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36887757762558e0c712053-33368121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'id' => 0,
    'status' => 0,
    'items_status' => 0,
    'runtime' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62558e0c772b78_65408902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62558e0c772b78_65408902')) {function content_62558e0c772b78_65408902($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_vendor'));
?>


<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']===smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'dispatch'=>"companies.update_status"), 0);?>

<?php } elseif (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['company']->value['status']!==smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'items_status'=>$_smarty_tpl->tpl_vars['items_status']->value,'object_id_name'=>"company_id",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'update_controller'=>"companies",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_vendor"),'status_target_id'=>"pagination_contents",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'popup_additional_class'=>"dropleft"), 0);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_status_switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['company']->value), 0);?>

<?php }?><?php }} ?>
