<?php /* Smarty version Smarty-3.1.21, created on 2022-04-12 17:34:52
         compiled from "C:\Users\igorekeek\htdocs\cscart.collections\design\backend\templates\views\companies\components\company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120098592562558e0c8604d9-84173774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78bbdd19d12d7b3f83e5d6b1a383a13b1bdd0e76' => 
    array (
      0 => 'C:\\Users\\igorekeek\\htdocs\\cscart.collections\\design\\backend\\templates\\views\\companies\\components\\company_status_switcher.tpl',
      1 => 1643359490,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120098592562558e0c8604d9-84173774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62558e0c8a27c1_44694046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62558e0c8a27c1_44694046')) {function content_62558e0c8a27c1_44694046($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/Users/igorekeek/htdocs/cscart.collections/app/functions/smarty_plugins\\modifier.enum.php';
?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_tmp2,"data-ca-opened-status"=>$_tmp3,"data-ca-closed-status"=>$_tmp4,"data-ca-return-url"=>$_tmp5)), 0);?>

<?php }} ?>
